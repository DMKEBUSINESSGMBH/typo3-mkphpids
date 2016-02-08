<?php

/**
 * PHPIDS
 *
 * Requirements: PHP5, SimpleXML
 *
 * Copyright (c) 2008 PHPIDS group (http://php-ids.org)
 *
 * PHPIDS is free software; you can redistribute it and/or modify
 * it under the terms of the GNU Lesser General Public License as published by
 * the Free Software Foundation, version 3 of the License, or
 * (at your option) any later version.
 *
 * PHPIDS is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public License
 * along with PHPIDS. If not, see <http://www.gnu.org/licenses/>.
 *
 * PHP version 5.1.6+
 *
 * @category Security
 * @package  PHPIDS
 * @author   Mario Heiderich <mario.heiderich@gmail.com>
 * @author   Christian Matthies <ch0012@gmail.com>
 * @author   Lars Strojny <lars@strojny.net>
 * @license  http://www.gnu.org/licenses/lgpl.html LGPL
 * @link     http://php-ids.org/
 */

require_once(tx_rnbase_util_Extensions::extPath('mkphpids').'IDS/Log/Interface.php');

/**
 * Database logging wrapper
 *
 * The database wrapper is designed to store reports into an sql database. It
 * implements the singleton pattern and is based in PDO, supporting
 * different database types.
 *
 * Taken from original database logger so the database handling is done by TYPO3!
 *
 * @category  Security
 * @package   PHPIDS
 * @author    Christian Matthies <ch0012@gmail.com>
 * @author    Mario Heiderich <mario.heiderich@gmail.com>
 * @author    Lars Strojny <lars@strojny.net>
 * @copyright 2007-2009 The PHPIDS Group
 * @license   http://www.gnu.org/licenses/lgpl.html LGPL
 * @version   Release: $Id:Database.php 517 2007-09-15 15:04:13Z mario $
 * @link      http://php-ids.org/
 */
class Tx_mkphpids_Log_Database implements IDS_Log_Interface
{

    /**
     * Database wrapper
     *
     * @var string
     */
    private $wrapper = null;

    /**
     * Database table
     *
     * @var string
     */
    private $table = null;

    /**
     * Database handle
     *
     * @var object  PDO instance
     */
    private $handle    = null;

    /**
     * Prepared SQL statement
     *
     * @var string
     */
    private $statement = null;

    /**
     * Holds current remote address
     *
     * @var string
     */
    private $ip = 'local/unknown';

    /**
     * Instance container
     *
     * Due to the singleton pattern this class allows to initiate only one instance
     * for each database wrapper.
     *
     * @var array
     */
    private static $instances = array();

    /**
     * Constructor
     *
     * Prepares the SQL statement
     *
     * @param mixed $config IDS_Init instance | array
     *
     * @return void
     */

    protected function __construct($config)
    {
        if ($config instanceof IDS_Init) {
            $this->wrapper  = $config->config['Logging']['wrapper'];
            $this->table    = $config->config['Logging']['table'];

        } elseif (is_array($config)) {
            $this->wrapper  = $config['wrapper'];
            $this->table    = $config['table'];
        }

        // determine correct IP address
        if ($_SERVER['REMOTE_ADDR'] != '127.0.0.1') {
            $this->ip = $_SERVER['REMOTE_ADDR'];
        } elseif (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $this->ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        }
    }

    /**
     * Returns an instance of this class
     *
     * This method allows the passed argument to be either an instance of IDS_Init or
     * an array.
     *
     * @param mixed $config IDS_Init | array
     * @param string the class name to use
     *
     * @return object $this
     */
    public static function getInstance($config, $classname = 'Tx_mkphpids_Log_Database')
    {
        if ($config instanceof IDS_Init) {
            $wrapper = $config->config['Logging']['wrapper'];
        } elseif (is_array($config)) {
            $wrapper = $config['wrapper'];
        }

        if (!isset(self::$instances[$wrapper])) {
            self::$instances[$wrapper] = new $classname($config);
        }

        return self::$instances[$wrapper];
    }

    /**
     * Permitting to clone this object
     *
     * For the sake of correctness of a singleton pattern, this is necessary
     *
     * @return void
     */
    private function __clone()
    {
    }

    /**
     * Stores given data into the database
     *
     * @param object $data IDS_Report instance
     *
     * @throws Exception if db error occurred
     * @return boolean
     */
    public function execute(IDS_Report $data)
    {

        if (!isset($_SERVER['REQUEST_URI'])) {
            $_SERVER['REQUEST_URI'] = substr($_SERVER['PHP_SELF'], 1);
            if (isset($_SERVER['QUERY_STRING']) && $_SERVER['QUERY_STRING']) {
                $_SERVER['REQUEST_URI'] .= '?' . $_SERVER['QUERY_STRING'];
            }
        }

        tx_rnbase::load('tx_rnbase_util_TYPO3');
        $dataArray = array(
			'get' => $_GET, //var_export($_GET, true),
			'post' => $_POST, //var_export($_POST, true),
			'server' => $_SERVER, //var_export($_SERVER, true),
			'feuser' => tx_rnbase_util_TYPO3::getFEUserUID(),
			'beuser' => tx_rnbase_util_TYPO3::getBEUserUID(),
        ); $dataArray = serialize($dataArray);

        foreach ($data as $event) {
        	$name   = $event->getName();
        	$value  = $event->getValue();
        	$page 	= isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : '';
        	$ip   	= $this->ip;
            $impact = $event->getImpact();


        	$fieldValues = array(
				'name' => $GLOBALS['TYPO3_DB']->quoteStr($name, $this->table),
        		'value' => $GLOBALS['TYPO3_DB']->quoteStr($value, $this->table),
        		'page' => $GLOBALS['TYPO3_DB']->quoteStr($page, $this->table),
        		'ip' => $GLOBALS['TYPO3_DB']->quoteStr($ip, $this->table),
        		'impact' => $GLOBALS['TYPO3_DB']->quoteStr($impact, $this->table),
        		'origin' => $GLOBALS['TYPO3_DB']->quoteStr($_SERVER['SERVER_ADDR'], $this->table),
        		'data' => $dataArray,
        		'created' => date('Y-m-d H:i:s'),
			);
			$res = $GLOBALS['TYPO3_DB']->exec_INSERTquery($this->table, $fieldValues);
			if(!$res){ die('ERROR STORING IMPACT IN DB'); }
        }

        return true;
    }
}

/**
 * Local variables:
 * tab-width: 4
 * c-basic-offset: 4
 * End:
 * vim600: sw=4 ts=4 expandtab
 */
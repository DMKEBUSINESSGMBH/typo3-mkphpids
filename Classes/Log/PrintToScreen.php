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

require_once(t3lib_extMgm::extPath('mkphpids').'IDS/Log/Interface.php');
tx_rnbase::load('tx_rnbase_util_Debug');

/**
 * Email logging wrapper
 *
 * The Email wrapper is designed to send reports via email. It implements the
 * singleton pattern.
 *
 * Added extended information in the email for TYPO3!
 *
 * @category  Security
 * @package   PHPIDS
 * @author    Hannes Bochmann
 * @license   http://www.gnu.org/licenses/lgpl.html LGPL
 */
class Tx_mkphpids_Log_PrintToScreen implements IDS_Log_Interface
{

	/**
	* Instance container
	*
	* @var array
	*/
	protected static $instance = array();

	/**
	 * @return object $this
	 */
	public static function getInstance()
	{
		if (!self::$instance) {
			self::$instance = new Tx_mkphpids_Log_PrintToScreen();
		}

		return self::$instance;
	}

    /**
     * @param object $data IDS_Report instance
     *
     * @return void
     */
    public function execute(IDS_Report $data)
    {
    	ob_start();
        tx_rnbase_util_Debug::debug(array(
        	"mkphpids vermutet eine Attacke:" . str_replace('<br/>', '', $data)
        ),__METHOD__.__LINE__);
        $GLOBALS['TYPO3_CONF_VARS']['FE']['compressionLevel'] = 0;
        ob_flush();
    }
}

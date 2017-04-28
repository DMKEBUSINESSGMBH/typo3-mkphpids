<?php

/* * *************************************************************
 *  Copyright notice
 *
 *  (c) 2011 Your name <pascal.naujoks@pixabit.de>
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 * ************************************************************* */
tx_rnbase::load('tx_rnbase_util_DB');
tx_rnbase::load('Tx_Rnbase_Scheduler_Task');
tx_rnbase::load('tx_rnbase_util_Logger');
tx_rnbase::load('tx_rnbase_util_Network');
tx_rnbase::load('tx_rnbase_util_Files');

/**
 * tx_mkphpids_cli
 *
 * @package         TYPO3
 * @subpackage      mkphpids
 * @author          Hannes Bochmann <hannes.bochmann@dmk-ebusiness.de>
 * @license         http://www.gnu.org/licenses/lgpl.html
 *                  GNU Lesser General Public License, version 3 or later
 */
class tx_mkphpids_cli extends Tx_Rnbase_Scheduler_Task
{
    public $pageid;
    public $remoteRSS;
    public $remoteFilter;
    public $remoteConverter;
    public $localFilter;
    public $localConverter;

    public function execute()
    {
        $this->remoteRSS = 'http://dev.itratos.de/projects/php-ids/repository/revisions/1/revisions/trunk/?format=atom';
        $this->remoteFilter = 'http://dev.itratos.de/projects/php-ids/repository/raw/trunk/lib/IDS/default_filter.xml';
        $this->remoteConverter = 'http://dev.itratos.de/projects/php-ids/repository/raw/trunk/lib/IDS/Converter.php';
        $this->localFilter = tx_rnbase_util_Extensions::extPath('mkphpids', 'IDS/default_filter.xml');
        $this->localConverter = tx_rnbase_util_Extensions::extPath('mkphpids', 'IDS/Converter.php');

        $remoteUpdated = $this->hlp_rssUpdated($this->remoteRSS);
        $localFilterTime = @filemtime($this->localFilter);
        $localConverterTime = @filemtime($this->localConverter);

        if ($localConverterTime < $remoteUpdated || $localFilterTime < $remoteUpdated) {
            $filter = tx_rnbase_util_Network::getUrl($this->remoteFilter);
            $filter = tx_rnbase_util_Files::writeFile($this->localFilter, $filter);
            $converter = tx_rnbase_util_Network::getUrl($this->remoteConverter);
            $converter = tx_rnbase_util_Files::writeFile($this->localConverter, $converter);
            $res = tx_rnbase_util_DB::doQuery('TRUNCATE tx_mkphpids_cache');

            if ($filter && $converter && $res) {
                tx_rnbase_util_Logger::devLog('[scheduler: phpids updater]: Updated successfull.', 'mkphpids', -1);

                return true;
            } else {
                tx_rnbase_util_Logger::devLog('[scheduler: phpids updater]: Error Updating! $filter: ' . $filter . ' $converter: ' . $converter, 'mkphpids', 3);

                return false;
            }
        } else {
            tx_rnbase_util_Logger::devLog('[scheduler: phpids updater]: No update needed', 'mkphpids', 1);

            return true;
        }
    }

    public function hlp_rssUpdated($rss)
    {
        $rssFile = tx_rnbase_util_Network::getUrl($rss);
        preg_match('/<updated>(.+)<\/updated>/Uism', $rssFile, $updated);
        $updated = (string) $updated[1];

        return strtotime($updated);
    }
}

if (defined('TYPO3_MODE') && $GLOBALS['TYPO3_CONF_VARS'][TYPO3_MODE]['XCLASS']['ext/mkphpids/cli/class.tx_mkphpids_cli.php']) {
    include_once($GLOBALS['TYPO3_CONF_VARS'][TYPO3_MODE]['XCLASS']['ext/mkphpids/cli/class.tx_mkphpids_cli.php']);
}

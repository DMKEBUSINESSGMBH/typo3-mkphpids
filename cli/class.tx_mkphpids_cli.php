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
require_once(t3lib_extMgm::extPath('rn_base') . 'class.tx_rnbase.php');
tx_rnbase::load('tx_rnbase_util_DB');

class tx_mkphpids_cli extends tx_scheduler_Task {

    var $pageid;
    var $remoteRSS;
    var $remoteFilter;
    var $remoteConverter;
    var $localFilter;
    var $localConverter;

    public function execute() {
        $this->remoteRSS = 'http://dev.itratos.de/projects/php-ids/repository/revisions/1/revisions/trunk/?format=atom';
        $this->remoteFilter = 'http://dev.itratos.de/projects/php-ids/repository/raw/trunk/lib/IDS/default_filter.xml';
        $this->remoteConverter = 'http://dev.itratos.de/projects/php-ids/repository/raw/trunk/lib/IDS/Converter.php';
        $this->localFilter = t3lib_extMgm::extPath('mkphpids', 'IDS/default_filter.xml');
        $this->localConverter = t3lib_extMgm::extPath('mkphpids', 'IDS/Converter.php');

        $remoteUpdated = $this->hlp_rssUpdated($this->remoteRSS);
        $localFilterTime = @filemtime($this->localFilter);
        $localConverterTime = @filemtime($this->localConverter);

        if ($localConverterTime < $remoteUpdated || $localFilterTime < $remoteUpdated) {
	    $filter = t3lib_div::getUrl($this->remoteFilter);
            $filter = t3lib_div::writeFile($this->localFilter, $filter);
            $converter = t3lib_div::getUrl($this->remoteConverter);
            $converter = t3lib_div::writeFile($this->localConverter, $converter);
            $res = tx_rnbase_util_DB::doQuery('TRUNCATE tx_mkphpids_cache');

            if ($filter && $converter && $res) {
                t3lib_div::devLog('[scheduler: phpids updater]: Updated successfull.', 'mkphpids', -1);
                return true;
            } else {
                t3lib_div::devLog('[scheduler: phpids updater]: Error Updating! $filter: ' . $filter . ' $converter: ' . $converter, 'mkphpids', 3);
                return false;
            }
        } else {
            t3lib_div::devLog('[scheduler: phpids updater]: No update needed', 'mkphpids', 1);
            return true;
        }
    }

    function hlp_rssUpdated($rss) {
        $rssFile = t3lib_div::getUrl($rss);
        preg_match("/<updated>(.+)<\/updated>/Uism", $rssFile, $updated);
        $updated = (string) $updated[1];

        return strtotime($updated);
    }

}

if (defined('TYPO3_MODE') && $TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/mkphpids/cli/class.tx_mkphpids_cli.php']) {
    include_once($TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/mkphpids/cli/class.tx_mkphpids_cli.php']);
}
?>
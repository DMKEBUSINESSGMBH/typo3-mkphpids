<?php
if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

// wir brauchen die TypoScript Konfiguration für die aktuelle Seite. Das ist daher der frühestmögliche Einstiegspunkt.
$GLOBALS ['TYPO3_CONF_VARS']['SC_OPTIONS']['tslib/class.tslib_fe.php']['configArrayPostProc'][]
    = 'EXT:mkphpids/Classes/Frontend/Utility.php:Tx_Mkphpids_Frontend_Utility->runIntrusionDetection';

tx_rnbase_util_Extensions::addPItoST43($_EXTKEY, 'pi1/class.tx_mkphpids_pi1.php', '_pi1', '', 0);
include tx_rnbase_util_Extensions::extPath($_EXTKEY).'ext_localconf_advanced.php';

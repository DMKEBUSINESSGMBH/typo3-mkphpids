<?php
if (!defined ('TYPO3_MODE')) 	die ('Access denied.');

$GLOBALS ['TYPO3_CONF_VARS']['SC_OPTIONS']['tslib/index_ts.php']['preprocessRequest'][]
	= 'EXT:mkphpids/Classes/Hook/IndexTs.php:Tx_Mkphpids_Hook_IndexTs->preprocessRequest';

t3lib_extMgm::addPItoST43($_EXTKEY, 'pi1/class.tx_mkphpids_pi1.php', '_pi1', '', 0);
@include t3lib_extMgm::extPath($_EXTKEY).'ext_localconf_advanced.php';



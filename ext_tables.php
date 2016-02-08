<?php
if (!defined ('TYPO3_MODE')) 	die ('Access denied.');
$_EXTKEY = 'mkphpids';
$TCA['tx_mkphpids_log'] = array (
	'ctrl' => array (
		'title'     => 'LLL:EXT:mkphpids/locallang_db.xml:tx_mkphpids_log',
		'label'     => 'uid',
		'tstamp'    => 'tstamp',
		'crdate'    => 'crdate',
		'cruser_id' => 'cruser_id',
		'default_sortby' => 'ORDER BY crdate',
		'delete' => 'deleted',
		'dynamicConfigFile' => tx_rnbase_util_Extensions::extPath($_EXTKEY).'tca.php',
		'iconfile'          => 'EXT:mkphpids/icon_tx_mkphpids_log.gif',
	),
);

$TCA['tx_mkphpids_cache'] = array (
	'ctrl' => array (
		'title'     => 'LLL:EXT:mkphpids/locallang_db.xml:tx_mkphpids_cache',
		'label'     => 'uid',
		'tstamp'    => 'tstamp',
		'crdate'    => 'crdate',
		'cruser_id' => 'cruser_id',
		'default_sortby' => 'ORDER BY crdate',
		'dynamicConfigFile' => tx_rnbase_util_Extensions::extPath($_EXTKEY).'tca.php',
		'iconfile'          => 'EXT:mkphpids/icon_tx_mkphpids_cache.gif',
	),
);


if (TYPO3_MODE == 'BE') {
	tx_rnbase_util_Extensions::addModulePath('tools_txmkphpidsM1', tx_rnbase_util_Extensions::extPath($_EXTKEY) . 'mod1/');

	tx_rnbase_util_Extensions::addModule('tools', 'txmkphpidsM1', '', tx_rnbase_util_Extensions::extPath($_EXTKEY) . 'mod1/');
}
tx_rnbase_util_Extensions::addStaticFile($_EXTKEY, './', 'MK PHPIDS');

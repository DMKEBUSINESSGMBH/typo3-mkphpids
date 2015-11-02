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
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY).'tca.php',
		'iconfile'          => t3lib_extMgm::extRelPath($_EXTKEY).'icon_tx_mkphpids_log.gif',
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
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY).'tca.php',
		'iconfile'          => t3lib_extMgm::extRelPath($_EXTKEY).'icon_tx_mkphpids_cache.gif',
	),
);


if (TYPO3_MODE == 'BE') {
	t3lib_extMgm::addModulePath('tools_txmkphpidsM1', t3lib_extMgm::extPath($_EXTKEY) . 'mod1/');

	t3lib_extMgm::addModule('tools', 'txmkphpidsM1', '', t3lib_extMgm::extPath($_EXTKEY) . 'mod1/');
}
t3lib_extMgm::addStaticFile($_EXTKEY, './', 'MK PHPIDS');

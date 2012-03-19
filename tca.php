<?php
if (!defined ('TYPO3_MODE')) 	die ('Access denied.');

$TCA['tx_mkphpids_log'] = array (
	'ctrl' => $TCA['tx_mkphpids_log']['ctrl'],
	'interface' => array (
		'showRecordFieldList' => 'name,value,page,ip,impact,origin,created'
	),
	'feInterface' => $TCA['tx_mkphpids_log']['feInterface'],
	'columns' => array (
		'name' => array (		
			'exclude' => 1,		
			'label' => 'LLL:EXT:mkphpids/locallang_db.xml:tx_mkphpids_log.name',		
			'config' => array (
				'type' => 'input',	
				'size' => '30',
			)
		),
		'value' => array (		
			'exclude' => 1,		
			'label' => 'LLL:EXT:mkphpids/locallang_db.xml:tx_mkphpids_log.value',		
			'config' => array (
				'type' => 'text',
				'cols' => '30',	
				'rows' => '5',
			)
		),
		'page' => array (		
			'exclude' => 1,		
			'label' => 'LLL:EXT:mkphpids/locallang_db.xml:tx_mkphpids_log.page',		
			'config' => array (
				'type' => 'text',
				'cols' => '30',	
				'rows' => '5',
			)
		),
		'ip' => array (		
			'exclude' => 1,		
			'label' => 'LLL:EXT:mkphpids/locallang_db.xml:tx_mkphpids_log.ip',		
			'config' => array (
				'type' => 'input',	
				'size' => '30',
			)
		),
		'impact' => array (		
			'exclude' => 1,		
			'label' => 'LLL:EXT:mkphpids/locallang_db.xml:tx_mkphpids_log.impact',		
			'config' => array (
				'type'     => 'input',
				'size'     => '4',
				'max'      => '4',
				'eval'     => 'int',
				'checkbox' => '0',
				'range'    => array (
					'upper' => '1000',
					'lower' => '10'
				),
				'default' => 0
			)
		),
		'origin' => array (		
			'exclude' => 1,		
			'label' => 'LLL:EXT:mkphpids/locallang_db.xml:tx_mkphpids_log.origin',		
			'config' => array (
				'type' => 'input',	
				'size' => '30',
			)
		),
		'created' => array (		
			'exclude' => 1,		
			'label' => 'LLL:EXT:mkphpids/locallang_db.xml:tx_mkphpids_log.created',		
			'config' => array (
				'type' => 'input',	
				'size' => '30',
			)
		),
	),
	'types' => array (
		'0' => array('showitem' => 'name;;;;1-1-1, value, page, ip, impact, origin, created')
	),
	'palettes' => array (
		'1' => array('showitem' => '')
	)
);



$TCA['tx_mkphpids_cache'] = array (
	'ctrl' => $TCA['tx_mkphpids_cache']['ctrl'],
	'interface' => array (
		'showRecordFieldList' => 'type,created,phpids_data,modified'
	),
	'feInterface' => $TCA['tx_mkphpids_cache']['feInterface'],
	'columns' => array (
		'type' => array (		
			'exclude' => 1,		
			'label' => 'LLL:EXT:mkphpids/locallang_db.xml:tx_mkphpids_cache.type',		
			'config' => array (
				'type' => 'input',	
				'size' => '30',
			)
		),
		'created' => array (		
			'exclude' => 1,		
			'label' => 'LLL:EXT:mkphpids/locallang_db.xml:tx_mkphpids_cache.created',		
			'config' => array (
				'type' => 'input',	
				'size' => '30',
			)
		),
		'phpids_data' => array (		
			'exclude' => 1,		
			'label' => 'LLL:EXT:mkphpids/locallang_db.xml:tx_mkphpids_cache.phpids_data',		
			'config' => array (
				'type' => 'text',
				'cols' => '30',	
				'rows' => '5',
			)
		),
		'modified' => array (		
			'exclude' => 1,		
			'label' => 'LLL:EXT:mkphpids/locallang_db.xml:tx_mkphpids_cache.modified',		
			'config' => array (
				'type' => 'input',	
				'size' => '30',
			)
		),
	),
	'types' => array (
		'0' => array('showitem' => 'type;;;;1-1-1, created, phpids_data, modified')
	),
	'palettes' => array (
		'1' => array('showitem' => '')
	)
);
@include 'tca_advanced.php';
?>
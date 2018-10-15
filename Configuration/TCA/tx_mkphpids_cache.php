<?php
if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

return array(
    'ctrl' => array(
        'title'     => 'LLL:EXT:mkphpids/locallang_db.xml:tx_mkphpids_cache',
        'label'     => 'uid',
        'tstamp'    => 'tstamp',
        'crdate'    => 'crdate',
        'cruser_id' => 'cruser_id',
        'default_sortby' => 'ORDER BY crdate',
        'iconfile'          => 'EXT:mkphpids/icon_tx_mkphpids_cache.gif',
        'hideTable' => true,
    ),
    'interface' => array(
        'showRecordFieldList' => 'type,created,phpids_data,modified'
    ),
    'columns' => array(
        'type' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:mkphpids/locallang_db.xml:tx_mkphpids_cache.type',
            'config' => array(
                'type' => 'input',
                'size' => '30',
            )
        ),
        'created' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:mkphpids/locallang_db.xml:tx_mkphpids_cache.created',
            'config' => array(
                'type' => 'input',
                'size' => '30',
            )
        ),
        'phpids_data' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:mkphpids/locallang_db.xml:tx_mkphpids_cache.phpids_data',
            'config' => array(
                'type' => 'text',
                'cols' => '30',
                'rows' => '5',
            )
        ),
        'modified' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:mkphpids/locallang_db.xml:tx_mkphpids_cache.modified',
            'config' => array(
                'type' => 'input',
                'size' => '30',
            )
        ),
    ),
    'types' => array(
        '0' => array('showitem' => 'type, created, phpids_data, modified')
    ),
    'palettes' => array(
        '1' => array('showitem' => '')
    )
);

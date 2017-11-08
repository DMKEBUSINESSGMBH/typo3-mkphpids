<?php
if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

return array(
    'ctrl' => array(
        'title'     => 'LLL:EXT:mkphpids/locallang_db.xml:tx_mkphpids_log',
        'label'     => 'uid',
        'tstamp'    => 'tstamp',
        'crdate'    => 'crdate',
        'cruser_id' => 'cruser_id',
        'default_sortby' => 'ORDER BY crdate',
        'delete' => 'deleted',
        'iconfile'          => 'EXT:mkphpids/icon_tx_mkphpids_log.gif',
    ),
    'interface' => array(
        'showRecordFieldList' => 'name,value,page,ip,impact,origin,created'
    ),
    'columns' => array(
        'name' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:mkphpids/locallang_db.xml:tx_mkphpids_log.name',
            'config' => array(
                'type' => 'input',
                'size' => '30',
            )
        ),
        'value' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:mkphpids/locallang_db.xml:tx_mkphpids_log.value',
            'config' => array(
                'type' => 'text',
                'cols' => '30',
                'rows' => '5',
            )
        ),
        'page' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:mkphpids/locallang_db.xml:tx_mkphpids_log.page',
            'config' => array(
                'type' => 'text',
                'cols' => '30',
                'rows' => '5',
            )
        ),
        'ip' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:mkphpids/locallang_db.xml:tx_mkphpids_log.ip',
            'config' => array(
                'type' => 'input',
                'size' => '30',
            )
        ),
        'impact' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:mkphpids/locallang_db.xml:tx_mkphpids_log.impact',
            'config' => array(
                'type'     => 'input',
                'size'     => '4',
                'max'      => '4',
                'eval'     => 'int',
                'checkbox' => '0',
                'range'    => array(
                    'upper' => '1000',
                    'lower' => '10'
                ),
                'default' => 0
            )
        ),
        'origin' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:mkphpids/locallang_db.xml:tx_mkphpids_log.origin',
            'config' => array(
                'type' => 'input',
                'size' => '30',
            )
        ),
        'created' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:mkphpids/locallang_db.xml:tx_mkphpids_log.created',
            'config' => array(
                'type' => 'input',
                'size' => '30',
            )
        ),
    ),
    'types' => array(
        '0' => array('showitem' => 'name, value, page, ip, impact, origin, created')
    ),
    'palettes' => array(
        '1' => array('showitem' => '')
    )
);

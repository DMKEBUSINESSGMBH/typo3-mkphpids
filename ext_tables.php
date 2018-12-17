<?php
use TYPO3\CMS\Scheduler\Task\TableGarbageCollectionTask;
use TYPO3\CMS\Scheduler\Task\IpAnonymizationTask;

if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

call_user_func(
    function () {
        $_EXTKEY = 'mkphpids';

        // @TODO: refactor the backend module to use in typo3 8 or heigher
        if (TYPO3_MODE == 'BE' && !tx_rnbase_util_TYPO3::isTYPO80OrHigher()) {
            tx_rnbase_util_Extensions::addModulePath('tools_txmkphpidsM1', tx_rnbase_util_Extensions::extPath($_EXTKEY) . 'mod1/');

            tx_rnbase_util_Extensions::addModule('tools', 'txmkphpidsM1', '', tx_rnbase_util_Extensions::extPath($_EXTKEY) . 'mod1/');
        }
        tx_rnbase_util_Extensions::addStaticFile($_EXTKEY, './', 'MK PHPIDS');

        /**
         * Garbage Collector
         */
        $GLOBALS['TYPO3_CONF_VARS']
            ['SC_OPTIONS']
            ['scheduler']
            ['tasks']
            [TableGarbageCollectionTask::class]
            ['options']
            ['tables']
            ['tx_mkphpids_log'] = [
                'dateField' => 'tstamp',
                'expirePeriod' => 90
            ];

        /**
         * Anonymize IPs in the logs
         */
        $GLOBALS['TYPO3_CONF_VARS']
            ['SC_OPTIONS']
            ['scheduler']
            ['tasks']
            [IpAnonymizationTask::class]
            ['options']
            ['tables']
            ['tx_mkphpids_log'] = [
                'dateField' => 'tstamp',
                'ipField' => 'ip'
            ];
    }
);

<?php
if (TYPO3_MODE=='BE')    {
    // Setting up scripts that can be run from the cli_dispatch.phpsh script.
    $TYPO3_CONF_VARS['SC_OPTIONS']['GLOBAL']['cliKeys'][$_EXTKEY] = array('EXT:'.$_EXTKEY.'/cli/class.tx_mkphpids_cli.php','_CLI_cron');
}

/* Registering class to scheduler */
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['scheduler']['tasks']['tx_mkphpids_cli'] = array(
	'extension' => $_EXTKEY,
	'title' => 'PHPIDS filter and converter update',
	'description' => 'This task updates the PHPIDS default_filter.xml and Converter.php',
);
?>
<?php
if (!defined ('TYPO3_MODE')) 	die ('Access denied.');

t3lib_extMgm::addPItoST43($_EXTKEY, 'pi1/class.tx_mkphpids_pi1.php', '_pi1', '', 0);
@include t3lib_extMgm::extPath($_EXTKEY).'ext_localconf_advanced.php';	?>
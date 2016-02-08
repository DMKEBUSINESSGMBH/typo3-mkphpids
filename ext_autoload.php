<?php

// wir können weder den Extensionmanager nutzen (auf Grund der verschiedenen TYPO3 Versionen)
// noch tx_rnbase_util_Extensions (weil noch nicht geladen). Also nehmen wir den Pfad hart. Dürfte
// aber kein Problem sein.
$extensionPath = PATH_typo3conf . 'ext/mkphpids/';
return array(
    'tx_mkphpids_cli' => $extensionPath . 'cli/class.tx_mkphpids_cli.php',
);

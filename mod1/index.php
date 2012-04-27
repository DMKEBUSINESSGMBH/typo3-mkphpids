<?php

/* * *************************************************************
 *  Copyright notice
 *
 *  (c) 2009 Pascal Naujoks <pascal.naujoks@pixabit.de>
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 * ************************************************************* */


// DEFAULT initialization of a module [BEGIN]
unset($MCONF);
require_once('conf.php');
require_once($BACK_PATH . 'init.php');
require_once($BACK_PATH . 'template.php');

$LANG->includeLLFile('EXT:mkphpids/mod1/locallang.xml');
require_once(PATH_t3lib . 'class.t3lib_scbase.php');
$BE_USER->modAccess($MCONF, 1); // This checks permissions and exits if the users has no permission for entry.
// DEFAULT initialization of a module [END]

/**
 * Module 'PHP IDS' for the 'mkphpids' extension.
 *
 * @author	Pascal Naujoks <pascal.naujoks@pixabit.de>
 * @package	TYPO3
 * @subpackage	tx_mkphpids
 */
class tx_mkphpids_module1 extends t3lib_SCbase {

    var $pageinfo;
    var $remoteRSS;
    var $remoteFilter;
    var $remoteConverter;
    var $localFilter;
    var $localConverter;

    /**
     * Initializes the Module
     * @return	void
     */
    function init() {
	global $BE_USER, $LANG, $BACK_PATH, $TCA_DESCR, $TCA, $CLIENT, $TYPO3_CONF_VARS;
	parent::init();

	$this->remoteRSS = 'http://dev.itratos.de/projects/php-ids/repository/revisions/1/revisions/trunk/?format=atom';
	$this->remoteFilter = 'http://dev.itratos.de/projects/php-ids/repository/raw/trunk/lib/IDS/default_filter.xml';
	$this->remoteConverter = 'http://dev.itratos.de/projects/php-ids/repository/raw/trunk/lib/IDS/Converter.php';
	$this->localFilter = t3lib_extMgm::extPath('mkphpids', 'IDS/default_filter.xml');
	$this->localConverter = t3lib_extMgm::extPath('mkphpids', 'IDS/Converter.php');
    }

    /**
     * Adds items to the ->MOD_MENU array. Used for the function menu selector.
     *
     * @return	void
     */
    function menuConfig() {
	global $LANG;
	$this->MOD_MENU = Array(
	    'function' => Array(
		'1' => $LANG->getLL('function1'),
		'2' => $LANG->getLL('function2'),
		'3' => $LANG->getLL('function3'),
		'4' => $LANG->getLL('function4'),
	    )
	);
	parent::menuConfig();
    }

    /**
     * Main function of the module. Write the content to $this->content
     * If you chose "web" as main module, you will need to consider the $this->id parameter which will contain the uid-number of the page clicked in the page tree
     *
     * @return	[type]
     */
    function main() {
	global $BE_USER, $LANG, $BACK_PATH, $TCA_DESCR, $TCA, $CLIENT, $TYPO3_CONF_VARS;

	// Access check! The page will show only if there is a valid page and if this page may be viewed by the user
	$this->pageinfo = t3lib_BEfunc::readPageAccess($this->id, $this->perms_clause);
	$access = is_array($this->pageinfo) ? 1 : 0;

	if (($this->id && $access) || ($BE_USER->user['admin'] && !$this->id)) {

	    // Draw the header.
	    $this->doc = t3lib_div::makeInstance('mediumDoc');
	    $this->doc->backPath = $BACK_PATH;
	    $this->doc->form = '';

	    // JavaScript
	    $this->doc->JScode = '  <script language="javascript" type="text/javascript">
                                        script_ended = 0;
                                        function jumpToUrl(URL)	{
                                            document.location = URL;
                                        }
                                    </script>';
	    $this->doc->postCode = '<script language="javascript" type="text/javascript">
                                        script_ended = 1;
                                        if (top.fsMod) top.fsMod.recentIds["web"] = 0;
                                    </script>';

	    $headerSection = '<img alt="' . $LANG->getLL('title') . '" title="pixabit" src="moduleicon.gif"/> <i>PHP Intrusion Detection System</i>. ';
	    $headerSection.= 'Need help with this extension? Contact us at <a href="http://www.pixabit.de" target="_blank">www.pixabit.de</a>';

	    $this->content.=$this->doc->startPage($LANG->getLL('title'));
	    $this->content.=$this->doc->header($LANG->getLL('title'));
	    $this->content.=$this->doc->spacer(5);
	    $this->content.=$this->doc->section('', $this->doc->funcMenu($headerSection, t3lib_BEfunc::getFuncMenu($this->id, 'SET[function]', $this->MOD_SETTINGS['function'], $this->MOD_MENU['function'])));
	    $this->content.=$this->doc->divider(5);

	    // Render content:
	    $this->moduleContent();

	    // ShortCut
	    if ($BE_USER->mayMakeShortcut()) {
		$this->content.=$this->doc->spacer(20) . $this->doc->section('', $this->doc->makeShortcutIcon('id', implode(',', array_keys($this->MOD_MENU)), $this->MCONF['name']));
	    }

	    $this->content.=$this->doc->spacer(10);
	} else {
	    // If no access or if ID == zero

	    $this->doc = t3lib_div::makeInstance('mediumDoc');
	    $this->doc->backPath = $BACK_PATH;

	    $this->content.=$this->doc->startPage($LANG->getLL('title'));
	    $this->content.=$this->doc->header($LANG->getLL('title'));
	    $this->content.=$this->doc->spacer(5);
	    $this->content.=$this->doc->spacer(10);
	}
    }

    /**
     * Prints out the module HTML
     *
     * @return	void
     */
    function printContent() {
	$this->content.=$this->doc->endPage();
	echo $this->content;
    }

    /**
     * Generates the module content
     *
     * @return	void
     */
    function moduleContent() {
	global $LANG, $BACK_PATH, $TYPO3_CONF_VARS;

	$content .= '
             <style type="text/css">
                #ext-px-phpids-mod1-index-php { margin:10px; }
                #ext-px-phpids-mod1-index-php .typo3-mediumDoc { width: 100%; }
                TABLE.typo3-dblist TD DIV { width: inherit; height: inherit; padding: 0px 2px 0px 2px; overflow:auto; }
                .col-title { font-weight:bold; }
             </style>
        ';

	switch ((string) $this->MOD_SETTINGS['function']) {

	    case 1: // Show records from mkphpids_log
		if (isset($_REQUEST["order"]) && $_REQUEST["order"] != '') {
		    $req_ord = substr(urldecode($_REQUEST["order"]), 0, strpos(urldecode($_REQUEST["order"]), ' '));
		    $req_dir = trim(substr(urldecode($_REQUEST["order"]), strpos(urldecode($_REQUEST["order"]), ' ')));
		    $order = urldecode($_REQUEST["order"]);
		} else {
		    $req_ord = 'created';
		    $req_dir = 'DESC';
		    $order = "created DESC";
		}
		$start = is_numeric($_REQUEST['start']) ? $_REQUEST['start'] : 0;

		$res = $GLOBALS['TYPO3_DB']->exec_SELECTquery('*', 'tx_mkphpids_log', 'DELETED=0', '', $order, intval($start) . ',50');
		$numRows = $GLOBALS["TYPO3_DB"]->sql_num_rows($res);
		if ($numRows > 0) {
		    if ($req_ord != false) {
			if ($req_dir == 'DESC') {
			    $direction = urlencode(' ASC');
			    $arrow = '<img src="' . $BACK_PATH . 'sysext/t3skin/icons/gfx/redup.gif" width="7" height="4" alt="UP" />';
			} else {
			    $direction = urlencode(' DESC');
			    $arrow = '<img src="' . $BACK_PATH . 'sysext/t3skin/icons/gfx/reddown.gif" width="7" height="4" alt="DOWN" />';
			}
		    }

		    $content .= '<p class="typo3-message message-information">' . $LANG->getLL('function1_text') . '</p>';

		    $content .= '<table class="typo3-dblist" cellspacing="0" cellpadding="0" border="0">
                                    <thead>
                                        <tr class="c-headLine">
                                            <td class="col-title"><a style="width:150px" href="index.php?order=name' . ($req_ord == 'name' ? $direction : urlencode(' ASC')) . '">Name ' . ($req_ord == 'name' ? $arrow : '') . '</a></td>
                                            <td class="col-title"><a style="width:375px" href="index.php?order=value' . ($req_ord == 'value' ? $direction : urlencode(' ASC')) . '">Value ' . ($req_ord == 'value' ? $arrow : '') . '</a></td>
                                            <td class="col-title"><a style="width:375px" href="index.php?order=page' . ($req_ord == 'page' ? $direction : urlencode(' ASC')) . '">Page ' . ($req_ord == 'page' ? $arrow : '') . '</a></td>
                                            <td class="col-title"><a style="width:100px" href="index.php?order=ip' . ($req_ord == 'ip' ? $direction : urlencode(' ASC')) . '">IP ' . ($req_ord == 'ip' ? $arrow : '') . '</a></td>
                                            <td class="col-title"><a style="width:100px" href="index.php?order=origin' . ($req_ord == 'origin' ? $direction : urlencode(' ASC')) . '">Origin ' . ($req_ord == 'origin' ? $arrow : '') . '</a></td>
                                            <td class="col-title"><a style="width:100px" href="index.php?order=created' . ($req_ord == 'created' ? $direction : urlencode(' ASC')) . '">Created ' . ($req_ord == 'created' ? $arrow : '') . '</a></td>
                                            <td class="col-title"><a style="width:75px; text-align:center;" href="index.php?order=impact' . ($req_ord == 'impact' ? $direction : urlencode(' DESC')) . '">Impact ' . ($req_ord == 'impact' ? $arrow : '') . '</a></td>
                                            <td class="col-title">Extra Data</td>
                                        </tr>
		    						</thead>
		    						<tbody>';

		    while ($row = $GLOBALS['TYPO3_DB']->sql_fetch_assoc($res)) {
			$i++;
			$dataArray = $row['data'];
			if (strlen($dataArray) > 10240) {
				$dataArray = 'To many data';
			} else {
				$dataArray = unserialize($dataArray);
// 				$dataArray = '<a title="Show extra data" id="extra-link-'.$row['uid'].'" href="javascript:document.getElementById(\'extra-data-'.$row['uid'].'\').style.display = \'block\';">'
// 							.'+ Show Data: </a>'
// 							.'<div id="extra-data-'.$row['uid'].'" style="display:none;">'.t3lib_div::view_array($dataArray).'</div>';
				$dataArray = '@TODO: Javascript zum einblenden. Die Daten liegen momentan im verstecklten Div!<div id="extra-data-'.$row['uid'].'" style="display:none;">'.t3lib_div::view_array($dataArray).'</div>';
			}
			$content .= '   <tr class="' . ($i % 2 ? 'db_list_normal' : 'db_list_alt') . '' . ($i == 1 ? ' firstcol' : '') . '' . ($i == $numRows ? ' lastcol' : '') . '">
                                            <td><div><code>' . htmlspecialchars($row["name"]) . '</code>&nbsp;</div></td>
                                            <td><div><code>' . htmlspecialchars($row["value"]) . '</code>&nbsp;</div></td>
                                            <td><div><code>' . htmlspecialchars($row["page"]) . '</code>&nbsp;</div></td>
                                            <td><a href="http://www.ip2location.com/' . $row["ip"] . '" target="_blank" title="' . $LANG->getLL('attack_from') . '">' . $row["ip"] . '</a>&nbsp;</td>
                                            <td><a href="http://www.ip2location.com/' . $row["origin"] . '" target="_blank" title="' . $LANG->getLL('attack_to') . '">' . $row["origin"] . '</a>&nbsp;</td>
                                            <td>' . $row["created"] . '&nbsp;</td>
                                            <td style="text-align:center; ' . $this->hlp_impactStyle($row["impact"]) . '">&nbsp;' . $row["impact"] . '</td>
                                            <td>' . $dataArray . '&nbsp;</td>
                                         </tr>';
		    }

		    $content .= '   </tbody>
                                </table><br />';
		    $content .= '<div style="width:100%; text-align:center;">' . $this->hlp_impactBrowser() . '</div><hr />';
		} else {
		    $content .= '<p class="typo3-message message-notice">' . $LANG->getLL('sql_no_data') . '</p>';
		    $content .= '<p class="typo3-message message-information">' . $LANG->getLL('function1_text_check') . '</p>';
		}

		$content .= '<p class="typo3-message message-information">' . $LANG->getLL('function1_text_find_more') . '</p>';

		$this->content.=$this->doc->section($LANG->getLL('function1'), $content, 0, 1);
		break;

	    case 2: // Function to set all records in tx_mkphpids_log to deleted=1
		if ($_REQUEST['del']) {
		    $res = $GLOBALS['TYPO3_DB']->exec_UPDATEquery('tx_mkphpids_log', '1', array('deleted' => 1));
		    if ($res) {
			$content.='<p class="typo3-message message-ok">' . $LANG->getLL('function2_text_del_ok') . '</p>';
		    } else {
			$content.='<p class="typo3-message message-error">' . $LANG->getLL('sql_exec_error') . mysql_error() . '</p>';
		    }
		} else {
		    $content.='<p class="typo3-message message-warning">' . $LANG->getLL('function2_text') . '</p>';
		    $content.='<form name="delConfirm" action="index.php" method="post">';
		    $content.='<input type="hidden" name="del" value="true" />';
		    $content.='<input type="submit" value="Yes, clear the log table" /></form>';
		}
		$this->content.=$this->doc->section($LANG->getLL('function2'), $content, 0, 1);
		break;

	    case 3: // Function to truncate the tx_mkphpids_cache table
		if ($_REQUEST['del']) {
		    $res = mysql_query('TRUNCATE tx_mkphpids_cache');
		    if ($res) {
			$content.='<p class="typo3-message message-ok">' . $LANG->getLL('function3_text_del_ok') . '</p>';
		    } else {
			$content.='<p class="typo3-message message-error">' . $LANG->getLL('sql_exec_error') . mysql_error() . '</p>';
		    }
		} else {
		    $content.='<p class="typo3-message message-warning">' . $LANG->getLL('function3_text') . '</p>';
		    $content.='<form name="delConfirm" action="index.php" method="post">';
		    $content.='<input type="hidden" name="del" value="true" />';
		    $content.='<input type="submit" value="Yes, clear the cache table" /></form>';
		}
		$this->content.=$this->doc->section($LANG->getLL('function3'), $content, 0, 1);
		break;

	    case 4: // Function to update default_filter.xml and Converter.php
		if ($_REQUEST['update']) {
		    $filter = t3lib_div::getUrl($this->remoteFilter);
		    $filter = t3lib_div::writeFile($this->localFilter, $filter);
		    $converter = t3lib_div::getUrl($this->remoteConverter);
		    $converter = t3lib_div::writeFile($this->localConverter, $converter);

		    $res = mysql_query('TRUNCATE tx_mkphpids_cache');
		    if ($filter && $converter && $res) {
			$content.='<p class="typo3-message message-ok">' . $LANG->getLL('function4_text_update_ok') . '</p>';
		    } else {
			$content.='<p class="typo3-message message-error">Error Updating!<br /><br />$filter: ' . $filter . '<br />$converter: ' . $converter . '</p>';
		    }
		}

		$remoteUpdated = $this->hlp_rssUpdated($this->remoteRSS);
		$localFilterTime = filemtime($this->localFilter);
		$localConverterTime = filemtime($this->localConverter);

		$content.='<p class="typo3-message message-information">' . $LANG->getLL('function4_text_1') . '<code>' . $this->remoteRSS . '</code><br />' . $LANG->getLL('function4_text_2') . '</p>';
		$content.='<form name="delConfirm" action="index.php" method="post">';
		$content.='<table class="typo3-dblist" cellspacing="0" cellpadding="0" border="0" style="width:600px;">
                                <tbody>
                                    <tr class="c-headLine">
                                        <td class="col-title">File</td>
                                        <td class="col-title">Last local update</td>
                                        <td class="col-title">Last remote update</td>
                                        <td class="col-title">Update necessary?</td>
                                    </tr>
                                    <tr class="db_list_normal">
                                        <td><code>default_filter.xml</code></td>
                                        <td>' . ($localFilterTime ? date('d.m.Y, H:i', $localFilterTime) : '<i>File not found</i>') . '</td>
                                        <td>' . ($remoteUpdated ? date('d.m.Y, H:i', $remoteUpdated) : '<i>File not found</i>') . '</td>
                                        ' . ($localFilterTime < $remoteUpdated ? '<td style="color: #ED254D; font-weight:bold;">Yes!</td>' : '<td>No</td>') . '
                                    </tr>
                                    <tr class="db_list_alt">
                                        <td><code>Converter.php</code></td>
                                        <td>' . ($localConverterTime ? date('d.m.Y, H:i', $localConverterTime) : '<i>File not found</i>') . '</td>
                                        <td>' . ($remoteUpdated ? date('d.m.Y, H:i', $remoteUpdated) : '<i>File not found</i>') . '</td>
                                        ' . ($localConverterTime < $remoteUpdated ? '<td style="color: #ED254D; font-weight:bold;">Yes!</td>' : '<td>No</td>') . '
                                    </tr>';
		$content .= '   </tbody>
                            </table><br />';

		$content.='<input type="hidden" name="update" value="true" />';
		$content.='<input type="submit" value="Start update" /></form>';

		$this->content.=$this->doc->section($LANG->getLL('function4'), $content, 0, 1);
		break;
	}
    }

    function hlp_rssUpdated($rss) {
	$rssFile = t3lib_div::getUrl($rss);
	preg_match("/<updated>(.+)<\/updated>/Uism", $rssFile, $updated);
	$updated = (string) $updated[1];

	return strtotime($updated);
    }

    function hlp_impactStyle($impact) {
	if ($impact > 75)
	    return 'font-size:1.5em; background-color: #ff0000; font-weight:bold;';
	if ($impact > 50)
	    return 'font-size:1.3em; background-color: #BD143C; font-weight:bold;';
	if ($impact > 25)
	    return 'font-size:1.1em; background-color: #ED254D';
	if ($impact > 10)
	    return 'font-size:1.0em; background-color: #FCE6E6';
	return '';
    }

    function hlp_impactBrowser() {
	$offset = 50;
	$start = is_numeric($_REQUEST['start']) ? $_REQUEST['start'] : 0;
	$res = $GLOBALS['TYPO3_DB']->exec_SELECTquery('uid', 'tx_mkphpids_log', 'DELETED=0');
	$rows = $GLOBALS["TYPO3_DB"]->sql_num_rows($res);

	if ($start > 0) {
	    $content .= ' <a href="index.php?start=0&amp;order=' . $_REQUEST['order'] . '">&laquo;</a> ';
	    $back = $start - $offset;
	    if ($back < 0) {
		$back = 0;
	    }
	    $content .= ' <a href="index.php?start=' . $back . '&amp;order=' . $_REQUEST['order'] . '">&lt;</a> ';
	}

	if ($rows > $offset) {
	    $seiten = intval($rows / $offset);
	    if ($rows % $offset) {
		$seiten++;
	    }
	}

	for ($i = 1; $i <= $seiten; $i++) {
	    $fwd = ($i - 1) * $offset;
	    $x = $fwd + $offset;
	    $content .= ' <a href="index.php?start=' . $fwd . '&amp;order=' . $_REQUEST['order'] . '">';
	    if ($start == $fwd)
		$content .= '<b>';
	    $content .= '[' . ($fwd + 1) . '-' . $x . ']';
	    if ($start == $fwd)
		$content .= '</b>';
	    $content .= '</a> ';
	}

	if ($start < $rows - $offset && $rows > $offset) {
	    $fwd = $start + $offset;
	    $content .= ' <a href="index.php?start=' . $fwd . '&amp;order=' . $_REQUEST['order'] . '">&gt;</a> ';
	    $fwd = $rows - $offset;
	    $content .= ' <a href="index.php?start=' . $fwd . '&amp;order=' . $_REQUEST['order'] . '">&raquo;</a> ';
	}

	return $content;
    }

}

if (defined('TYPO3_MODE') && $TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/mkphpids/mod1/index.php']) {
    include_once($TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/mkphpids/mod1/index.php']);
}




// Make instance:
$SOBE = t3lib_div::makeInstance('tx_mkphpids_module1');
$SOBE->init();

// Include files?
foreach ($SOBE->include_once as $INC_FILE)
    include_once($INC_FILE);

$SOBE->main();
$SOBE->printContent();
?>
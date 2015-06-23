<?php

/**
 * PHPIDS
 *
 * Requirements: PHP5, SimpleXML
 *
 * Copyright (c) 2008 PHPIDS group (http://php-ids.org)
 *
 * PHPIDS is free software; you can redistribute it and/or modify
 * it under the terms of the GNU Lesser General Public License as published by
 * the Free Software Foundation, version 3 of the License, or
 * (at your option) any later version.
 *
 * PHPIDS is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public License
 * along with PHPIDS. If not, see <http://www.gnu.org/licenses/>.
 */
tx_rnbase::load('tx_mklib_util_TS');
tx_rnbase::load('tx_rnbase_util_TCA');

/**
 *
 * Tx_Mkphpids_Hook_IndexTs
 *
 * @package 		TYPO3
 * @subpackage	 	mkphpids
 * @author 			Hannes Bochmann <hannes.bochmann@dmk-ebusiness.de>
 * @license 		http://www.gnu.org/licenses/lgpl.html
 * 					GNU Lesser General Public License, version 3 or later
 */
class Tx_Mkphpids_Hook_IndexTs {

	/**
	 * @return void
	 */
	public function preprocessRequest() {
		$GLOBALS['TYPO3_DB']->connectDB();
		tx_rnbase_util_TCA::loadTCA('pages');
		$typoScriptConfiguration = tx_mklib_util_TS::loadTSFromPage(
			$GLOBALS['TSFE']->id, 'mkphpids_pi1'
		)->getConfigArray();

		require_once t3lib_extMgm::extPath('mkphpids', 'pi1/class.tx_mkphpids_pi1.php');
		$plugin = tx_rnbase::makeInstance('tx_mkphpids_pi1');

		if ($content = $plugin->main('', $typoScriptConfiguration)) {
			print_r($content);
			$GLOBALS['TYPO3_CONF_VARS']['FE']['compressionLevel'] = 0;
			ob_flush();
		}
	}
}
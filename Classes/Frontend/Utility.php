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

/**
 * Tx_Mkphpids_Frontend_Utility
 *
 * @package         TYPO3
 * @subpackage      mkphpids
 * @author          Hannes Bochmann <hannes.bochmann@dmk-ebusiness.de>
 * @license         http://www.gnu.org/licenses/lgpl.html
 *                  GNU Lesser General Public License, version 3 or later
 */
class Tx_Mkphpids_Frontend_Utility
{

    /**
     * @return void
     */
    public function runIntrusionDetection()
    {
        require_once tx_rnbase_util_Extensions::extPath('mkphpids', 'pi1/class.tx_mkphpids_pi1.php');
        /* @var tx_mkphpids_pi1 $plugin */
        $plugin = tx_rnbase::makeInstance('tx_mkphpids_pi1');

        if ($content = $plugin->main('', $GLOBALS['TSFE']->tmpl->setup['plugin.']['tx_mkphpids_pi1.'])) {
            print_r($content);
            $GLOBALS['TYPO3_CONF_VARS']['FE']['compressionLevel'] = 0;
            ob_flush();
        }
    }
}

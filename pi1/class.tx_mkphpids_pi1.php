<?php

/* * *************************************************************
 *  Copyright notice
 *
 *  (c) 2009 pixabit GmbH / Pascal Naujoks <pascal.naujoks@pixabit.de>
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

require_once(PATH_tslib . 'class.tslib_pibase.php');
require_once(t3lib_extMgm::extPath('rn_base') . 'class.tx_rnbase.php');

/**
 * Plugin 'PHPIDS for Typo3' for the 'mkphpids' extension.
 *
 * @author	pixabit GmbH / Pascal Naujoks <pascal.naujoks@pixabit.de>
 * @package	TYPO3
 * @subpackage	tx_mkphpids *
 * @todo port to rn_base plugin
 * @todo the converter class has been edited inside the IDS folder. so an update
 * of IDS is not easy in the moment. find a way to put the converter outside!
 */
class tx_mkphpids_pi1 extends tslib_pibase {

    var $prefixId = 'tx_mkphpids_pi1';  // Same as class name
    var $scriptRelPath = 'pi1/class.tx_mkphpids_pi1.php'; // Path to this script relative to the extension dir.
    var $extKey = 'mkphpids'; // The extension key.
    var $conf;
    
    /**
     * The main method of the PlugIn
     *
     * @param	string		$content: The PlugIn content
     * @param	array		$conf: The PlugIn configuration
     * @return	The content that is displayed on the website
     */
    function main($content, $conf) {
        $this->pi_USER_INT_obj = 1;
        $this->conf = $conf;
        $this->conf['General.']['exceptions'] = array();

        $this->conf['General.']['whitelist'] = explode(',', $this->conf['General.']['whitelist']);
        $this->conf['General.']['json'] = explode(',',$this->conf['General.']['json']);
        $this->conf['General.']['html'] = explode(',',$this->conf['General.']['html']);

        // Should the current page be monitored or is it in the whitelist?
        if (!in_array($GLOBALS['TSFE']->id, $this->conf['General.']['whitelist'])) {

            // Hook for importing exceptions from constant editor
            $this->conf['General.']['exceptions'] = array_merge(explode(',', $this->conf['General.']['exceptions_0']), $this->conf['General.']['exceptions']);
            $this->conf['General.']['exceptions'] = array_merge(explode(',', $this->conf['General.']['exceptions_1']), $this->conf['General.']['exceptions']);
            $this->conf['General.']['exceptions'] = array_merge(explode(',', $this->conf['General.']['exceptions_2']), $this->conf['General.']['exceptions']);
            unset($this->conf['General.']['exceptions_0'], $this->conf['General.']['exceptions_1'], $this->conf['General.']['exceptions_2']);

            // Settings
            $this->path = t3lib_extMgm::extPath('mkphpids');       // Define Path to PHP IDS
            $this->debug = $this->conf['General.']['debug_mode'] == '1' ? true : false;   // Debug Mode true or false
            // Set the include path properly for PHPIDS
            set_include_path(get_include_path() . PATH_SEPARATOR . $this->path);
            require_once('IDS/Init.php');

            if (!session_id()) {
                session_start();
            }

            $content = '<div class="box info"><h6>MKPHPIDS for TYPO3</h6></div>';

            try {
                /*
                 * Define what to scan
                 *
                 * Please keep in mind what array_merge does and how this might interfer
                 * with your variables_order settings
                 */
                $request = array(
                    'GET' => t3lib_div::_GET(),
                    'POST' => t3lib_div::_POST(),
                    'COOKIE' => $_COOKIE,
                );

                $init = IDS_Init::init();

                /**
                 * You can reset the whole configuration
                 * array or merge in own data
                 *
                 * This usage doesn't overwrite already existing values
                 * $config->setConfig(array('General' => array('filter_type' => 'xml')));
                 *
                 * This does (see 2nd parameter)
                 * $config->setConfig(array('General' => array('filter_type' => 'xml')), true);
                 *
                 * or you can access the config directly like here:
                 */
                $init->config['General'] = $this->conf['General.'];
                $init->config['General']['base_path'] = $this->path . 'IDS/';

                $init->config['Logging'] = $this->conf['Logging.'];
                $init->config['Logging']['table'] = 'tx_mkphpids_log';
                $init->config['Logging']['recipients'] = $this->conf['Logging.']['email'] ? $this->conf['Logging.']['email'] : $TYPO3_CONF_VARS['BE']['warning_email_addr'];

                $init->config['Caching'] = $this->conf['Caching.'];
                $init->config['Caching']['table'] = 'tx_mkphpids_cache';

                // Initiate the PHPIDS and fetch the results
                $ids = new IDS_Monitor($request, $init);
                $result = $ids->run();

                /*
                 * Now you can analyze the results:
                 *
                 * In the result object you will find any suspicious
                 * fields of the passed array enriched with additional info
                 *
                 * Note: it is moreover possible to dump this information by
                 * simply echoing the result object, since IDS_Report implemented
                 * a __toString method.
                 */

                // mwagner: PHPIDS soll auf PHP beruhende Anwendungen vor Cross-Site-Scripting-, SQL-Injection und anderen Angriffe schützen.
                // http://buhl.localhost/?ext[uid]=11%3B%20DELETE%20FROM%20pages
                // Medlet einen impact von 11, die tabelle  pages ist danach leer
                // ergebendes sql: SELECT * FROM tx_ext WHERE uid = 1; DELETE FROM pages;
                // Was verhindert phpids.
                //
                // hbochmann: PHPIDS prüft lediglich Parameter und bewertet diese auf Angriffspotential.
                // Diese Erkennung ist selbstverständlich nicht 100% sicher/zuverlässig sondern nur ein weiteres
                // Hilfsmittel ein sicheres System bereitzustellen. Programmcode mus trotzdem sicher sein.
                // Verhindert wird nur etwas was mit sehr großer Sicherheit ein Angriffsversuch ist.
                if (!$result->isEmpty()) {
                    $content.='<p class="box error">' . $result . '</p>';

                    /*
                     * Log the results
                     */
                    require_once(t3lib_extMgm::extPath('mkphpids').'IDS/Log/File.php');
                    require_once(t3lib_extMgm::extPath('mkphpids').'IDS/Log/Composite.php');
                    $compositeLog = new IDS_Log_Composite();

                    /*
                     *  Outcomment the following if you don't need them
                     *  Impacts start at 0 and leads to ~150.
                     *  1+: Low Impact -> log it to a file
                     *  20+: Medium Impact -> log it to the database
                     *  50+: High Impact -> report it to an admin by email
                     *  65+: This is a serious hacking attemp -> knock em out!
                     */

                    if ($this->conf['Impact.']['print_to_screen_threshold'] && $result->getImpact() >= $this->conf['Impact.']['print_to_screen_threshold']) {
                    	tx_rnbase::load('Tx_mkphpids_Log_PrintToScreen');
                    	$compositeLog->addLogger(Tx_mkphpids_Log_PrintToScreen::getInstance());  
                    	$content .='<div class="box ok">Reporting to Screen (Threshold: ' . $this->conf['Impact.']['print_to_screen_threshold'] . ')</div>';
                    }
                    
                    if ($this->conf['Impact.']['file_threshold'] && $result->getImpact() >= $this->conf['Impact.']['file_threshold']) {
                        $compositeLog->addLogger(IDS_Log_File::getInstance($init));     // Log Impact into File (IDS/tmp/phpids_log.txt)
                        $content .='<div class="box ok">Reporting to File (Threshold: ' . $this->conf['Impact.']['file_threshold'] . ')</div>';
                    }

                    if ($this->conf['Impact.']['db_threshold'] && $result->getImpact() >= $this->conf['Impact.']['db_threshold']) {
                    	tx_rnbase::load('Tx_mkphpids_Log_Database');
                        $compositeLog->addLogger(Tx_mkphpids_Log_Database::getInstance($init)); // Log Impact into a Database (tx_mkphpids_log)
                        $content .='<div class="box ok">Reporting to DB (Threshold: ' . $this->conf['Impact.']['db_threshold'] . ')</div>';
                    }

                    if ($this->conf['Impact.']['email_threshold'] && $result->getImpact() >= $this->conf['Impact.']['email_threshold']) {
                    	tx_rnbase::load('Tx_mkphpids_Log_Email');
                        $compositeLog->addLogger(Tx_mkphpids_Log_Email::getInstance($init));    // Report Impact via E-Mail
                        $content .='<div class="box ok">Reporting by E-Mail (Threshold: ' . $this->conf['Impact.']['email_threshold'] . ')</div>';
                    }

                    $compositeLog->execute($result);

                    if ($this->conf['Impact.']['die_threshold'] && $result->getImpact() >= $this->conf['Impact.']['die_threshold']) {
                        $this->handleDieThreshold($content);
                    }
                } else {
                    $content.='	<div class="box ok">
									No attack detected. You can disable this message by setting "General.debug_mode" to false in the TypoScript Objects of PHPIDS.
								</div>';
                    $content.='	<div class="box info">
									<a href="?test=%22><script>eval(window.name)</script>">Click for an example attack to see if PHPIDS for TYPO3 works correctly.</a>
								</div>';
                }
            } catch (Exception $e) {
                $content.='<div class="box error">An error occurred: ' . $e->getMessage() . '</div>';
                $content.='<div class="box error">Settings in $this->conf<pre>' . print_r($this->conf, true) . '</pre></div>';
                $content.='<div class="box error">Settings in $init->config<pre>' . print_r($init->config, true) . '</pre></div>';
            }
            if ($this->debug == true) {
                return $this->pi_wrapInBaseClass($content);
            }
        }
    }

    /**
     * @param string $content
     * 
     * @return void
     */
    private function handleDieThreshold($content) {
    	session_destroy();
    	
    	if ($this->debug == false && $this->conf['Impact.']['die_redirect_pid']) {
	    	$redirectUrl = $this->pi_getPageLink($this->conf['Impact.']['die_redirect_pid']);
	    	header('Location: '.t3lib_div::locationHeaderUrl($redirectUrl));
    	} else {
    		if ($this->debug == false){
    			$content = '';//remove left over informations
    		} else {
				$content .='<div>Dieing... (Threshold: ' . $this->conf['Impact.']['die_threshold'] . ')</div>';
    		}
			$content .= '<br /><div>You have been logged out cause of a possible hacking attemp.</div>
						<div>Your data has been stored and reported.</div>
						<div>If you think this is an error please contact the webmaster of this website.</div>';
			
			die($content);
    	}
    }
}

if (defined('TYPO3_MODE') && $TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/mkphpids/pi1/class.tx_mkphpids_pi1.php']) {
    include_once($TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/mkphpids/pi1/class.tx_mkphpids_pi1.php']);
}
?>
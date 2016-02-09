<?php
/**
 * 	@package TYPO3
 *  @subpackage tx_mkabtesting
 *  @author Hannes Bochmann <dev@dmk-ebusiness.de>
 *
 *  Copyright notice
 *
 *  (c) 2010 Hannes Bochmann <dev@dmk-ebusiness.de>
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
 */
tx_rnbase::load('tx_rnbase_tests_BaseTestCase');
tx_rnbase::load('tx_mkphpids_pi1');

/**
 *
 * tx_mkphpids_pi1Test
 *
 * @package 		TYPO3
 * @subpackage	 	mkphpids
 * @author 			Hannes Bochmann <dev@dmk-ebusiness.de>
 * @license 		http://www.gnu.org/licenses/lgpl.html
 * 					GNU Lesser General Public License, version 3 or later
 */
class tx_mkphpids_pi1Test
	extends tx_rnbase_tests_BaseTestCase
{

	/**
	 * @var string $remoteAddress
	 */
	protected $remoteAddress;

	protected function setUp() {
		$this->remoteAddress = $_SERVER['REMOTE_ADDR'];
	}

	/**
	 * (non-PHPdoc)
	 * @see PHPUnit_Framework_TestCase::tearDown()
	 */
	protected function tearDown() {
		if (isset($_GET['test'])) {
			unset($_GET['test']);
		}
		$_SERVER['REMOTE_ADDR'] = $this->remoteAddress;
		$this->resetIndependentEnvironmentCache();
	}

	/**
	 * @group unit
	 */
	public function testMainDoesCheckingIfCurrentIpIsNotExcluded() {
		// da es ein FE Plugin ist, brauchen wir die session ID
		// um session_start() im Plugin zu verhindern
		session_id(uniqid());

		$plugin = $this->getMock('tx_mkphpids_pi1', array('isCurrentIpExcluded'));

		$plugin->expects($this->once())
			->method('isCurrentIpExcluded')
			->will($this->returnValue(FALSE));

		$configuration['General.']['debug_mode'] = TRUE;
		$this->assertNotNull($plugin->main('', $configuration), 'plugin returned nothing');
	}

	/**
	 * @group unit
	 */
	public function testMainDoesNoCheckingIfCurrentIpIsExcluded() {
		$plugin = $this->getMock('tx_mkphpids_pi1', array('isCurrentIpExcluded'));

		$plugin->expects($this->once())
			->method('isCurrentIpExcluded')
			->will($this->returnValue(TRUE));

		$configuration['General.']['debug_mode'] = TRUE;
		$this->assertNull($plugin->main('', $configuration), 'plugin returned something');
	}

	/**
	 *
	 * @param string $currentIp
	 * @param string $excludedIps
	 * @param boolean $expectedReturnValue
	 *
	 * @group unit
	 * @dataProvider dataProviderIps
	 */
	public function testIsCurrentIpExcluded(
		$currentIp, $excludedIps, $expectedReturnValue
	) {
		$_SERVER['REMOTE_ADDR'] = $currentIp;
		$plugin = tx_rnbase::makeInstance($this->buildAccessibleProxy('tx_mkphpids_pi1'));
		$configuration['General.']['excludedIPs'] = $excludedIps;
		$plugin->_set('conf', $configuration);

		$this->assertEquals(
			$expectedReturnValue,
			$plugin->_call('isCurrentIpExcluded'),
			'wrong return for current IP ' . $currentIp . ' and excluded IPs: ' . $excludedIps
		);
	}

	/**
	 *
	 * @return multitype:string boolean
	 */
	public function dataProviderIps() {
		return array(
			array('127.0.0.1', '127.0.0.1', TRUE),
			array('127.0.0.1', '127.0.0.2', FALSE),
			array('127.0.0.1', '127.0.0.*', TRUE),
			array('127.0.1.1', '127.0.0.*', FALSE),
			array('127.0.0.1', '127.0.0.1/32', TRUE),
			array('127.0.1.1', '127.0.0.1/32', FALSE),
			array('127.0.0.1', '127.0.0.2,127.0.0.1', TRUE),
			array('127.0.0.3', '127.0.0.1,127.0.0.2', FALSE),
			array('127.0.0.3', '', FALSE),
		);
	}
}
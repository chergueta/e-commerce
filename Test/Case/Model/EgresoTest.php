<?php
App::uses('Egreso', 'Model');

/**
 * Egreso Test Case
 *
 */
class EgresoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.egreso'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Egreso = ClassRegistry::init('Egreso');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Egreso);

		parent::tearDown();
	}

}

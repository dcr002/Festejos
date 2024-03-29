<?php
App::uses('Factura', 'Model');

/**
 * Factura Test Case
 *
 */
class FacturaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.factura',
		'app.cliente',
		'app.presupuesto',
		'app.user'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Factura = ClassRegistry::init('Factura');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Factura);

		parent::tearDown();
	}

}

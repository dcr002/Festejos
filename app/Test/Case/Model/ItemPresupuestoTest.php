<?php
App::uses('ItemPresupuesto', 'Model');

/**
 * ItemPresupuesto Test Case
 *
 */
class ItemPresupuestoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.item_presupuesto',
		'app.inventario',
		'app.item_factura'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ItemPresupuesto = ClassRegistry::init('ItemPresupuesto');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ItemPresupuesto);

		parent::tearDown();
	}

}

<?php
App::uses('Inventario', 'Model');

/**
 * Inventario Test Case
 *
 */
class InventarioTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.inventario',
		'app.item_factura',
		'app.item_presupuesto'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Inventario = ClassRegistry::init('Inventario');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Inventario);

		parent::tearDown();
	}

}

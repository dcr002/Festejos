<?php
App::uses('ItemFactura', 'Model');

/**
 * ItemFactura Test Case
 *
 */
class ItemFacturaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.item_factura',
		'app.inventario',
		'app.item_presupuesto',
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
		$this->ItemFactura = ClassRegistry::init('ItemFactura');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ItemFactura);

		parent::tearDown();
	}

}

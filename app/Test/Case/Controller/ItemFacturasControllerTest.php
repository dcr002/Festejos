<?php
App::uses('ItemFacturasController', 'Controller');

/**
 * ItemFacturasController Test Case
 *
 */
class ItemFacturasControllerTest extends ControllerTestCase {

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

}

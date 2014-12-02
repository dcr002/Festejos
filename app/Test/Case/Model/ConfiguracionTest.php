<?php
App::uses('Configuracion', 'Model');

/**
 * Configuracion Test Case
 *
 */
class ConfiguracionTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.configuracion'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Configuracion = ClassRegistry::init('Configuracion');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Configuracion);

		parent::tearDown();
	}

}

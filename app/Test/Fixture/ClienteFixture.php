<?php
/**
 * ClienteFixture
 *
 */
class ClienteFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'razon' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 254, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'telf' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'razon' => 'Lorem ipsum dolor sit amet',
			'telf' => 'Lorem ipsum dolor sit amet',
			'created' => '2014-10-23 21:17:22',
			'modified' => '2014-10-23 21:17:22'
		),
	);

}

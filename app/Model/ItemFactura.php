<?php
App::uses('AppModel', 'Model');
/**
 * ItemFactura Model
 *
 * @property Inventario $Inventario
 * @property Factura $Factura
 */
class ItemFactura extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'inventario_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'factura_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Inventario' => array(
			'className' => 'Inventario',
			'foreignKey' => 'inventario_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Factura' => array(
			'className' => 'Factura',
			'foreignKey' => 'factura_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}

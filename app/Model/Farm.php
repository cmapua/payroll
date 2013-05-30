<?php
App::uses('AppModel', 'Model');
/**
 * Farm Model
 *
 * @property CashAdvance $CashAdvance
 * @property Transaction $Transaction
 */
class Farm extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'farm_code' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'farm_name' => array(
			'notempty' => array(
				'rule' => array('notempty'),
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
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'CashAdvance' => array(
			'className' => 'CashAdvance',
			'foreignKey' => 'farm_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Transaction' => array(
			'className' => 'Transaction',
			'foreignKey' => 'farm_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

	public $hasAndBelongsToMany = array(
		'Employee' => array(
			'className' => 'Employee',
			'joinTable' => 'employees_farms',
			'foreignKey' => 'farm_id',
			'associationForeignKey' => 'employee_id',
			'unique' => true
		)
	);
}

<?php
App::uses('AppModel', 'Model');
/**
 * Employee Model
 *
 * @property Work $Work
 * @property Group $Group
 * @property CashAdvance $CashAdvance
 * @property Transaction $Transaction
 */
class Employee extends AppModel {

	public $displayField = 'employee_code';
/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'employee_code' => array(
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
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Group' => array(
			'className' => 'Group',
			'foreignKey' => 'group_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'CashAdvance' => array(
			'className' => 'CashAdvance',
			'foreignKey' => 'employee_id',
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
			'foreignKey' => 'employee_id',
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
		'Farm' => array(
			'className' => 'Farm',
			'joinTable' => 'employees_farms',
			'foreignKey' => 'employee_id',
			'associationForeignKey' => 'farm_id',
			'unique' => true
		),
		'Work' => array(
			'className' => 'Work',
			'joinTable' => 'employees_works',
			'foreignKey' => 'employee_id',
			'associationForeignKey' => 'work_id',
			'unique' => true
		)
	);

}

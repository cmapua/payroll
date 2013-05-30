<?php
App::uses('AppModel', 'Model');
/**
 * EmployeesToFarm Model
 *
 * @property Employee $Employee
 * @property Farm $Farm
 */
class EmployeesToFarm extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'employee_id' => array(
			'uuid' => array(
				'rule' => array('uuid'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'farm_id' => array(
			'uuid' => array(
				'rule' => array('uuid'),
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
		'Employee' => array(
			'className' => 'Employee',
			'foreignKey' => 'employee_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Farm' => array(
			'className' => 'Farm',
			'foreignKey' => 'farm_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}

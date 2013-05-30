<?php
App::uses('AppModel', 'Model');
/**
 * Transaction Model
 *
 * @property Employee $Employee
 * @property Farm $Farm
 * @property Work $Work
 */
class Transaction extends AppModel {


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
		),
		'Work' => array(
			'className' => 'Work',
			'foreignKey' => 'work_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}

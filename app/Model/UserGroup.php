<?php
App::uses('AppModel', 'Model');
/**
 * UserGroup Model
 *
 */
class UserGroup extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'name' => array(
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

	public $actsAs = array('Acl' => array('type' => 'requester'));

	public function parentNode() {
		return null;
	}

	public function beforeFilter() {
		parent::beforeFilter();
		$this->Auth->allow();
	}
}

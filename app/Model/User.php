<?php
App::uses('AppModel', 'Model');
App::uses('AuthComponent', 'Controller/Component');
/**
 * User Model
 *
 */
class User extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'username' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'password' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'user_group_id' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		)
	);

	public function beforeFilter() {
		parent::beforeFilter();
		//$this->Auth->allow('logout');
	}


    public function beforeSave($options = array()) {
        $this->data['User']['password'] = AuthComponent::password($this->data['User']['password']);
        return true;
    }

	/*
	public function beforeSave($options = array()) {
	    if (isset($this->data[$this->alias]['password'])) {
	        $this->data[$this->alias]['password'] = AuthComponent::password($this->data[$this->alias]['password']);
	    }
	    return true;
	}
	*/

	public $belongsTo = array('UserGroup');
	public $actsAs = array('Acl' => array('type' => 'requester'));

	public function parentNode() {
		if(!$this->id && empty($this->data)) {
			return null;
		}
		if(isset($this->data['User']['user_group_id'])) {
			$groupId = $this->data['User']['user_group_id'];
		} else {
			$groupId = $this->field('user_group_id');
		}
		if (!$groupId) {
			return null;
		} else {
			return array('UserGroup' => array('id' => $groupId));
		}
	}

	public function bindNode($user) {
		//$data = AuthComponent::user();
	    return array('model' => 'UserGroup', 'foreign_key' => $user['User']['user_group_id']);
	}
}

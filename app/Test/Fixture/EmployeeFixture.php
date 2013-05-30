<?php
/**
 * EmployeeFixture
 *
 */
class EmployeeFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 36, 'key' => 'primary', 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'employee_code' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 4, 'key' => 'unique', 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'percent' => array('type' => 'integer', 'null' => true, 'default' => null),
		'trntype' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'first_name' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'last_name' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'MI' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'empaddr' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'farm' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'farmname' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'farm2' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'fn2' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'farm3' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'fn3' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'groupcode' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'groupname' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'rate' => array('type' => 'float', 'null' => true, 'default' => null),
		'sssno' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'gross' => array('type' => 'float', 'null' => true, 'default' => null),
		'deduction' => array('type' => 'float', 'null' => true, 'default' => null),
		'net_pay' => array('type' => 'float', 'null' => true, 'default' => null),
		'plate_no' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'remarks' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'photo_emp' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'pict_name' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'work_code' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 4, 'key' => 'index', 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'group_code' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 4, 'key' => 'index', 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'employee_code_UNIQUE' => array('column' => 'employee_code', 'unique' => 1),
			'id_UNIQUE' => array('column' => 'id', 'unique' => 1),
			'work_code_idx' => array('column' => 'work_code', 'unique' => 0),
			'group_code_idx' => array('column' => 'group_code', 'unique' => 0),
			'employee_code_idx' => array('column' => 'employee_code', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => '51a6c6c6-4c34-449c-ae97-1ee4cbdd56cb',
			'employee_code' => 'Lo',
			'percent' => 1,
			'trntype' => 'Lorem ipsum dolor sit amet',
			'first_name' => 'Lorem ipsum dolor sit amet',
			'last_name' => 'Lorem ipsum dolor sit amet',
			'MI' => 'Lorem ipsum dolor sit ame',
			'empaddr' => 'Lorem ipsum dolor sit amet',
			'farm' => 'Lorem ipsum dolor sit amet',
			'farmname' => 'Lorem ipsum dolor sit amet',
			'farm2' => 'Lorem ipsum dolor sit amet',
			'fn2' => 'Lorem ipsum dolor sit amet',
			'farm3' => 'Lorem ipsum dolor sit amet',
			'fn3' => 'Lorem ipsum dolor sit amet',
			'groupcode' => 'Lorem ipsum dolor sit amet',
			'groupname' => 'Lorem ipsum dolor sit amet',
			'rate' => 1,
			'sssno' => 'Lorem ipsum dolor sit amet',
			'gross' => 1,
			'deduction' => 1,
			'net_pay' => 1,
			'plate_no' => 'Lorem ipsum dolor sit amet',
			'remarks' => 'Lorem ipsum dolor sit amet',
			'photo_emp' => 'Lorem ipsum dolor sit amet',
			'pict_name' => 'Lorem ipsum dolor sit amet',
			'work_code' => 'Lo',
			'group_code' => 'Lo'
		),
	);

}

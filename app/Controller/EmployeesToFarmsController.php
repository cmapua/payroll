<?php
App::uses('AppController', 'Controller');
/**
 * EmployeesToFarms Controller
 *
 * @property EmployeesToFarm $EmployeesToFarm
 */
class EmployeesToFarmsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->EmployeesToFarm->recursive = 0;
		$this->set('employeesToFarms', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->EmployeesToFarm->exists($id)) {
			throw new NotFoundException(__('Invalid employees to farm'));
		}
		$options = array('conditions' => array('EmployeesToFarm.' . $this->EmployeesToFarm->primaryKey => $id));
		$this->set('employeesToFarm', $this->EmployeesToFarm->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->EmployeesToFarm->create();
			if ($this->EmployeesToFarm->save($this->request->data)) {
				$this->Session->setFlash(__('The employees to farm has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The employees to farm could not be saved. Please, try again.'));
			}
		}
		$employees = $this->EmployeesToFarm->Employee->find('list');
		$farms = $this->EmployeesToFarm->Farm->find('list');
		$this->set(compact('employees', 'farms'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->EmployeesToFarm->exists($id)) {
			throw new NotFoundException(__('Invalid employees to farm'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->EmployeesToFarm->save($this->request->data)) {
				$this->Session->setFlash(__('The employees to farm has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The employees to farm could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('EmployeesToFarm.' . $this->EmployeesToFarm->primaryKey => $id));
			$this->request->data = $this->EmployeesToFarm->find('first', $options);
		}
		$employees = $this->EmployeesToFarm->Employee->find('list');
		$farms = $this->EmployeesToFarm->Farm->find('list');
		$this->set(compact('employees', 'farms'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->EmployeesToFarm->id = $id;
		if (!$this->EmployeesToFarm->exists()) {
			throw new NotFoundException(__('Invalid employees to farm'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->EmployeesToFarm->delete()) {
			$this->Session->setFlash(__('Employees to farm deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Employees to farm was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}

<?php
App::uses('AppController', 'Controller');
/**
 * Employees Controller
 *
 * @property Employee $Employee
 */
class EmployeesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Employee->recursive = 0;
		$this->set('employees', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Employee->exists($id)) {
			throw new NotFoundException(__('Invalid employee'));
		}
		$options = array('conditions' => array('Employee.' . $this->Employee->primaryKey => $id));
		$this->set('employee', $this->Employee->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Employee->create();
			if ($this->Employee->save($this->request->data)) {
				$this->Session->setFlash(__('The employee has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The employee could not be saved. Please, try again.'));
			}
		}
		$works = $this->Employee->Work->find('list');
		$farms = $this->Employee->Farm->find('list');
		$groups = $this->Employee->Group->find('list');
		$this->set(compact('groups'));
		$this->set(compact('works'));
		$this->set(compact('farms'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Employee->exists($id)) {
			throw new NotFoundException(__('Invalid employee'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Employee->save($this->request->data)) {
				$this->Session->setFlash(__('The employee has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The employee could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Employee.' . $this->Employee->primaryKey => $id));
			$this->request->data = $this->Employee->find('first', $options);
		}
		$groups = $this->Employee->Group->find('list');
		$this->set(compact('groups'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Employee->id = $id;
		if (!$this->Employee->exists()) {
			throw new NotFoundException(__('Invalid employee'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Employee->delete()) {
			$this->Session->setFlash(__('Employee deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Employee was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}

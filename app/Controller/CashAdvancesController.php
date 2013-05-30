<?php
App::uses('AppController', 'Controller');
/**
 * CashAdvances Controller
 *
 * @property CashAdvance $CashAdvance
 */
class CashAdvancesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->CashAdvance->recursive = 0;
		$this->set('cashAdvances', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->CashAdvance->exists($id)) {
			throw new NotFoundException(__('Invalid cash advance'));
		}
		$options = array('conditions' => array('CashAdvance.' . $this->CashAdvance->primaryKey => $id));
		$this->set('cashAdvance', $this->CashAdvance->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->CashAdvance->create();
			if ($this->CashAdvance->save($this->request->data)) {
				$this->Session->setFlash(__('The cash advance has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The cash advance could not be saved. Please, try again.'));
			}
		}
		$employees = $this->CashAdvance->Employee->find('list');
		$farms = $this->CashAdvance->Farm->find('list');
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
		if (!$this->CashAdvance->exists($id)) {
			throw new NotFoundException(__('Invalid cash advance'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->CashAdvance->save($this->request->data)) {
				$this->Session->setFlash(__('The cash advance has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The cash advance could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('CashAdvance.' . $this->CashAdvance->primaryKey => $id));
			$this->request->data = $this->CashAdvance->find('first', $options);
		}
		$employees = $this->CashAdvance->Employee->find('list');
		$farms = $this->CashAdvance->Farm->find('list');
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
		$this->CashAdvance->id = $id;
		if (!$this->CashAdvance->exists()) {
			throw new NotFoundException(__('Invalid cash advance'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->CashAdvance->delete()) {
			$this->Session->setFlash(__('Cash advance deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Cash advance was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}

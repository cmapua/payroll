<?php
App::uses('AppController', 'Controller');
/**
 * Farms Controller
 *
 * @property Farm $Farm
 */
class FarmsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Farm->recursive = 0;
		$this->set('farms', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Farm->exists($id)) {
			throw new NotFoundException(__('Invalid farm'));
		}
		$options = array('conditions' => array('Farm.' . $this->Farm->primaryKey => $id));
		$this->set('farm', $this->Farm->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Farm->create();
			if ($this->Farm->save($this->request->data)) {
				$this->Session->setFlash(__('The farm has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The farm could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Farm->exists($id)) {
			throw new NotFoundException(__('Invalid farm'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Farm->save($this->request->data)) {
				$this->Session->setFlash(__('The farm has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The farm could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Farm.' . $this->Farm->primaryKey => $id));
			$this->request->data = $this->Farm->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Farm->id = $id;
		if (!$this->Farm->exists()) {
			throw new NotFoundException(__('Invalid farm'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Farm->delete()) {
			$this->Session->setFlash(__('Farm deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Farm was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}

<?php
App::uses('AppController', 'Controller');
/**
 * Headlines Controller
 *
 * @property Headline $Headline
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class HeadlinesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Headline->recursive = 0;
		$this->set('headlines', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Headline->exists($id)) {
			throw new NotFoundException(__('Invalid headline'));
		}
		$options = array('conditions' => array('Headline.' . $this->Headline->primaryKey => $id));
		$this->set('headline', $this->Headline->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Headline->create();
			if ($this->Headline->save($this->request->data)) {
				$this->Session->setFlash(__('The headline has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The headline could not be saved. Please, try again.'));
			}
		}
		$users = $this->Headline->User->find('list');
		$this->set(compact('users'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Headline->exists($id)) {
			throw new NotFoundException(__('Invalid headline'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Headline->save($this->request->data)) {
				$this->Session->setFlash(__('The headline has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The headline could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Headline.' . $this->Headline->primaryKey => $id));
			$this->request->data = $this->Headline->find('first', $options);
		}
		$users = $this->Headline->User->find('list');
		$this->set(compact('users'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Headline->id = $id;
		if (!$this->Headline->exists()) {
			throw new NotFoundException(__('Invalid headline'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Headline->delete()) {
			$this->Session->setFlash(__('The headline has been deleted.'));
		} else {
			$this->Session->setFlash(__('The headline could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}

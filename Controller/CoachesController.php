<?php
App::uses('AppController', 'Controller');
class CoachesController extends AppController {
	public $layout = 'BootstrapCake.bootstrap';

	public $components = array('Paginator', 'Session');

	public function index() {
		$items = $this->paginate();
		if ($this->request->is('requested')) {
			return $items;
		}
		$this->set('items', $items);
	}

	public function admin_index() {
		$this->Coach->recursive = 0;
		$this->set('coaches', $this->Paginator->paginate());
	}

	public function admin_reorder() {
		if ($this->request->is('post')) {
			$this->Coach->saveMany($this->request->data);
			exit();
		}
		$this->set('coaches', $this->Coach->find('all'));
	}

	public function admin_view($id = null) {
		if (!$this->Coach->exists($id)) {
			throw new NotFoundException(__('Invalid coach'));
		}
		$options = array('conditions' => array('Coach.' . $this->Coach->primaryKey => $id));
		$this->set('coach', $this->Coach->find('first', $options));
	}

	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Coach->create();
			if ($this->Coach->save($this->request->data)) {
				$this->Session->setFlash(__('The coach has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The coach could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		}
	}

	public function admin_edit($id = null) {
		if (!$this->Coach->exists($id)) {
			throw new NotFoundException(__('Invalid coach'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Coach->save($this->request->data)) {
				$this->Session->setFlash(__('The coach has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The coach could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Coach.' . $this->Coach->primaryKey => $id));
			$this->request->data = $this->Coach->find('first', $options);
		}
	}

	public function admin_delete($id = null) {
		$this->Coach->id = $id;
		if (!$this->Coach->exists()) {
			throw new NotFoundException(__('Invalid coach'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Coach->delete()) {
			$this->Session->setFlash(__('The coach has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The coach could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}

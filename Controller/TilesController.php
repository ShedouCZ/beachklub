<?php
App::uses('AppController', 'Controller');
class TilesController extends AppController {
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
		$this->Tile->recursive = 0;
		$this->set('tiles', $this->Paginator->paginate());
	}

	public function admin_reorder() {
		if ($this->request->is('post')) {
			$this->Tile->saveMany($this->request->data);
			exit();
		}
		$this->set('tiles', $this->Tile->find('all'));
	}

	public function admin_view($id = null) {
		if (!$this->Tile->exists($id)) {
			throw new NotFoundException(__('Invalid tile'));
		}
		$options = array('conditions' => array('Tile.' . $this->Tile->primaryKey => $id));
		$this->set('tile', $this->Tile->find('first', $options));
	}

	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Tile->create();
			if ($this->Tile->save($this->request->data)) {
				$this->Session->setFlash(__('The tile has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tile could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		}
	}

	public function admin_edit($id = null) {
		if (!$this->Tile->exists($id)) {
			throw new NotFoundException(__('Invalid tile'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Tile->save($this->request->data)) {
				$this->Session->setFlash(__('The tile has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tile could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Tile.' . $this->Tile->primaryKey => $id));
			$this->request->data = $this->Tile->find('first', $options);
		}
	}

	public function admin_delete($id = null) {
		$this->Tile->id = $id;
		if (!$this->Tile->exists()) {
			throw new NotFoundException(__('Invalid tile'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Tile->delete()) {
			$this->Session->setFlash(__('The tile has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The tile could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}

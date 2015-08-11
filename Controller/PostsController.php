<?php
App::uses('AppController', 'Controller');
class PostsController extends AppController {
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
		$this->Post->recursive = 0;
		$this->set('posts', $this->Paginator->paginate());
	}


	public function admin_view($id = null) {
		if (!$this->Post->exists($id)) {
			throw new NotFoundException(__('Invalid post'));
		}
		$options = array('conditions' => array('Post.' . $this->Post->primaryKey => $id));
		$this->set('post', $this->Post->find('first', $options));
	}

	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Post->create();
			if ($this->Post->save($this->request->data)) {
				$this->Session->setFlash(__('The post has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The post could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		}
		$users = $this->Post->User->find('list');
		$this->set(compact('users'));
	}

	public function admin_edit($id = null) {
		if (!$this->Post->exists($id)) {
			throw new NotFoundException(__('Invalid post'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Post->save($this->request->data)) {
				$this->Session->setFlash(__('The post has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The post could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Post.' . $this->Post->primaryKey => $id));
			$this->request->data = $this->Post->find('first', $options);
		}
		$users = $this->Post->User->find('list');
		$this->set(compact('users'));
	}

	public function admin_delete($id = null) {
		$this->Post->id = $id;
		if (!$this->Post->exists()) {
			throw new NotFoundException(__('Invalid post'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Post->delete()) {
			$this->Session->setFlash(__('The post has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The post could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}

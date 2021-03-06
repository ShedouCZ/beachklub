<?php
App::uses('AppController', 'Controller');
class NewsController extends AppController {
	public $layout = 'BootstrapCake.bootstrap';
	public $components = array('Paginator', 'Session');
	public $uses = array('Document');

	public function index() {
		$this->paginate = array(
			'limit' => 5,
			'conditions' => array(
				'Document.is_news' => 1
			)
		);

		if ($this->request->is('requested')) {
			$items  = $this->paginate('Document');
			$paging = $this->params['paging'];
			return array(
				'items' => $items,
				'paging' => $paging
			);
		} else {
			$items = $this->Paginator->paginate('Document');
		}
		$this->set('items', $items);
	}

	public function admin_index() {
		$this->paginate = array(
			'conditions' => array(
				'Document.is_news' => 1
			)
		);
		$this->Document->recursive = 0;
		$this->set('documents', $this->Paginator->paginate());
	}

	public function admin_reorder() {
		if ($this->request->is('post')) {
			$this->Document->saveMany($this->request->data);
			exit();
		}
		$this->set('documents', $this->Document->find('all'));
	}

	public function view($id = null) {
		if (!$this->Document->exists($id)) {
			throw new NotFoundException(__('Invalid document'));
		}
		$options = array('conditions' => array('Document.' . $this->Document->primaryKey => $id));
		$this->set('document', $this->Document->find('first', $options));
		$this->set('neighbors', $this->Document->find('neighbors', array('field'=>'id', 'value'=>$id)));
	}

	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Document->create();
			// defaults
			$this->request->data['Document']['is_news'] = 1;
			$this->request->data['Document']['is_page'] = 0;
			if ($this->Document->save($this->request->data)) {
				$this->Session->setFlash(__('The document has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The document could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		}
		$users = $this->Document->User->find('list');
		$this->set(compact('users'));
	}

	public function admin_edit($id = null) {
		if (!$this->Document->exists($id)) {
			throw new NotFoundException(__('Invalid document'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Document->save($this->request->data)) {
				$this->Session->setFlash(__('The document has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The document could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Document.' . $this->Document->primaryKey => $id));
			$this->request->data = $this->Document->find('first', $options);
		}
		$users = $this->Document->User->find('list');
		$this->set(compact('users'));
	}

	public function admin_delete($id = null) {
		$this->Document->id = $id;
		if (!$this->Document->exists()) {
			throw new NotFoundException(__('Invalid document'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Document->delete()) {
			$this->Session->setFlash(__('The document has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The document could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}

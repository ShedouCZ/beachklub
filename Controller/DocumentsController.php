<?php
App::uses('AppController', 'Controller');
class DocumentsController extends AppController {
	public $layout = 'BootstrapCake.bootstrap';
	public $components = array('Paginator', 'Session');

	public function index() {
		if ($this->request->is('requested')) {
			$items = $this->Document->find('all', array(
				'limit' => 5,
				'conditions' => array(
					'Document.is_page' => 1
				)
			));
			return $items;
		} else {
			$items = $this->paginate();
		}
		$this->set('items', $items);
	}

	public function admin_index() {
		$this->paginate = array(
			'conditions' => array(
				'Document.is_page' => 1
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
		$item = $this->Document->find('first', $options);

		$this->set('document', $item);
		$this->set('neighbors', $this->Document->find('neighbors', array(
			'field'=>'ord',
			'value'=>$item['Document']['ord'],
			'conditions'=>array(
				'is_page'=>$item['Document']['is_page'],
				'is_news'=>$item['Document']['is_news'],
			)
		)));

		if ($item['Document']['is_page']) {
			$this->render('view_page');
		}
	}

	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Document->create();
			// defaults
			$this->request->data['Document']['is_news'] = 0;
			$this->request->data['Document']['is_page'] = 1;
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

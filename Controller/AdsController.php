<?php
App::uses('AppController', 'Controller');
class AdsController extends AppController {
	public $components = array('Paginator', 'Session');
	public $uses = array('Ad', 'AdReply');

	// declare public actions
	public function beforeFilter() {
		parent::beforeFilter();
		$this->Auth->allow('add');
	}

	public function index() {
		//$this->Paginator->settings = array('limit'=>3);
		$this->Ad->recursive = 0;
		$this->set('ads', $this->Paginator->paginate());
		$paging = $this->params['paging'];
		$this->set(compact('paging'));
	}


	public function view($id = null) {
		if (!$this->Ad->exists($id)) {
			throw new NotFoundException(__('Invalid ad'));
		}
		$options = array('conditions' => array('Ad.' . $this->Ad->primaryKey => $id));
		$this->set('ad', $this->Ad->find('first', $options));
	}

	public function add() {
		if ($this->request->is('post')) {
			$this->Ad->create();
			if ($this->Ad->save($this->request->data)) {
				$this->Session->setFlash(__('Inzerát byl v pořádku uložen.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Inzerát se nepodařilo uložit. Zkuste to znovu prosím.'), 'default', array('class' => 'alert alert-danger'));
			}
		}
	}

	public function edit($id = null) {
		if (!$this->Ad->exists($id)) {
			throw new NotFoundException(__('Invalid ad'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Ad->save($this->request->data)) {
				$this->Session->setFlash(__('Inzerát byl v pořádku uložen.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Inzerát se nepodařilo uložit. Zkuste to znovu prosím.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Ad.' . $this->Ad->primaryKey => $id));
			$this->request->data = $this->Ad->find('first', $options);
		}
	}

	public function delete($id = null) {
		$this->Ad->id = $id;
		if (!$this->Ad->exists()) {
			throw new NotFoundException(__('Invalid ad'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Ad->delete()) {
			$this->Session->setFlash(__('The ad has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The ad could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}

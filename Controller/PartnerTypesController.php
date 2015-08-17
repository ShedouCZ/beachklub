<?php
App::uses('AppController', 'Controller');
class PartnerTypesController extends AppController {
	public $layout = 'BootstrapCake.bootstrap';

	public $components = array('Paginator', 'Session');

	public function index() {
		if ($this->request->is('requested')) {
			$this->PartnerType->recursive = 2;
			$items = $this->PartnerType->find('all', array(
				'order' => 'PartnerType.ord asc',
				)
			);
			return $items;
		} else {
			$items = $this->paginate();
		}
		$this->set('items', $items);
	}

	public function admin_index() {
		$this->PartnerType->recursive = 0;
		$this->set('partnerTypes', $this->Paginator->paginate());
	}

	public function admin_reorder() {
		if ($this->request->is('post')) {
			$this->PartnerType->saveMany($this->request->data);
			exit();
		}
		$this->set('partnerTypes', $this->PartnerType->find('all'));
	}

	public function admin_view($id = null) {
		if (!$this->PartnerType->exists($id)) {
			throw new NotFoundException(__('Invalid partner type'));
		}
		$options = array('conditions' => array('PartnerType.' . $this->PartnerType->primaryKey => $id));
		$this->set('partnerType', $this->PartnerType->find('first', $options));
	}

	public function admin_add() {
		if ($this->request->is('post')) {
			$this->PartnerType->create();
			if ($this->PartnerType->save($this->request->data)) {
				$this->Session->setFlash(__('The partner type has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The partner type could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		}
	}

	public function admin_edit($id = null) {
		if (!$this->PartnerType->exists($id)) {
			throw new NotFoundException(__('Invalid partner type'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->PartnerType->save($this->request->data)) {
				$this->Session->setFlash(__('The partner type has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The partner type could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('PartnerType.' . $this->PartnerType->primaryKey => $id));
			$this->request->data = $this->PartnerType->find('first', $options);
		}
	}

	public function admin_delete($id = null) {
		$this->PartnerType->id = $id;
		if (!$this->PartnerType->exists()) {
			throw new NotFoundException(__('Invalid partner type'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->PartnerType->delete()) {
			$this->Session->setFlash(__('The partner type has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The partner type could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}

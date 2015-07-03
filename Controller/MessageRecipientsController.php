<?php
App::uses('AppController', 'Controller');
class MessageRecipientsController extends AppController {
	public $layout = 'BootstrapCake.bootstrap';

	public $components = array('Paginator', 'Session');


	public function admin_index() {
		$this->MessageRecipient->recursive = 0;
		$this->set('messageRecipients', $this->Paginator->paginate());
	}


	public function admin_view($id = null) {
		if (!$this->MessageRecipient->exists($id)) {
			throw new NotFoundException(__('Invalid message recipient'));
		}
		$options = array('conditions' => array('MessageRecipient.' . $this->MessageRecipient->primaryKey => $id));
		$this->set('messageRecipient', $this->MessageRecipient->find('first', $options));
	}

	public function admin_add() {
		if ($this->request->is('post')) {
			$this->MessageRecipient->create();
			if ($this->MessageRecipient->save($this->request->data)) {
				$this->Session->setFlash(__('The message recipient has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The message recipient could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		}
	}

	public function admin_edit($id = null) {
		if (!$this->MessageRecipient->exists($id)) {
			throw new NotFoundException(__('Invalid message recipient'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->MessageRecipient->save($this->request->data)) {
				$this->Session->setFlash(__('The message recipient has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The message recipient could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('MessageRecipient.' . $this->MessageRecipient->primaryKey => $id));
			$this->request->data = $this->MessageRecipient->find('first', $options);
		}
	}

	public function admin_delete($id = null) {
		$this->MessageRecipient->id = $id;
		if (!$this->MessageRecipient->exists()) {
			throw new NotFoundException(__('Invalid message recipient'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->MessageRecipient->delete()) {
			$this->Session->setFlash(__('The message recipient has been deleted.'), 'default', array('class' => 'alert alert-success'));
		} else {
			$this->Session->setFlash(__('The message recipient could not be deleted. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}

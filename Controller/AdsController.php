<?php
App::uses('AppController', 'Controller');
App::uses('CakeEmail', 'Network/Email');

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
		$this->Ad->recursive = 1;
		$this->set('ads', $this->Paginator->paginate());
		$paging = $this->params['paging'];
		$this->set(compact('paging'));
	}


	public function view($id = null) {
		if (!$this->Ad->exists($id)) {
			throw new NotFoundException(__('Invalid ad'));
		}
		if ($this->request->is('post')) {
			// adding a reply
			$this->AdReply->create();
			$this->request->data['AdReply']['ad_id'] = $id;
			$this->request->data['AdReply']['token'] = uniqid();
			if ($this->AdReply->save($this->request->data)) {
				$this->email_reply($id);
				$this->Session->setFlash(__('Odpověď byla v pořádku uložena.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'view', 'id'=>$id));
			} else {
				$this->Session->setFlash(__('Odpověď se nepodařilo uložit. Zkuste to znovu prosím.'), 'default', array('class' => 'alert alert-danger'));
			}
		}

		$options = array('conditions' => array('Ad.' . $this->Ad->primaryKey => $id));
		$this->set('ad', $this->Ad->find('first', $options));
	}

	public function add() {
		if ($this->request->is('post')) {
			$this->Ad->create();
			$this->request->data['Ad']['token'] = uniqid();
			if ($this->Ad->save($this->request->data)) {
				$this->email_author($this->Ad->id);
				$this->Session->setFlash(__('Inzerát byl v pořádku uložen.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Inzerát se nepodařilo uložit. Zkuste to znovu prosím.'), 'default', array('class' => 'alert alert-danger'));
			}
		}
	}

	public function author_edit($token = null) {
		$conditions = array('Ad.token' => $token);
		$ad = $this->Ad->find('first', compact('conditions'));
		if (!$ad) {
			throw new NotFoundException(__('Invalid ad'));
		}
		$id = $ad['Ad']['id'];
		if ($this->request->is(array('post', 'put'))) {
			$allowed_fields = array(
				'description' => 1,
				'email' => 1,
			);
			$sanitized_data = array();
			$sanitized_data['Ad'] = array_intersect_key($this->request->data['Ad'], $allowed_fields);
			$sanitized_data['Ad']['id'] = $id;

			if ($this->Ad->save($sanitized_data)) {
				$this->Session->setFlash(__('The ad has been saved.'), 'default', array('class' => 'alert alert-success'));
				return $this->redirect('/upravit/'.$token);
			} else {
				$this->Session->setFlash(__('The ad could not be saved. Please, try again.'), 'default', array('class' => 'alert alert-danger'));
			}
		} else {
			$options = array('conditions' => array('Ad.' . $this->Ad->primaryKey => $id));
			$this->request->data = $this->Ad->find('first', $options);
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

	private function email_author($ad_id) {
		$ad_id = (int) $ad_id;
		$cnd = array('Ad.id' => $ad_id);

		$ad = $this->Ad->find('first', array('conditions'=>$cnd));
		if (!$ad) {
			echo 'Ad not found.';
			exit();
		}

		$subject = 'Burza hráčů - váš inzerát';
		$content = array();
		$content[] = 'Váš inzerát byl uspěšně přidán.';
		$content[] = '';
		$content[] = 'Máte možnost ho upravit a také smazat, až nebude aktuální:';
		$content[] = 'Pro úpravu klikněte prosím zde: ' . Router::url('/upravit/' . $ad['Ad']['token'], true);

		$owner_mail =  $ad['Ad']['email'];
		$to = preg_split('/[ ,]+/', Configure::read('Cfg.notification_emails') . ' ' . $owner_mail, $limit=null, $flags=PREG_SPLIT_NO_EMPTY);

		$Email = new CakeEmail('default');
		$Email->to($to)->subject($subject);
		$Email->send($content);
	}

	private function email_reply($ad_id) {
		$ad_id = (int) $ad_id;
		$cnd = array('Ad.id' => $ad_id);

		$ad = $this->Ad->find('first', array('conditions'=>$cnd));
		if (!$ad) {
			echo 'Ad not found.';
			exit();
		}

		$subject = 'Burza hráčů - nová odpověď';
		$content = array();
		$content[] = 'U vašeho inzerátu na burze hráčů je nová odpověď: ' . Router::url('/burza/' . $ad_id, true);

		$owner_mail =  $ad['Ad']['email'];
		$to = preg_split('/[ ,]+/', Configure::read('Cfg.notification_emails') . ' ' . $owner_mail, $limit=null, $flags=PREG_SPLIT_NO_EMPTY);

		$Email = new CakeEmail('default');
		$Email->to($to)->subject($subject);
		$Email->send($content);
	}
}

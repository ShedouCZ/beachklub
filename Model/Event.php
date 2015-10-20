<?php
App::uses('AppModel', 'Model');

class Event extends AppModel {
	public $displayField = 'title';
	public $dateFields  = array('date');

	public $validate = array(
		'title' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
			),
		),
	);

	public function beforeSave($options = array()) {
		parent::beforeSave();
		if (empty($this->data['Event']['slug'])) {
			$this->data['Event']['slug'] = $this->data['Event']['title'];
		}
		if ($this->data['Event']['slug']) {
			$this->data['Event']['slug'] = $this->to_slug($this->data['Event']['slug']);
		}
		return true;
	}
}

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
		if (!$this->id && $this->data['Event']['title']) {
			// only on add
			$title = $this->data['Event']['title'];
			$this->data['Event']['slug'] = transliterator_transliterate("Any-Latin; NFD; [:Nonspacing Mark:] Remove; NFC; [:Punctuation:] Remove; Lower();", $title);
			$this->data['Event']['slug'] = str_replace(' ', '-', $this->data['Event']['slug']);
		}
		return true;
	}
}

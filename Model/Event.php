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
			$this->data['Event']['slug'] = $this->data['Event']['title']
		}
		if ($this->data['Event']['slug']) {
			// sluggize slug
			$slug = $this->data['Event']['slug'];
			$slug = str_replace('-', ' ', $slug);
			$slug = transliterator_transliterate("Any-Latin; NFD; [:Nonspacing Mark:] Remove; NFC; [:Punctuation:] Remove; Lower();", $slug);
			$this->data['Event']['slug'] = str_replace(' ', '-', $slug);
		}
		return true;
	}
}

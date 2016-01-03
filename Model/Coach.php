<?php
App::uses('AppModel', 'Model');

class Coach extends AppModel {
	public $displayField = 'name';

	public $order = array('Coach.ord'=>'asc');

	public $belongsTo = array(
		'Picture' => array(
			'className' => 'Gallery.Picture',
			'foreignKey' => 'gallery_picture_id',
			'conditions' => '',
		)
	);

	// create a dedicated album in Config/sql/tables.sql
	// and fill the id here
	// so uploaded images end up in the dedicated album
	public static $album_id = 4;

	public function beforeSave($options = array()) {
		parent::beforeSave();
		if (empty($this->data['Coach']['slug'])) {
			$this->data['Coach']['slug'] = $this->data['Coach']['name'];
		}
		if ($this->data['Coach']['slug']) {
			$this->data['Coach']['slug'] = $this->to_slug($this->data['Coach']['slug']);
		}
		return true;
	}
}

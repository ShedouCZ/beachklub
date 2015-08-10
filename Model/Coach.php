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
}

<?php
App::uses('AppModel', 'Model');

class Tile extends AppModel {
	public $displayField = 'title';

	public $order = array('Tile.ord'=>'asc');

	public $dateFields  = array('created');

	public $virtualFields = array(
		'created' => "DATE_FORMAT(`Tile`.`created`, '%e.%c.%Y')",
	);

	public $belongsTo = array(
		'Picture' => array(
			'className' => 'Gallery.Picture',
			'foreignKey' => 'gallery_picture_id',
			'conditions' => '',
			'order' => ''
		)
	);

	// create a dedicated album in Config/sql/tables.sql
	// and fill the id here
	// so uploaded images end up in the dedicated album
	public static $album_id = 2;

	public static function encode($data) {
		if (empty($data)) return null;
		$allowed_fields = array('name', 'size', 'caption', 'styles');
		$allowed_fields = array(
			'name' => 1,
			'size' => 1,
			'caption' => 1,
			'styles' => 1,
		);
		$data = array_intersect_key($data, $allowed_fields);
		return json_encode($data);
	}
}

<?php
App::uses('AppModel', 'Model');

class Tile extends AppModel {
	public $displayField = 'title';

	public $order = array('Tile.ord'=>'asc');


	//The Associations below have been created with all possible keys, those that are not needed can be removed

	public $belongsTo = array(
		'Picture' => array(
        	'className' => 'Gallery.Picture',
			'foreignKey' => 'gallery_picture_id',
			'conditions' => '',

		),
		'Document' => array(
			'className' => 'Document',
			'foreignKey' => 'document_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	// create a dedicated album in Config/sql/tables.sql
	// and fill the id here
	// so uploaded images end up in the dedicated album
	public static $album_id = 2;
}

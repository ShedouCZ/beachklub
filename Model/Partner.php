<?php
App::uses('AppModel', 'Model');

class Partner extends AppModel {
	public $displayField = 'name';

	public $order = array('Partner.ord'=>'asc');


	//The Associations below have been created with all possible keys, those that are not needed can be removed

	public $belongsTo = array(
		'Picture' => array(
			'className' => 'GalleryPicture',
			'foreignKey' => 'gallery_picture_id',
			'conditions' => '',
		),
		'PartnerType' => array(
			'className' => 'PartnerType',
			'foreignKey' => 'partner_type_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	// create a dedicated album in Config/sql/tables.sql
	// and fill the id here
	// so uploaded images end up in the dedicated album
	public static $album_id = 5;
}

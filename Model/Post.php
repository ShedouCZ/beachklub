<?php
App::uses('AppModel', 'Model');

class Post extends AppModel {
	public $displayField = 'title';

	public $dateFields  = array('created');

	public $virtualFields = array(
		'created' => "DATE_FORMAT(`Post`.`created`, '%e.%c.%Y')",
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

	public $belongsTo = array(
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}

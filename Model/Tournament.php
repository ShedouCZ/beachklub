<?php
App::uses('AppModel', 'Model');

class Tournament extends AppModel {
	public $displayField = 'name';

	public $dateFields  = array('datetime');

	public $virtualFields = array(
		'datetime' => "DATE_FORMAT(`Tournament`.`datetime`, '%e.%c.%Y')",
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

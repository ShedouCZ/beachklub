<?php
App::uses('AppModel', 'Model');

class MessageRecipient extends AppModel {
	public $displayField = 'email';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

	public $hasMany = array(
		'Message' => array(
			'className' => 'Message',
			'foreignKey' => 'message_recipient_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}

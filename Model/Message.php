<?php
App::uses('AppModel', 'Model');

class Message extends AppModel {
	public $displayField = 'title';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

	public $belongsTo = array(
		'MessageRecipient' => array(
			'className' => 'MessageRecipient',
			'foreignKey' => 'message_recipient_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}

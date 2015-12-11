<?php
App::uses('AppModel', 'Model');

class AdReply extends AppModel {
	public $displayField = 'contact';

	public $dateFields  = array('created');

	public $virtualFields = array(
		'created' => "DATE_FORMAT(`AdReply`.`created`, '%e.%c.%Y')",
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

	public $belongsTo = array(
		'Ad' => array(
			'className' => 'Ad',
			'foreignKey' => 'ad_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}

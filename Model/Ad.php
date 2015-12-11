<?php
App::uses('AppModel', 'Model');

class Ad extends AppModel {
	public $displayField = 'contact';

	public $order = array('Ad.created'=>'desc');

	public $dateFields  = array('created');

	public $virtualFields = array(
		'created' => "DATE_FORMAT(`Ad`.`created`, '%e.%c.%Y')",
	);
	public $validate = array(
		'description' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

	public $hasMany = array(
		'AdReply' => array(
			'className' => 'AdReply',
			'foreignKey' => 'ad_id',
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

<?php
App::uses('AppModel', 'Model');

class PartnerType extends AppModel {
	public $useTable = 'partner_type';

	public $displayField = 'title';

	public $order = array('PartnerType.ord'=>'asc');


	//The Associations below have been created with all possible keys, those that are not needed can be removed

	public $hasMany = array(
		'Partner' => array(
			'className' => 'Partner',
			'foreignKey' => 'partner_type_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => 'Partner.ord',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}

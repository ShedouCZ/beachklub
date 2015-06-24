<?php
App::uses('AppModel', 'Model');

class User extends AppModel {
	public $displayField = 'username';

	public $dateFields  = array('created', 'modified');

	public $virtualFields = array(
		'created' => "DATE_FORMAT(`User`.`created`, '%e.%c.%Y')",
		'modified' => "DATE_FORMAT(`User`.`modified`, '%e.%c.%Y')",
	);
}

<?php
App::uses('AppModel', 'Model');

class News extends AppModel {
	public $displayField = 'title';
	public $dateFields  = array('date');
	public $virtualFields = array(
		// better to convert in the view <- keep data normalized
		//'date' => "DATE_FORMAT(`News`.`date`, '%e.%c.%Y')",
	);
}

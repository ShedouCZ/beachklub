<?php
App::uses('AppModel', 'Model');

class Tile extends AppModel {
	public $displayField = 'title';

	public $order = array('Tile.ord'=>'asc');

	public $dateFields  = array('created');

	public $virtualFields = array(
		'created' => "DATE_FORMAT(`Tile`.`created`, '%e.%c.%Y')",
	);
}

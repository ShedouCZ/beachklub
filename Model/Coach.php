<?php
App::uses('AppModel', 'Model');

class Coach extends AppModel {
	public $displayField = 'name';

	public $order = array('Coach.ord'=>'asc');

}

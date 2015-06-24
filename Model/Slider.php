<?php
App::uses('AppModel', 'Model');

class Slider extends AppModel {
	public $displayField = 'name';

	public $order = array('Slider.ord'=>'asc');

}

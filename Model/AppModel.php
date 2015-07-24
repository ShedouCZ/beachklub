<?php
/**
 * Application model for Cake.
 *
 * This file is application-wide model file. You can put all
 * application-wide model-related methods here.
 *
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Model
 * @since         CakePHP(tm) v 0.2.9
 */

App::uses('Model', 'Model');

/**
 * Application model for Cake.
 *
 * Add your application-wide methods in the class below, your models
 * will inherit them.
 *
 * @package       app.Model
 */
class AppModel extends Model {
	/*
	 * models with associated Gallery.Picture via `gallery_picture_id` db field
	 * encode associated picture meta-data into data-picture attribute via
	 */
	public static function encode_picture($data) {
		if (empty($data) || $data['id'] == null) return null;
		$allowed_fields = array('name', 'size', 'caption', 'styles');
		$allowed_fields = array(
			'name' => 1,
			'size' => 1,
			'caption' => 1,
			'styles' => 1,
		);
		$data = array_intersect_key($data, $allowed_fields);
		return json_encode($data);
	}
}

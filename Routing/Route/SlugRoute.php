<?php

App::uses('Document', 'Model');
App::uses('CakeRoute', 'Routing/Route');
App::uses('ClassRegistry', 'Utility');

class SlugRoute extends CakeRoute {
	protected $cache = null;
	
	public function parse($url) {
		$params = parent::parse($url);
		if (empty($params) || empty($params['model']) || empty($params['slug'])) {
			return false;
		}
		$model = $params['model'];
		$slug  = $params['slug'];
		
		if (is_null($this->cache)) {
			$this->cache = Cache::read('SlugRoute' . $model);
		}
		if (!empty($this->cache) && array_key_exists($slug, $this->cache)) {
			$id = $this->cache[$slug];
		} else {
			App::import('Model', $model);
			list($plugin, $model) = pluginSplit($model);
			$Model = new $model();
			
			$item = $Model->find('first', array(
				'fields' => array('id', 'slug'),
				'conditions' => array(
					$Model->alias . '.slug' => $slug
				),
				'contain' => array(),
				'recursive' => -1,
			));
			$id = ($item) ? $item[$Model->alias]['id'] : false;
			
			if (empty($this->cache)) {
				$this->cache = array();
			}
			$this->cache[$slug] = $id;
			Cache::write('SlugRoute.' . $model, $this->cache);
		}
		
		if (!$id) {
			return false;
		}
		$params['pass'] = array(
			$id,
		);
		return $params;
	}
	
	function match($url) {
		// CakeRoute::match() expects model to be provided in $url to determine
		// the correct route, but controller & action are enough if multiple
		// models don't use the same route.
		$url['model'] = $this->defaults['model'];
		if ($url['action'] != $this->defaults['action'] || $url['controller'] != $this->defaults['controller']) {
			return false;
		}
		// if an item's id was passed in instead of it's slug, translate it.
		if (!isset($url['slug']) && isset($url[0])) {
			$model = $url['model'];
			$id = $url[0];
			if (is_null($this->cache)) {
				$this->cache = Cache::read('SlugRoute.' . $model);
			}
			if (!empty($this->cache) && false !== ($slug = array_search($id, $this->cache))) {
				// $slug already set in conditional
			}
			else {
				App::import('Model', $model);
				list($plugin, $model) = pluginSplit($model);
				$Model = new $model;
				$item = $Model->find('first', array(
					'fields' => array('slug'),
					'conditions' => array(
						$Model->alias . '.id' => $id,
					),
					'contain' => array(),
					'recursive' => -1,
				));
				if (empty($item)) {
					return false;
				}
				$slug = $item[$Model->alias]['slug'];
				if (empty($this->cache)) {
					$this->cache = array();
				}
				$this->cache[$slug] = $id;
				Cache::write('SlugRoute.' . $model, $this->cache);
			}
			$url['slug'] = $slug;
			unset($url[0]);
		}
		return parent::match($url);
	}
}
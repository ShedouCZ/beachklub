<?php

App::uses('Document', 'Model');
App::uses('RedirectRoute', 'Routing/Route');
App::uses('ClassRegistry', 'Utility');

class AliasRoute extends RedirectRoute {
	protected $cache = null;

	public function parse($url) {
		$params = CakeRoute::parse($url);
		if (empty($params) || empty($params['alias'])) {
			return false;
		}
		if (!$this->response) {
			$this->response = new CakeResponse();
		}
		$model = $params['model'];
		$alias  = $params['alias'];

		// DISABLE CACHE
		if (0 && is_null($this->cache)) {
			$this->cache = Cache::read('AliasRoute' . $model);
		}
		if (!empty($this->cache) && array_key_exists($alias, $this->cache)) {
			$slug = $this->cache[$alias];
		} else {
			App::import('Model', $model);
			list($plugin, $model) = pluginSplit($model);
			$Model = new $model();

			$item = $Model->find('first', array(
				'fields' => array('id', 'slug'),
				'conditions' => array(
					$Model->alias . '.alias' => $alias
				),
				'contain' => array(),
				'recursive' => -1,
			));
			$slug = ($item) ? $item[$Model->alias]['slug'] : false;

			if (empty($this->cache)) {
				$this->cache = array();
			}
			$this->cache[$alias] = $slug;
			Cache::write('AliasRoute.' . $model, $this->cache);
		}

		if (!$slug) {
			return false;
		}

		// redirect
		$redirect = $slug;
		$status = 301;
		if (isset($this->options['status']) && ($this->options['status'] >= 300 && $this->options['status'] < 400)) {
			$status = $this->options['status'];
		}
		$this->response->header(array('Location' => Router::url($redirect, true)));
		$this->response->statusCode($status);
		$this->response->send();
		$this->_stop();
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
		if (!isset($url['alias']) && isset($url[0])) {
			$model = $url['model'];
			$id = $url[0];
			if (is_null($this->cache)) {
				$this->cache = Cache::read('AliasRoute.' . $model);
			}
			if (!empty($this->cache) && false !== ($slug = array_search($id, $this->cache))) {
				// $slug already set in conditional
			}
			else {
				App::import('Model', $model);
				list($plugin, $model) = pluginSplit($model);
				$Model = new $model;
				$item = $Model->find('first', array(
					'fields' => array('alias'),
					'conditions' => array(
						$Model->alias . '.id' => $id,
					),
					'contain' => array(),
					'recursive' => -1,
				));
				if (empty($item)) {
					return false;
				}
				$alias = $item[$Model->alias]['alias'];
				if (empty($this->cache)) {
					$this->cache = array();
				}
				$this->cache[$alias] = $id;
				Cache::write('AliasRoute.' . $model, $this->cache);
			}
			$url['slug'] = $slug;
			unset($url[0]);
		}
		return parent::match($url);
	}
}

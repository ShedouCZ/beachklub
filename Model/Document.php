<?php
App::uses('AppModel', 'Model');

class Document extends AppModel {
	public $displayField = 'title';

	public $order = array('Document.ord'=>'asc', 'Document.id'=>'desc');

	public $validate = array(
			'title' => array(
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

	public $belongsTo = array(
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	public $hasMany = array(
		'Tile' => array(
			'className' => 'Tile',
			'foreignKey' => 'document_id',
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

	public function beforeSave($options = array()) {
		parent::beforeSave();
		$placeholder = '[[generate:h2-menu]]';
		if (strpos($this->data['Document']['perex'], $placeholder) !== false) {
			// TODO: refactor this whole code!!
			require_once "../Vendor/autoload.php";
			$content = $this->data['Document']['content'];
			$html5 = new Masterminds\HTML5();
			$dom = $html5->loadHTML($content);
			$qp = qp($dom);
			$h2 = $qp->find('h2');
			$titles = array();
			foreach ($h2 as $i => $el) {
				$title = $el->text();
				$slug = $this->to_slug($title);
				$el->attr('id', $slug);
				$titles[$slug] = $title;
			}
			// persist new h2 ids
			$this->data['Document']['content'] = $qp->innerHTML();

			// render
			$document = $this->data;
			$element = 'h2-menu';
			App::import('Controller', 'Documents');
			$Documents = new DocumentsController;
			$View = new View($Documents, false);
			$this->data['Document']['perex'] = str_replace($placeholder, $View->element($element, compact('titles')), $document['Document']['perex']);
		}
		return true;
	}

}

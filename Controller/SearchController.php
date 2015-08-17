<?php
class SearchController extends AppController {
	public $uses = array('Document', 'Commerce', 'Form', 'Desk', 'Regulation', 'QueriesStat');
	public $helpers = array('Html', );
	public $paginate = array('limit'=>'30');

 function index($q=null) {
	$q = isset($this->request->query['q']) ? $this->request->query['q'] : $this->request->params['pass']['q'];

	$this->set('query', $q);
	$this->set('title_for_layout', "Výsledky hledání pro '$q'");

	// queries corrections in order to yield results
	$queries_corrections = array(
		'územní plán' => 'územní',
		'svoz odpadu' => 'odpadu',
		'inzerce' => 'katalog',
		'kolaudace' => 'kolaudaci',
		'autobus' => 'jízdní řády',
		'bus' => 'jízdní řády',
		'vlak' => 'jízdní řády',
		'jízdní řád 340' => 'jízdní řády',
	);
	if (isset($queries_corrections[$q])) $q = $queries_corrections[$q];

	$docs = $this->Document->find('all', array('conditions' =>array('Document.content LIKE'=>"%$q%")));
	$this->set('docs', $docs);

	//$desks = $this->Desk->find('all', array('conditions'=>"Desk.inscription LIKE '%$q%'"));
	//$regulations = $this->Regulation->find('all', array('conditions'=>"Regulation.name LIKE '%$q%'"));

	// query stats to see what are people looking for and not finding
	/*
	$tf = $this->QueriesStat->create();
	$tf['QueriesStat']['q'] = $q;
	$results_sum = count($docs) + count($commerces) + count($forms) + count($desks) + count($regulations);
	$tf['QueriesStat']['results'] = $results_sum;
	$this->QueriesStat->save($tf);
	*/
  }
}


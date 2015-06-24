<?php
App::uses('AppController', 'Controller');
/**
 * Tiles Controller
 *
 * @property Tile $Tile
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class TilesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');

	public function index() {
        $tiles = $this->paginate();
        if ($this->request->is('requested')) {
            return $tiles;
        }
        $this->set('tiles', $tiles);
    }

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Tile->recursive = 0;
		$this->set('tiles', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Tile->exists($id)) {
			throw new NotFoundException(__('Invalid tile'));
		}
		$options = array('conditions' => array('Tile.' . $this->Tile->primaryKey => $id));
		$this->set('tile', $this->Tile->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Tile->create();
			if ($this->Tile->save($this->request->data)) {
				$this->Session->setFlash(__('The tile has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tile could not be saved. Please, try again.'));
			}
		}
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Tile->exists($id)) {
			throw new NotFoundException(__('Invalid tile'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Tile->save($this->request->data)) {
				$this->Session->setFlash(__('The tile has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tile could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Tile.' . $this->Tile->primaryKey => $id));
			$this->request->data = $this->Tile->find('first', $options);
		}
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Tile->id = $id;
		if (!$this->Tile->exists()) {
			throw new NotFoundException(__('Invalid tile'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Tile->delete()) {
			$this->Session->setFlash(__('The tile has been deleted.'));
		} else {
			$this->Session->setFlash(__('The tile could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}

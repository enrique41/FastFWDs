<?php
class FavoritesController extends AppController {

	var $name = 'Favorites';

	function index() {
		$this->Favorite->recursive = 0;
		$this->set('favorites', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'favorite'));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('favorite', $this->Favorite->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Favorite->create();
			if ($this->Favorite->save($this->data)) {
				$this->Session->setFlash(sprintf(__('The %s has been saved', true), 'favorite'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('The %s could not be saved. Please, try again.', true), 'favorite'));
			}
		}
		$users = $this->Favorite->User->find('list');
		$forwards = $this->Favorite->Forward->find('list');
		$this->set(compact('users', 'forwards'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'favorite'));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Favorite->save($this->data)) {
				$this->Session->setFlash(sprintf(__('The %s has been saved', true), 'favorite'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('The %s could not be saved. Please, try again.', true), 'favorite'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Favorite->read(null, $id);
		}
		$users = $this->Favorite->User->find('list');
		$forwards = $this->Favorite->Forward->find('list');
		$this->set(compact('users', 'forwards'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid id for %s', true), 'favorite'));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Favorite->delete($id)) {
			$this->Session->setFlash(sprintf(__('%s deleted', true), 'Favorite'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(sprintf(__('%s was not deleted', true), 'Favorite'));
		$this->redirect(array('action' => 'index'));
	}
}
?>
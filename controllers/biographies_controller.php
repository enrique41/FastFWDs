<?php
class BiographiesController extends AppController {

	var $name = 'Biographies';

	function index() {
		$this->Biography->recursive = 0;
		$this->set('biographies', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'biography'));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('biography', $this->Biography->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Biography->create();
			if ($this->Biography->save($this->data)) {
				$this->Session->setFlash(sprintf(__('The %s has been saved', true), 'biography'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('The %s could not be saved. Please, try again.', true), 'biography'));
			}
		}
		$users = $this->Biography->User->find('list');
		$this->set(compact('users'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'biography'));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Biography->save($this->data)) {
				$this->Session->setFlash(sprintf(__('The %s has been saved', true), 'biography'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('The %s could not be saved. Please, try again.', true), 'biography'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Biography->read(null, $id);
		}
		$users = $this->Biography->User->find('list');
		$this->set(compact('users'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid id for %s', true), 'biography'));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Biography->delete($id)) {
			$this->Session->setFlash(sprintf(__('%s deleted', true), 'Biography'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(sprintf(__('%s was not deleted', true), 'Biography'));
		$this->redirect(array('action' => 'index'));
	}
}
?>
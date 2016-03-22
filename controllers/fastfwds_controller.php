<?php
class FastfwdsController extends AppController {

	var $name = 'Fastfwds';

	function index() {
		$this->Fastfwd->recursive = 0;
		$this->set('fastfwds', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'fastfwd'));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('fastfwd', $this->Fastfwd->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Fastfwd->create();
			if ($this->Fastfwd->save($this->data)) {
				$this->Session->setFlash(sprintf(__('The %s has been saved', true), 'fastfwd'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('The %s could not be saved. Please, try again.', true), 'fastfwd'));
			}
		}
		$users = $this->Fastfwd->User->find('list');
		$forwards = $this->Fastfwd->Forward->find('list');
		$this->set(compact('users', 'forwards'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'fastfwd'));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Fastfwd->save($this->data)) {
				$this->Session->setFlash(sprintf(__('The %s has been saved', true), 'fastfwd'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('The %s could not be saved. Please, try again.', true), 'fastfwd'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Fastfwd->read(null, $id);
		}
		$users = $this->Fastfwd->User->find('list');
		$forwards = $this->Fastfwd->Forward->find('list');
		$this->set(compact('users', 'forwards'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid id for %s', true), 'fastfwd'));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Fastfwd->delete($id)) {
			$this->Session->setFlash(sprintf(__('%s deleted', true), 'Fastfwd'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(sprintf(__('%s was not deleted', true), 'Fastfwd'));
		$this->redirect(array('action' => 'index'));
	}
}
?>
<?php
class SettingsController extends AppController {

	var $name = 'Settings';

	function index() {
		$this->Setting->recursive = 0;
		$this->set('settings', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'setting'));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('setting', $this->Setting->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Setting->create();
			if ($this->Setting->save($this->data)) {
				$this->Session->setFlash(sprintf(__('The %s has been saved', true), 'setting'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('The %s could not be saved. Please, try again.', true), 'setting'));
			}
		}
		$users = $this->Setting->User->find('list');
		$this->set(compact('users'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'setting'));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Setting->save($this->data)) {
				$this->Session->setFlash(sprintf(__('The %s has been saved', true), 'setting'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('The %s could not be saved. Please, try again.', true), 'setting'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Setting->read(null, $id);
		}
		$users = $this->Setting->User->find('list');
		$this->set(compact('users'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid id for %s', true), 'setting'));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Setting->delete($id)) {
			$this->Session->setFlash(sprintf(__('%s deleted', true), 'Setting'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(sprintf(__('%s was not deleted', true), 'Setting'));
		$this->redirect(array('action' => 'index'));
	}
}
?>
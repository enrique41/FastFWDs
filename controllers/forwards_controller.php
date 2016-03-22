<?php
class ForwardsController extends AppController {

	var $name = 'Forwards';

	function index() {
		$this->Forward->recursive = 0;
		$this->set('forwards', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'forward'));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('forward', $this->Forward->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Forward->create();
			if ($this->Forward->save($this->data)) {
				$this->Session->setFlash(sprintf(__('The %s has been saved', true), 'forward'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('The %s could not be saved. Please, try again.', true), 'forward'));
			}
		}
		$users = $this->Forward->User->find('list');
		$tags = $this->Forward->Tag->find('list');
		$this->set(compact('users', 'tags'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'forward'));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Forward->save($this->data)) {
				$this->Session->setFlash(sprintf(__('The %s has been saved', true), 'forward'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('The %s could not be saved. Please, try again.', true), 'forward'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Forward->read(null, $id);
		}
		$users = $this->Forward->User->find('list');
		$tags = $this->Forward->Tag->find('list');
		$this->set(compact('users', 'tags'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid id for %s', true), 'forward'));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Forward->delete($id)) {
			$this->Session->setFlash(sprintf(__('%s deleted', true), 'Forward'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(sprintf(__('%s was not deleted', true), 'Forward'));
		$this->redirect(array('action' => 'index'));
	}
}
?>
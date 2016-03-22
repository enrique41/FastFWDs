<?php
class ForwardsTagsController extends AppController {

	var $name = 'ForwardsTags';

	function index() {
		$this->ForwardsTag->recursive = 0;
		$this->set('forwardsTags', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'forwards tag'));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('forwardsTag', $this->ForwardsTag->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->ForwardsTag->create();
			if ($this->ForwardsTag->save($this->data)) {
				$this->Session->setFlash(sprintf(__('The %s has been saved', true), 'forwards tag'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('The %s could not be saved. Please, try again.', true), 'forwards tag'));
			}
		}
		$forwards = $this->ForwardsTag->Forward->find('list');
		$tags = $this->ForwardsTag->Tag->find('list');
		$users = $this->ForwardsTag->User->find('list');
		$this->set(compact('forwards', 'tags', 'users'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'forwards tag'));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->ForwardsTag->save($this->data)) {
				$this->Session->setFlash(sprintf(__('The %s has been saved', true), 'forwards tag'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('The %s could not be saved. Please, try again.', true), 'forwards tag'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->ForwardsTag->read(null, $id);
		}
		$forwards = $this->ForwardsTag->Forward->find('list');
		$tags = $this->ForwardsTag->Tag->find('list');
		$users = $this->ForwardsTag->User->find('list');
		$this->set(compact('forwards', 'tags', 'users'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid id for %s', true), 'forwards tag'));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->ForwardsTag->delete($id)) {
			$this->Session->setFlash(sprintf(__('%s deleted', true), 'Forwards tag'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(sprintf(__('%s was not deleted', true), 'Forwards tag'));
		$this->redirect(array('action' => 'index'));
	}
}
?>
<?php
class FeedbacksController extends AppController {

	var $name = 'Feedbacks';

	function index() {
		$this->Feedback->recursive = 0;
		$this->set('feedbacks', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'feedback'));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('feedback', $this->Feedback->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Feedback->create();
			if ($this->Feedback->save($this->data)) {
				$this->Session->setFlash(sprintf(__('The %s has been saved', true), 'feedback'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('The %s could not be saved. Please, try again.', true), 'feedback'));
			}
		}
		$users = $this->Feedback->User->find('list');
		$forwards = $this->Feedback->Forward->find('list');
		$this->set(compact('users', 'forwards'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'feedback'));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Feedback->save($this->data)) {
				$this->Session->setFlash(sprintf(__('The %s has been saved', true), 'feedback'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('The %s could not be saved. Please, try again.', true), 'feedback'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Feedback->read(null, $id);
		}
		$users = $this->Feedback->User->find('list');
		$forwards = $this->Feedback->Forward->find('list');
		$this->set(compact('users', 'forwards'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid id for %s', true), 'feedback'));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Feedback->delete($id)) {
			$this->Session->setFlash(sprintf(__('%s deleted', true), 'Feedback'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(sprintf(__('%s was not deleted', true), 'Feedback'));
		$this->redirect(array('action' => 'index'));
	}
}
?>
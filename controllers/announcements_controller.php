<?php
class AnnouncementsController extends AppController {

	var $name = 'Announcements';

	function index() {
		$this->Announcement->recursive = 0;
		$this->set('announcements', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'announcement'));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('announcement', $this->Announcement->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Announcement->create();
			if ($this->Announcement->save($this->data)) {
				$this->Session->setFlash(sprintf(__('The %s has been saved', true), 'announcement'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('The %s could not be saved. Please, try again.', true), 'announcement'));
			}
		}
		$users = $this->Announcement->User->find('list');
		$groups = $this->Announcement->Group->find('list');
		$this->set(compact('users', 'groups'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'announcement'));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Announcement->save($this->data)) {
				$this->Session->setFlash(sprintf(__('The %s has been saved', true), 'announcement'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('The %s could not be saved. Please, try again.', true), 'announcement'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Announcement->read(null, $id);
		}
		$users = $this->Announcement->User->find('list');
		$groups = $this->Announcement->Group->find('list');
		$this->set(compact('users', 'groups'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid id for %s', true), 'announcement'));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Announcement->delete($id)) {
			$this->Session->setFlash(sprintf(__('%s deleted', true), 'Announcement'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(sprintf(__('%s was not deleted', true), 'Announcement'));
		$this->redirect(array('action' => 'index'));
	}
}
?>
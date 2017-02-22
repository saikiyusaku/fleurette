<?php

class FlowersController extends AppController {
	public $helpers = array('Html', 'Form', 'Flash');
	public $components = array('Flash');


	public function index() {
		$flowers = $this->Flower->find('all');
		$this->set('flowers', $flowers);

	}


	public function view($id = null) {
		if (!$id) {
			throw new NotFoundException(__('Invalid post'));
		}

		$flower = $this->Flower->findById($id);
		if (!$flower) {
			throw new NotFoundException(__('Invalid post'));
		}
		$this->set('flower', $flower);
	}


	public function add() {
		if ($this->request->is('post')) {
			$this->Flower->create();
			if ($this->Flower->save($this->request->data)) {
				$this->Flash->success(__('Flower has been saved.'));
				return $this->redirect(array('action' => 'index'));
			}
			$this->Flash->error(__('Unable to add.'));
		}
	}


	public function edit($id = null) {
		if (!$id) {
			throw new NotFoundException(__('Invalid post'));
		}

		$flower = $this->Flower->findById($id);
		if (!$flower) {
			throw new NotFoundException(__('Invalid post'));
		}

		if ($this->request->is(array('post', 'put'))) {
			$this->Flower->id = $id;
			if ($this->Flower->save($this->request->data)) {
				$this->Flash->success(__('updated!!'));
				return $this->redirect(array('action' => 'view', $id));
			}
			$this->Flash->error(__('Unable to update.'));
		}

		if (!$this->request->data) {
			$this->request->data = $flower;
		}
	}


	public function delete($id) {
		if ($this->request->is('get')) {
			throw new MethodNotAllowedException();
		}

		if ($this->Flower->delete($id)) {
			$this->Flash->success(
				__('The flower with id: %s has been deleted.', h($id))
				);
		} else {
			$this->Flash->error(
				__('The flower with id: %s could not be deleted.', h($id))
				);
		}

		return $this->redirect(array('action' => 'index'));
	}
}
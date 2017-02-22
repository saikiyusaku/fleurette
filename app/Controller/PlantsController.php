<?php

class PlantsController extends AppController {
	public $helpers = array('Html', 'Form', 'Flash');
	public $components = array('Flash');


	public function index() {
		$plants = $this->Plant->find('all');
		$this->set('plants', $plants);

	}


	public function view($id = null) {
		if (!$id) {
			throw new NotFoundException(__('sorry, this plant does not exist.'));
		}

		$plant = $this->Plant->findById($id);
		if (!$plant) {
			throw new NotFoundException(__('sorry, this plant does not exist.'));
		}
		$this->set('plant', $plant);
	}


	public function add() {
		if ($this->request->is('post')) {
			$this->Plant->create();
			if ($this->Plant->save($this->request->data)) {
				$this->Flash->success(__('Plant has been saved.'));
				return $this->redirect(array('action' => 'index'));
			}
			$this->Flash->error(__('Unable to add.'));
		}
	}


	public function edit($id = null) {
		if (!$id) {
			throw new NotFoundException(__('sorry, this plant does not exist.'));
		}

		$plant = $this->Plant->findById($id);
		if (!$plant) {
			throw new NotFoundException(__('sorry, this plant does not exist.'));
		}

		if ($this->request->is(array('post', 'put'))) {
			$this->Plant->id = $id;
			if ($this->Plant->save($this->request->data)) {
				$this->Flash->success(__('updated!!'));
				return $this->redirect(array('action' => 'view', $id));
			}
			$this->Flash->error(__('Unable to update.'));
		}

		if (!$this->request->data) {
			$this->request->data = $plant;
		}
	}


	public function delete($id) {
		if ($this->request->is('get')) {
			throw new MethodNotAllowedException();
		}

		if ($this->Plant->delete($id)) {
			$this->Flash->success(
				__('The plant with id: %s has been deleted.', h($id))
				);
		} else {
			$this->Flash->error(
				__('The plant with id: %s could not be deleted.', h($id))
				);
		}

		return $this->redirect(array('action' => 'index'));
	}
}
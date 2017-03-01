<?php

class PlantsController extends AppController {
	public $helpers = array('Html', 'Form', 'Flash');
	public $components = array('Flash', 'Paginator');

	public $paginate = [
		'limit' => 28,
		'order' => [
			'Plant.created' => 'desc'
		]
	]; 


	public function index() {
		$this->Paginator->settings = $this->paginate;
		$plants = $this->Paginator->paginate('Plant');

		// $this->log($plants);

		// $plantSize = $this->somefunction();


		// foreach ($plants as $plant) {
		// 	$plantSize = 
		// 	$plantPrice = $plant['Plant']['price'];

		// 	if ($plant['Plant']['size'] =< 2) {
		// 		$plantSize = '2号鉢以下';
		// 	} elseif ($plant['Plant']['size'] == 3 ) {
		// 		$plantSize = '3号鉢';
		// 	} elseif ($plant['Plant']['size'] == 4) {
		// 		$plantSize = '4号鉢';
		// 	} elseif ($plant['Plant']['size'] == 5) {
		// 		$plantSize = '5号鉢';
		// 	} elseif ($plant['Plant']['size'] == 6) {
		// 		$plantSize = '6号鉢';
		// 	} elseif ($plant['Plant']['size'] >= 7) {
		// 		$plantSize = '7号鉢以上'
		// 	}

		// 	$this->log($plant);
		// 	$this->log($plantSize);
		// 	$this->log($plantPrice);
		// }

		$authUser = $this->Auth->user();

		$this->set(compact(
			'plants',
			'authUser'
		));

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
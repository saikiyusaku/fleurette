<?php

class UsersController extends AppController {
	public $helpers = array('Html', 'Form', 'Flash');
	public $components = array('Flash');

	public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('add', 'logout');
    } 


	public function login() {
		if ($this->request->is('post')) {
			if ($this->Auth->login()) {
				// $this->log($this->Auth->user());
				return $this->redirect($this->Auth->redirectUrl());
			}
			$this->Flash->error(
				__('Username or password is incorrect')
			);
		}
	}

	public function logout() {
		$this->log('logout');
		// $this->log($this->Auth->user());
		$this->redirect($this->Auth->logout());
	}

	public function add() {
        if ($this->request->is('post')) {
            $this->User->create();
            if ($this->User->save($this->request->data)) {
                $this->Flash->success(__('The user has been saved'));
                return $this->redirect(['controller' => 'pages', 'action' => 'display', 'top']);
            }
            $this->Flash->error(
                __('The user could not be saved. Please, try again.')
            );
        }
    }

}
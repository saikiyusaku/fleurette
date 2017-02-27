<?php

class PostsController extends AppController {
	public $helpers = array('Html', 'Form', 'Flash');
	public $components = array('Flash', 'Paginator');

	public $paginate = [
		'limit' => 16,
		'order' => [
			'Post.created' => 'desc'
		]
	];


	public function index() {

		$this->Paginator->settings = $this->paginate;
		$posts = $this->Paginator->paginate('Post');

		$authUser = $this->Auth->user();
		// $this->log($authUser);

		$this->set(compact(
			'posts',
			'authUser'
		));

	}


	public function view($id = null) {
		if (!$id) {
			throw new NotFoundException(__('Invalid post'));
		}

		$post = $this->Post->findById($id);
		if (!$post) {
			throw new NotFoundException(__('Invalid post'));
		}
		$this->set('post', $post);
	}


	public function add() {

		// $authUser = $this->Auth->user();

		// if ($authUser['is_admin'] != 1) {
  //           throw new NotFoundException();
  //           $this->log('sdfghjkl;');
  //       }

		if ($this->request->is('post')) {
			$this->Post->create();
			if ($this->Post->save($this->request->data)) {
				$this->Flash->success(__('Your post has been saved.'));
				return $this->redirect(array('action' => 'index'));
			}
			$this->Flash->error(__('Unable to add your post.'));
		}
	}


	public function edit($id = null) {
		if (!$id) {
			throw new NotFoundException(__('Invalid post'));
		}

		$post = $this->Post->findById($id);
		if (!$post) {
			throw new NotFoundException(__('Invalid post'));
		}

		if ($this->request->is(array('post', 'put'))) {
			$this->Post->id = $id;
			if ($this->Post->save($this->request->data)) {
				$this->Flash->success(__('Your post has been updated.'));
				return $this->redirect(array('action' => 'view', $id));
			}
			$this->Flash->error(__('Unable to update your post.'));
		}

		if (!$this->request->data) {
			$this->request->data = $post;
		}
	}


	public function delete($id) {
		if ($this->request->is('get')) {
			throw new MethodNotAllowedException();
		}

		if ($this->Post->delete($id)) {
			$this->Flash->success(
				__('The post with id: %s has been deleted.', h($id))
				);
		} else {
			$this->Flash->error(
				__('The post with id: %s could not be deleted.', h($id))
				);
		}

		return $this->redirect(array('action' => 'index'));
	}
}
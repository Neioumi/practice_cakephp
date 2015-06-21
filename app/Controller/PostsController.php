<?php

// 投稿記事postsに対するコントローラ
class PostsController extends AppController {
	public $helpers = array('Html', 'Form', 'Session');

	// PostsControllerの中にindex()という関数を定義すると、
	// ユーザは、/posts/index というリクエストでそのロジックにアクセスできる
	public function index() {
		// set()を使ってコントローラからビューにデータを渡す
		// ビューの変数postsを設定
		// Postモデルのfind('all')メソッドから帰ってきた値が入る
		$this->set('posts', $this->Post->find('all'));
	}

	public function view($id = null) {
		// ユーザが/posts/view/とリクエストしたらNotFoundExceptionを送出し、CakePHPのErrorHandlerに処理が引き継がれる
		if (!$id) {
			throw new NotFoundException(__('Invalid post'));
		}

		// ユーザが/posts/view/3 とリクエストすると、3という値が$idとして渡される
		$post = $this->Post->findById($id); // idで記事情報を取得
		if (!$post) {
			throw new NotFoundException(__('Invalid post'));
		}
		$this->set('post', $post);

	}

	public function add() {
		if ($this->request->is('post')) {
			$this->Post->create();
			if ($this->Post->save($this->request->data)) {
				$this->Session->setFlash(__('Your post has been saved.'), 'default', array('class' => 'success'));
				return $this->redirect(array('action' => 'index'));
			}
			$this->Session->setFlash(__('Unable to add your post.'));
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
				$this->Session->setFlash(__('Your post has been updated.'), 'default', array('class' => 'success'));
				return $this->redirect(array('action' => 'index'));
			}
			$this->Session->setFlash(__('Unable to update your post.'));
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
			$this->Session->setFlash(__('The post with id: %s has been deleted.', h($id)), 'default', array('class' => 'success'));
		} else {
			$this->Session->setFlash(__('The post with id: %s could not be deleted.', h($id)));
		}

		return $this->redirect(array('action' => 'index' ));
	}
}
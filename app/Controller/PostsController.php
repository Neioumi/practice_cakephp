<?php

// 投稿記事postsに対するコントローラ
class PostsController extends AppController {
	public $helpers = array('Html', 'Form');

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
}
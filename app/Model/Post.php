<?php

// モデル名がPostなのでCakePHPはPostsControllerで使用されると判断する。
class Post extends AppModel {
	public $validate = array(
		'title' => array( 'rule' => 'notEmpty'),
		'body' => array( 'rule' => 'notEmpty')
	);
}
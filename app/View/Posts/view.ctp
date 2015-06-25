<?php
$this->Html->meta('keywords', 'キーワード1,キーワード2', array('inline' => false));
$this->Html->meta('description', 'ディスクリプション', array('inline' => false));
 ?>

 <h1><?php echo h($post['Post']['title']); ?></h1>

<p><small>Created: <?php echo $post['Post']['created']; ?></small></p>

<p><?php echo h($post['Post']['body']); ?></p>
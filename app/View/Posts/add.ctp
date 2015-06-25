<?php
$this->Html->meta('keywords', 'キーワード1,キーワード2', array('inline' => false));
$this->Html->meta('description', 'ディスクリプション', array('inline' => false));
 ?>

<h1>Add Post</h1>
<?php 
echo $this->Form->create('Post');
echo $this->Form->input('title');
echo $this->Form->input('body', array('rows' => '3'));
echo $this->Form->end('Save Post');
 ?>
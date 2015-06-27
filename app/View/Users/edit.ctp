<?php
$this->Html->meta('keywords', 'キーワード1,キーワード2', array('inline' => false));
$this->Html->meta('description', 'ディスクリプション', array('inline' => false));
 ?>

<h1>Edit User</h1>

<?php 
echo $this->Form->create('User');
echo $this->Form->input('username');
echo $this->Form->input('password');
echo $this->Form->input('id', array('type' => 'hidden'));
echo $this->Form->end('Save User');
 ?>
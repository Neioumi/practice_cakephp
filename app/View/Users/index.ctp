<?php
$this->Html->meta('keywords', 'キーワード1,キーワード2', array('inline' => false));
$this->Html->meta('description', 'ディスクリプション', array('inline' => false));
 ?>

<h1>User Index</h1>

<ul>
	<li>
		<?php echo $this->Html->link (
			'Login',
			array('controller' => 'users', 'action' => 'login')
			);
		 ?>
	</li>
	<li>
		<?php echo $this->Html->link (
			'Add User',
			array('controller' => 'users', 'action' => 'add')
			);
		 ?>
	</li>
</ul>


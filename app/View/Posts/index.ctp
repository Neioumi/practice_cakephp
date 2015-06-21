<h1>Blog Posts</h1>

<table>
	<tr>
		<th>ID</th>
		<th>Title</th>
		<th>Created</th>
		<th>Edit</th>
		<th>Delete</th>
	</tr>

	<!-- $post配列をループして投稿記事を表示 -->
	<!-- HtmlHelperクラス、$this->Html->オブジェクトのlink()メソッドを使ってリンクを生成している -->
	<?php foreach ($posts as $post): ?>
	<tr>
		<td><?php echo $post['Post']["id"]; ?></td>
		<td><?php echo $this->Html->link($post['Post']['title'],
		array('controller' => 'posts',
			'action' => 'view',
			$post['Post']['id'])); ?></td>
		<td><?php echo $post['Post']['created']; ?></td>
		<td><?php echo $this->Html->link('Edit', array('action' => 'edit', $post['Post']['id'])); ?></td>
		<td><?php echo $this->Form->postLink('Delete',
		array('action' => 'delete', $post['Post']['id']),
		array('confirm' => 'Are you sure?')); ?></td>
	</tr>
	<?php endforeach; ?>
	<?php unset($post); ?>
</table>

<?php echo $this->Html->link (
	'Add Post',
	array('controller' => 'posts', 'action' => 'add')
	);
 ?>
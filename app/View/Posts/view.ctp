<!-- File: /app/View/Posts/view.ctp -->

<?php 

echo $this->Html->css('blog_view');

?>

<div class="blog_view_all">

	<h1><?php echo h($post['Post']['title']); ?></h1>

	<p><?php echo ($post['Post']['body']); ?></p>

	<p><small>Created: <?php echo $post['Post']['created']; ?></small></p>

	<p><?php echo $this->Html->link('Edit Post', array('controller' => 'posts', 'action' => 'edit', $post['Post']['id'])); ?>
	</p>
	<p>
	<?php echo $this->Form->postLink('Delete',array('action' => 'delete', $post['Post']['id']),array('confirm' => 'Are you sure?'));?>
	</p>

</div>
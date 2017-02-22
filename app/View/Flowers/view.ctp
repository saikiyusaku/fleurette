<!-- File: /app/View/Flowers/view.ctp -->

<?php 

echo $this->Html->css('blog_view');

?>

<div class="blog_view_all">

	<h1><?php echo h($flower['Flower']['name']); ?></h1>

	<p><?php echo ($flower['Flower']['body']); ?></p>

	<p><?php echo $this->Html->link('Edit Flower', array('controller' => 'flowers', 'action' => 'edit', $flower['Flower']['id'])); ?>
	</p>
	<p>
	<?php echo $this->Form->postLink('Delete',array('action' => 'delete', $flower['Flower']['id']),array('confirm' => 'Are you sure?'));?>
	</p>

</div>
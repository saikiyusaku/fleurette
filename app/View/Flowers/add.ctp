<!-- File: /app/View/Flowers/add.ctp -->
<?php 

echo $this->Html->script('/ckeditor/ckeditor.js');

?>


<h1>Add Flower</h1>
<?= $this->Form->create('Flower'); ?>
<?= $this->Form->input('name'); ?>
<legend><?= __('花の追加'); ?></legend>

<?php
	echo $this->Form->textarea('body', array(
			'name' => "data[Flower][body]",
			'class' => 'ckeditor',
			'cols' => '80',
			'id' => 'editor1',
			'rows' => '10'
		));
	echo $this->Form->input('flowerimage');
	echo $this->Form->end(__('save Flower'));
?>

<script>
// Replace the <textarea id="editor1"> with a CKEditor
// instance, using default configuration.
CKEDITOR.replace( 'editor1' );
</script>
<!-- File: /app/View/Plants/add.ctp -->
<?php 

echo $this->Html->script('/ckeditor/ckeditor.js');

?>


<h1>植物の追加</h1>
<?= $this->Form->create('Plant'); ?>
<?= $this->Form->input('name'); ?>
<legend><?= __('植物の追加'); ?></legend>

<?php
	echo $this->Form->textarea('body', array(
			'name' => "data[Plant][body]",
			'class' => 'ckeditor',
			'cols' => '80',
			'id' => 'editor1',
			'rows' => '10'
		));
	echo $this->Form->input('plantimage');
	echo $this->Form->input('kind_and_orogin')
	echo $this->Form->input('lifestyle_image');
	echo $this->Form->input('price');
	echo $this->Form->input('size');
	echo $this->Form->input('stock');
	echo $this->Form->end(__('save Plant'));
?>

<script>
// Replace the <textarea id="editor1"> with a CKEditor
// instance, using default configuration.
CKEDITOR.replace( 'editor1' );
</script>
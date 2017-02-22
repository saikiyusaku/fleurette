<!-- File: /app/View/Plants/edit.ctp -->


<?php 
echo $this->Html->script('/ckeditor/ckeditor.js');
?>

<h1>Edit Plant</h1>
<?= $this->Form->create('Plant'); ?>
<?= $this->Form->input('name'); ?>
<legend><?= __('植物の編集'); ?></legend>

<?php
	echo $this->Form->textarea('body', array(
		'name' => "data[Plant][body]",
		'class' => 'ckeditor',
		'cols' => '80',
		'id' => 'editor1',
		'rows' => '10'
		));
	echo $this->Form->input('id', array('type' => 'hidden'));
	echo $this->Form->input('plantimage');
	echo $this->Form->end(__('save Plant'));
?>


<script>
// Replace the <textarea id="editor1"> with a CKEditor
// instance, using default configuration.
CKEDITOR.replace( 'editor1' );
</script>
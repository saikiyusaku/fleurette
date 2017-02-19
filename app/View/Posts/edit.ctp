<!-- File: /app/View/Posts/edit.ctp -->


<?php 
echo $this->Html->script('/ckeditor/ckeditor.js');
?>

<h1>Edit Post</h1>
<?= $this->Form->create('Post'); ?>
<?= $this->Form->input('title'); ?>
<legend><?= __('記事の追加'); ?></legend>

<?php
	echo $this->Form->textarea('body', array(
		'name' => "data[Post][body]",
		'class' => 'ckeditor',
		'cols' => '80',
		'id' => 'editor1',
		'rows' => '10'
		));
	echo $this->Form->input('id', array('type' => 'hidden'));
	echo $this->Form->end(__('save Post'));
?>


<script>
// Replace the <textarea id="editor1"> with a CKEditor
// instance, using default configuration.
CKEDITOR.replace( 'editor1' );
</script>
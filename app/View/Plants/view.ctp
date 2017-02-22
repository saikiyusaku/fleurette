<!-- File: /app/View/Plants/view.ctp -->


<div>
    <div>
        <img src="/fleurette/img/plant/lifestyle_1.jpg">
    </div>
    <div>ここがcontant
        <div>Plant Name</div>
        <div>写真と情報ブロック
            <div>写真</div>
            <div>情報ブロック
                
            </div>
        </div>
    </div>
    <div>content footer(購入ボタン等埋め込み)</div>
</div>










<?php 

echo $this->Html->css('blog_view');

?>

<div class="blog_view_all">

	<h1><?php echo h($plant['Plant']['name']); ?></h1>

	<p><?php echo ($plant['Plant']['body']); ?></p>

	<p><?php echo $this->Html->link('Edit Plant', array('controller' => 'plants', 'action' => 'edit', $plant['Plant']['id'])); ?>
	</p>
	<p>
	<?php echo $this->Form->postLink('Delete',array('action' => 'delete', $plant['Plant']['id']),array('confirm' => 'Are you sure?'));?>
	</p>

</div>
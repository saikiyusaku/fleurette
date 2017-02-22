<?php 

echo $this->Html->css('blog_bu');

?>

<div class="blog_all">

<div class="blog_list">
    <ul class="blog_list_block">
        <?php foreach ($flowers as $flower): ?>
            <a href="flowers/view/<?= $flower['Flower']['id'] ?>">
            <li class="blog_list_block_img">
                    <img src="/fleurette/img/flower/<?= $flower['Flower']['flowerimage']; ?>">
                <div class="mask">
                    <div class="caption">
                    <?php echo $flower['Flower']['name']; ?>
                    </div>
                </div>
            </li>
            </a>
        <?php endforeach; ?>
    </ul>
</div>

<p><?php echo $this->Html->link('Add Flower', array('controller' => 'flowers', 'action' => 'add')); ?>
</p>

</div>
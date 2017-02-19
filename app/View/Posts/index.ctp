<?php 

echo $this->Html->css('blog_bu');

?>

<div class="blog_all">

<div class="blog_list">
    <ul class="blog_list_block">
        <?php foreach ($posts as $post): ?>
            <a href="posts/view/<?= $post['Post']['id'] ?>">
            <li class="blog_list_block_img">
                    <img src="/fleurette/img/<?= $post['Post']['imagename']; ?>">
                <div class="mask">
                    <div class="caption">
                    <?php echo $post['Post']['title']; ?>
                    </div>
                </div>
            </li>
            </a>
        <?php endforeach; ?>
    </ul>
</div>

<p><?php echo $this->Html->link('Add Post', array('controller' => 'posts', 'action' => 'add')); ?>
</p>

</div>
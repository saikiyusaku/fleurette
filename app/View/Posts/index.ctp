<?php 

echo $this->Html->css('blog_bu');

?>

<h1>Blog</h1>
<p><?php echo $this->Html->link('Add Post', array('controller' => 'posts', 'action' => 'add')); ?></p>

<div class="blog_list">
    <ul class="blog_list_block">
        <?php foreach ($posts as $post): ?>
            <li class="blog_list_block_img">
                <?php echo $this->Html->image($post['Post']['imagename'], array(
                    "alt" => "load error",
                    'url' => array('controller' => 'posts', 'action' => 'view', $post['Post']['id'])
                    )); ?>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
<?php 

// echo $this->Html->css('blog_bu');
echo $this->Html->css('post_index');

?>

<div class="blog_all">

<div class="blog_list">
    <ul class="blog_list_block">
        <?php foreach ($posts as $post): ?>
            <a href="posts/view/<?= $post['Post']['id'] ?>">
            <li class="blog_list_block_img">
                    <img src="/fleurette/img/post/<?= $post['Post']['imagename']; ?>">
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

<?php if (!empty($authUser)) : ?>
    <?= 'adminUserでログイン中' ?>
<?php endif; ?>

<p><?php echo $this->Html->link('Add Post', array('controller' => 'posts', 'action' => 'add')); ?>
</p>

<div>
    <ul class="pagination">
        <?php echo $this->Paginator->prev(__('prev'), array('tag' => 'li'), null, array('tag' => 'li', 'class' => 'disabled', 'disabledTag' => 'a')); ?>
        <?php echo $this->Paginator->numbers(array('separator' => '', 'currentTag' => 'a', 'currentClass' => 'active', 'tag' => 'li', 'first' => 1, 'ellipsis' => '<li class="disabled"><a>...</a></li>')); ?>
        <?php echo $this->Paginator->next(__('next'), array('tag' => 'li', 'currentClass' => 'disabled'), null, array('tag' => 'li', 'class' => 'disabled', 'disabledTag' => 'a')); ?>
    </ul>
</div>

</div>
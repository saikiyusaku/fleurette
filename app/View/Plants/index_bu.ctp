<div class="blog_all">

    <div class="blog_list">
        <ul class="blog_list_block">

                <?php foreach ($plants as $plant): ?>
                    <a href="plants/view/<?= $plant['Plant']['id'] ?>">
                        <li class="blog_list_block_img">
                            <img src="/fleurette/img/plant/<?= $plant['Plant']['plantimage']; ?>">
                            <div class="mask">
                                <div class="caption">
                                    <?php echo $plant['Plant']['name']; ?>
                                </div>
                            </div>
                        </li>
                    </a>
                <?php endforeach; ?>
            
        </ul>
    </div>

<p><?php echo $this->Html->link('植物を追加', array('controller' => 'plants', 'action' => 'add')); ?>
</p>

</div>
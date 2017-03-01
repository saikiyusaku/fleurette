<!-- File: /app/View/Plants/index.ctp -->

<?php 

echo $this->Html->css('plant_index');

?>

<div>全体
    <div class="container plant_contents">
        <div class="top_image">集客画像と文言(レスポンシブ)</div>
        <div class="contents_cover_row">
            <div class="row contents_in_row">
                <div class="col-sm-2 side_bar">
                    <div>
                        <ul>
                            <li><a href="#">2号鉢以下</a></li>
                            <li><a href="#">3号鉢</a></li>
                            <li><a href="#">4号鉢</a></li>
                            <li><a href="#">5号鉢</a></li>
                            <li><a href="#">6号鉢</a></li>
                            <li><a href="#">7号鉢以上</a></li>
                        </ul>
                        <ul>
                            <li><a href="#">500円以下</a></li>
                            <li><a href="#">500円〜1000円</a></li>
                            <li><a href="#">1000円〜2000円</a></li>
                            <li><a href="#">2000円〜3000円</a></li>
                            <li><a href="#">3000円〜4000円</a></li>
                            <li><a href="#">4000円〜5000円</a></li>
                            <li><a href="#">5000円以上</a></li>
                        </ul>
                    </div>   
                </div>
                <div class="col-sm-10 plant_all">
                    <ul class="plant_list_block">
                        <?php foreach ($plants as $plant): ?>
                            <a href="plants/view/<?= $plant['Plant']['id'] ?>">
                                <li class="plant">
                                    <img src="/fleurette/img/plant/<?= $plant['Plant']['plantimage']; ?>"><br>
                                    <p class="plant_name"><?php echo $plant['Plant']['name']; ?></p>
                                    <p class="plant_price"><?php echo $plant['Plant']['price'] . '円'; ?></p>
                                </li>
                            </a>
                        <?php endforeach; ?>
                    </ul>
                    <div class="pagination_div">
                        <ul class="pagination">
                            <?php echo $this->Paginator->prev(__('prev'), array('tag' => 'li'), null, array('tag' => 'li', 'class' => 'disabled', 'disabledTag' => 'a')); ?>
                            <?php echo $this->Paginator->numbers(array('separator' => '', 'currentTag' => 'a', 'currentClass' => 'active', 'tag' => 'li', 'first' => 1, 'ellipsis' => '<li class="disabled"><a>...</a></li>')); ?>
                            <?php echo $this->Paginator->next(__('next'), array('tag' => 'li', 'currentClass' => 'disabled'), null, array('tag' => 'li', 'class' => 'disabled', 'disabledTag' => 'a')); ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div><p><?php echo $this->Html->link('植物を追加', array('controller' => 'plants', 'action' => 'add')); ?></p></div>
        <?php if (!empty($authUser)) : ?>
            <?= 'adminUserでログイン中' ?>
        <?php endif; ?>
    </div>  
</div>
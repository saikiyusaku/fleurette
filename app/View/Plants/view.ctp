<!-- File: /app/View/Plants/view.ctp -->
<?php 

echo $this->Html->css('plant_view');

?>

<div>
    <!-- <div class="resizeimage">
        <img src="/fleurette/img/plant/lifestyle_1.jpg">
    </div> -->
    <!-- <div class="site-box"> -->
    <div class="container">
    <div class="row">
    	<!-- <div class="block_image"> -->
    	<div class="col-sm-5 block_image">
	        <div class="image_size">
	        <img src="/fleurette/img/plant/<?= $plant['Plant']['plantimage']; ?>">
	        </div>
	    </div>
	    <div class="col-sm-7 block_detail">
	    	<h1><?php echo h($plant['Plant']['name']); ?></h1>
	    	<div class="information_block">
	    		<div class="table-responsive">
	    			<table class="table">
	    				<tbody>
	    					<tr>
	    						<td><strong>family : origin</strong></td>
	    						<td><?php echo h($plant['Plant']['kind_and_origin']); ?></td>
	    					</tr>
	    					<tr>
	    						<td><strong>size</strong></td>
	    						<td><?php echo h($plant['Plant']['size']); ?></td>
	    					</tr>
	    					<tr>
	    						<td><strong>在庫</strong></td>
	    						<td><?php echo h($plant['Plant']['stock']); ?></td>
	    					</tr>
	    					<tr>
	    						<td><strong>price</strong></td>
	    						<td><?php echo h($plant['Plant']['price']); ?>円(税込)</td>
	    					</tr>
	    				</tbody>
	    			</table>
	    		</div>
	    	</div>
	    	<div class="btn">購入ページへ</div>
	    </div>
    </div>
    <div class="row lifestyle">
    	<div class="col-sm-12 resizeimage">
    		<img src="/fleurette/img/plant/lifestyle/<?= $plant['Plant']['lifestyle_image']; ?>">
    	</div>
    </div>
    </div>
</div>


<div class="blog_view_all">

	<p><?php echo ($plant['Plant']['body']); ?></p>

	<p><?php echo $this->Html->link('Edit Plant', array('controller' => 'plants', 'action' => 'edit', $plant['Plant']['id'])); ?>
	</p>
	<p>
	<?php echo $this->Form->postLink('Delete',array('action' => 'delete', $plant['Plant']['id']),array('confirm' => 'Are you sure?'));?>
	</p>

</div>

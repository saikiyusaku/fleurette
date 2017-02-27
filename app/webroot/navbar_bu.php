<div id="header">
	<ul>
		<li><?php echo $this->Html->link('TOP', array('controller' => 'pages', 'action' => 'display', 'top')); ?><span>/</span></li>
		<li><?php echo $this->Html->link('UPDATE', array('controller' => 'posts', 'action' => 'index')); ?><span>/</span></li>
		<li><?php echo $this->Html->link('FLOWER', array('controller' => 'flowers', 'action' => 'index')); ?><span>/</span></li>
		<li><?php echo $this->Html->link('PLANT', array('controller' => 'plants', 'action' => 'index')); ?><span>/</span></li>
		<li><?php echo $this->Html->link('ABOUT US', array('controller' => 'pages', 'action' => 'display', 'about_us')); ?></li>
	</ul>

</div>

<div id="header">
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbarEexample">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>

			<div class="collapse navbar-collapse" id="navbarEexample">
				<ul class="nav navbar-nav">
					<li><?php echo $this->Html->link('TOP', array('controller' => 'pages', 'action' => 'display', 'top')); ?></li>
					<li><?php echo $this->Html->link('UPDATE', array('controller' => 'posts', 'action' => 'index')); ?></li>
					<li><?php echo $this->Html->link('FLOWER', array('controller' => 'flowers', 'action' => 'index')); ?></li>
					<li><?php echo $this->Html->link('PLANT', array('controller' => 'plants', 'action' => 'index')); ?></li>
					<li><?php echo $this->Html->link('ABOUT US', array('controller' => 'pages', 'action' => 'display', 'about_us')); ?></li>
				</ul>
			</div>
		</div>
	</nav>
</div>
<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

// 使う変数はここに書く

?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo 'fleurette' ?>:
		<?php echo $this->fetch('title'); ?>
	</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('cover_all');
		// echo $this->Html->css('bootstrap.min');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	<div id="container">
		<div id="header">
			<ul>
				<li><?php echo $this->Html->link('TOP', array('controller' => 'posts', 'action' => 'index')); ?><span>/</span></li>
				<li><?php echo $this->Html->link('FLOWER', array('controller' => 'flowers', 'action' => 'index')); ?><span>/</span></li>
				<li><?php echo $this->Html->link('PLANT', array('controller' => 'plants', 'action' => 'index')); ?></li>
			</ul>
			
		</div>
		<div id="content">

			<?php echo $this->Flash->render(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer">
			<p>
				<?php echo 'Copyright (c) 2017 Copyright All Rights Reserved.'; ?>
			</p>
		</div>
	</div>
<script src="http://code.jquery.com/jquery.js"></script>
<?php echo $this->Html->script('bootstrap.min'); ?>
</body>
</html>

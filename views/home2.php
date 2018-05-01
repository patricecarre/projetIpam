<?php $title = 'home2'; ?>
<?php ob_start(); ?>

					<p> et voici la suite</p>
	
<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>
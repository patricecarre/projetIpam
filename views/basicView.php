<?php $title = 'titre'; ?>
<?php ob_start(); ?>

					<p> code à insérer</p>
	
<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>
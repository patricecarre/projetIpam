<?php $title = 'logged'; ?>
<?php ob_start(); ?>

			<?php 
			echo $_SESSION['login'];
			echo $_SESSION['pwd'];
			echo $_SESSION['username'];
			echo $_SESSION['userforename'];
			echo $_SESSION['userlevel'];
			?>
	
<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>
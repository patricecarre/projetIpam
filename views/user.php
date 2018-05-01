<?php $title = 'logged'; ?>
<?php ob_start(); ?>

			<?php 
			echo $_SESSION['login'];
			echo $_SESSION['pwd'];
			echo $_SESSION['username'];
			echo $_SESSION['userforename'];
			echo $_SESSION['userlevel'];
			?>
	<p> MENU USER </p>
		</br>
		<form method='post' action='?action=disconnect'>
			<button class=button type="submit"> SE DECONNECTER </button>
		</form>
<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>
<?php $title = 'logged'; ?>
<?php ob_start(); ?>

		</br>
		<form method='post' action='?action=disconnect'>
			<button class=button type="submit"> SE DECONNECTER </button>
		</form>
<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>
<?php $title = 'editok'; ?>
<?php ob_start(); ?>

					<p class=txtlabel> modification effectuée </p>
					</br>
					<form method='post' action='?action=home'>
						<button class=button type="submit"> RETOUR MENU </button>
					</form>
	
<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>
<?php $title = 'addok'; ?>
<?php ob_start(); ?>

					<p class=txtlabel> item ajoute</p>
					</br>
					<form method='post' action='?action=home'>
						<button class=button type="submit"> RETOUR MENU ADMIN </button>
					</form>
	
<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>
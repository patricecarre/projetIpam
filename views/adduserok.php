<?php $title = 'adduserkok'; ?>
<?php ob_start(); ?>

					<p class=txtlabel> client ajouté</p>
					</br>
					<form method='post' action='?action=logged'>
						<button class=button type="submit"> RETOUR MENU ADMIN </button>
					</form>
	
<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>
<?php $title = 'viewbasket'; ?>
<?php ob_start(); ?>
					
					</br>					
					<form method='post' action='?action=orderitem'>
					<button class=button type="submit"> AJOUTER UN ARTICLE</button>
					</form>
					</br>
					<form method='post' action='?action=home'>
						<button class=button type="submit"> RETOUR MENU </button>
					</form>
	
	
<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>
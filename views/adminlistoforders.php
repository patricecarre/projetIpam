<?php $title = 'adminlistoforders'; ?>
<?php ob_start(); ?>

					</br>
					<form method='post' action='?action=home'>
						<button class=button type="submit"> RETOUR AU MENU </button>
					</form>
	
<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>
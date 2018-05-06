<?php $title = 'logged'; ?>
<?php ob_start(); ?>
		
		</br>
		<form method='post' action='?action=viewbasket'>
			<button class=button type="submit"> GERER VOTRE PANIER </button>
		</form>
		</br>
		<form method='post' action='?action=listoforders'>
			<button class=button type="submit"> LISTE DES COMMANDES </button>
		</form>
		</br>
		<form method='post' action='?action=disconnect'>
			<button class=button type="submit"> SE DECONNECTER </button>
		</form>
<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>
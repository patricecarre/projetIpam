<?php $title = 'admin'; ?>
<?php ob_start(); ?>

			<?php 
			echo $_SESSION['login'];
			echo $_SESSION['pwd'];
			echo $_SESSION['username'];
			echo $_SESSION['userforename'];
			echo $_SESSION['userlevel'];
			?>
	<p> MENU ADMIN </p>
		<form method='post' action='?action=additem'>
			<button class=button type="submit"> AJOUT ARTICLE </button>
		</form>
		</br>
		<form method='post' action='?action=listToEdit'>
			<button class=button type="submit"> MODIFIER ARTICLE </button>
		</form>
		</br>
		<form method='post' action='?action=listToDelete'>
			<button class=button type="submit"> SUPPRIMER ARTICLE </button>
		</form>
		</br>
		<form method='post' action='?action=listorders'>
			<button class=button type="submit"> LISTE DES COMMANDES </button>
		</form>
		</br>
		<form method='post' action='?action=adduser'>
			<button class=button type="submit"> AJOUT CLIENT </button>
		</form>
		</br>
		<form method='post' action='?action=disconnect'>
			<button class=button type="submit"> SE DECONNECTER </button>
		</form>
<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>
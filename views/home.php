<?php $title = 'home'; ?>
<?php ob_start(); ?>

		<form method='post' action='?action=login'>
		<p>
			<button class=button type="submit"> VOUS IDENTIFIER </button>
		</P>
		</form>
		<form method='post' action='?action=viewshop'>
		<p>
			<button class=button type="submit"> <span id="textbuttons"> CONSULTER LES ARTICLES </span></button>
		</P>
		</form>
<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>
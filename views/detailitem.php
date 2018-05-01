<?php $title = 'detailitem'; ?>
<?php ob_start(); ?>
					
					<?php 
					echo $_SESSION['itemname'];
					echo "</br>";
					echo $_SESSION['itemprice'];
					echo "</br>";
					echo $_SESSION['itemref'];
					?>
					</br>
					<form method='post' action='?action=home'>
						<button class=button type="submit"> RETOUR AU MENU </button>
					</form>

	
<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>
<?php $title = 'detailitem'; ?>
<?php ob_start(); ?>
					
					<?php 
					echo $_SESSION['itemname'];
					echo "</br>";
					echo "<span>prix:".$_SESSION['itemprice']." euros </span>";
					echo "</br>";
					echo "<span>reference fournisseur:".$_SESSION['itemref']."</span>";
					?>
					</br>
					<form method='post' action='?action=home'>
						<button class=button type="submit"> RETOUR AU MENU </button>
					</form>

	
<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>
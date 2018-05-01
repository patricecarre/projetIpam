<?php $title = 'delitem'; ?>
<?php ob_start(); ?>

					</br>
					<p class=txtlabel> confirmez la suppression </p>
					<?php
					echo "<form action='?action=validdelete' class=txtlabel method='post'>";
					echo "<span class=txtlabel>VOUS CONFIRMEZ LA SUPPRESSION DE ".$_SESSION['itemname']." ? </span>";
					echo "</br>";
					echo "<input class=button type='submit' value='OUI LE SUPPRIMER' />";
					echo "</form>";
					?>
					<form method='post' action='?action=home'>
					<button class=button type="submit"> ANNULER </button>
					</form>
<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>
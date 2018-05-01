<?php $title = 'edititem'; ?>
<?php ob_start(); ?>

					</br>
					<p class=txtlabel> modifiez les champs souhaité </p>
					</br>
					<?php
					echo "<form action='?action=validedit' class=txtlabel method='post'>";
					echo "<label for='itemname'>nom item :</label>";
					echo "</br>";
					echo "<input type='text' name='itemname' value='".$_SESSION['itemname']."'/>";
					echo "</br>";
					echo "<label for='itemprice'>prix item :</label>";
					echo "</br>";
					echo "<input type='text' name='itemprice' value='".$_SESSION['itemprice']."'/>";
					echo "</br>";
					echo "<label for='itemref'>ref fournisseur</label>";
					echo "</br>";
					echo "<input type='text' name='itemref' value='".$_SESSION['itemref']."'/>";
					echo "</br>";
					echo "<input class=button type='submit' value='MODIFIER ARTICLE' />";
					echo "</form>";
					?>
					</br>
					<form method='post' action='?action=home'>
					<button class=button type="submit"> ANNULER </button>
					</form>
<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>
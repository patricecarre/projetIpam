<?php $title = 'additem'; ?>
<?php ob_start(); ?>

					</br>
					</br>
					<form action="?action=validadd" class=txtlabel method="post">
							<label for="login">nom item :</br></label>
						    <input type="text" name="itemname"/>
							</br>
							<label for="login">prix item :</br></label>
							<input type="text" name="itemprice" />
							</br>
							<label for="login">ref fournisseur</br></label>
							<input type="text" name="itemref" />
							</br>
							<input class=button type="submit" value="AJOUT ARTICLE" />
					</form>
					</br>
					<form method='post' action='?action=home'>
					<button class=button type="submit"> ANNULER </button>
					</form>
<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>
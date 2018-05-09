<?php $title = 'adduser'; ?>
<?php ob_start(); ?>

					</br>
					</br>
					<form action="?action=validadduser" class=txtlabel method="post">
							<label for="nameuser">nom user :</br></label>
						    <input type="text" name="nameuser"/>
							</br>
							<label for="forenameuser">prenom user :</br></label>
						    <input type="text" name="forenameuser"/>
							</br>
							<label for="loginuser">login user :</br></label>
						    <input type="text" name="loginuser"/>
							</br>
							<label for="passworduser">password user :</br></label>
						    <input type="password" name="passworduser"/>
							</br>
							</br>
							<input class=button type="submit" value="AJOUT CLIENT" />
					</form>
					</br>
					<form method='post' action='?action=home'>
					<button class=button type="submit"> ANNULER </button>
					</form>
<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>
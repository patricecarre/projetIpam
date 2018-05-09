<?php $title = 'login'; ?>
<?php ob_start(); ?>
					</br>
					</br>
					<form action="?action=logon" class=txtlabel method="post">
							<label for="login">entrez votre login :</br></label>
						    <input type="text" name="login"/>
							</br>
							<label for="login">entrez votre mot de passe :</br></label>
							<input type="password" name="pwd" />
							</br>
							</br>
							<input class=button type="submit" value="ME CONNECTER" />
					</form>
					</br>
					
<?php $content = ob_get_clean(); ?>
<?php require('template.php'); ?>
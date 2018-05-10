<?php
		require('models/connectDB.php');
		$passwordcrypted=password_hash($_POST['passworduser'], PASSWORD_DEFAULT);
		$bdd->exec('INSERT INTO users(NAME_USER,FORENAME_USER,LOGIN_USER,PWD_USER) VALUES ("'.$_POST['nameuser'].'","'.$_POST['forenameuser'].'","'.$_POST['loginuser'].'","'.$passwordcrypted.'")');
?>
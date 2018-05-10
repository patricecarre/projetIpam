<?php
		if (checkStringOk(trim($_POST['itemname'])) && checkNumberOk(trim($_POST['itemprice'])) && checkStringOk(trim($_POST['itemref']))) {
		require('models/connectDB.php');
		$bdd->exec('INSERT INTO items(NAME_ITEM,PRICE_ITEM,REF_ITEM) VALUES ("'.$_POST['itemname'].'","'.$_POST['itemprice'].'","'.$_POST['itemref'].'")');
		}
?>
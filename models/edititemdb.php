<?php
		require('models/connectDB.php');
		$bdd->exec('UPDATE items SET NAME_ITEM="'.$_POST['itemname'].'", PRICE_ITEM="'.$_POST['itemprice'].'", REF_ITEM="'.$_POST['itemref'].'" WHERE ID_ITEM="'.$_SESSION['iditem'].'" ');
?>
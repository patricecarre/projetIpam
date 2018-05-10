<?php
		require('models/connectDB.php');
		$itemordered=false;
		$item=$bdd->query('SELECT * FROM ORDERS WHERE ID_ITEM="'.$_SESSION['iditem'].'"');
		while ($results = $item->fetch())
		{
			$itemordered=true;
		}
		$item->closeCursor();
		if (!$itemordered) {
			$bdd->exec('DELETE FROM items WHERE ID_ITEM="'.$_SESSION['iditem'].'"');
			include("views/deleteok.php");
		}
		else include("views/deletenotok.php");
?>
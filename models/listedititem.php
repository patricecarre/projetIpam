<?php
		require('models/connectDB.php');
		$item=$bdd->query('SELECT * FROM ITEMS');
		echo "<span class=txtlabel> Choisissez l'article à modifier</span>";
		while ($results = $item->fetch())
		{
			include("views/listedititem.php");
		}
		$item->closeCursor();
?>
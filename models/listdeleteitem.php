<?php
		require('models/connectDB.php');
		$item=$bdd->query('SELECT * FROM ITEMS');
		echo "<span class=txtlabel> Choisissez l'article à supprimer</span>";
		while ($results = $item->fetch())
		{
			include("views/listdeleteitem.php");
		}
		$item->closeCursor();
?>
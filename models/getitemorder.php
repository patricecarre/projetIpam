<?php
		require('models/connectDB.php');
		$item=$bdd->query('SELECT * FROM ITEMS');
		echo "<span class=txtlabel> Choisissez l'article à commander en précisant la quantité souhaitée</span>";
		echo "</br>";
		while ($results = $item->fetch())
		{
			include("views/getitemorder.php");
		}
		$item->closeCursor();
?>
<?php
		require('models/connectDB.php');
		$item=$bdd->query('SELECT * FROM ITEMS');
		while ($results = $item->fetch())
		{
			include("views/listviewitem.php");
		}
		$item->closeCursor();
?>
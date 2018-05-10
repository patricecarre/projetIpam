<?php
		require('models/connectDB.php');
		$tempcustomer=0;
		$temporder=0;
		$order=$bdd->query('SELECT * FROM ORDERS ORDER BY ID_USER');
		while ($results = $order->fetch())
			{
				getInfoItem($results['ID_ITEM']);
				getInfoUser($results['ID_USER']);
				include("views/getallorder.php");
				$tempcustomer=$_SESSION['idcustomer'];
				$temporder=$results['REF_ORDER'];
				echo "</br>";
			}
		$order->closeCursor();
?>
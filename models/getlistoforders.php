<?php
		require('models/connectDB.php');
		$temporder=0;
		$order=$bdd->query('SELECT * FROM ORDERS WHERE ID_USER="'.$_SESSION['userid'].'" ORDER BY REF_ORDER');
		while ($results = $order->fetch())
			{
				getInfoItem($results['ID_ITEM']);
				include("views/getlistoforders.php");
				$temporder=$results['REF_ORDER'];
			}
		$order->closeCursor();
?>
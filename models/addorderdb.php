<?php
		$nbritem=count($_SESSION['basket']['iditem']);
		require('models/connectDB.php');
		for($i = 0; $i < $nbritem; $i++)
			{
				$bdd->exec('INSERT INTO orders(ID_ITEM,ID_USER,QUANTITY,TOTAL_ORDER) VALUES ("'.$_SESSION['basket']['iditem'][$i].'","'.$_SESSION['userid'].'","'.$_SESSION['basket']['quantity'][$i].'","'.$_SESSION['totalorder'].'")');
			}
		unset ($_SESSION['basket']);
?>
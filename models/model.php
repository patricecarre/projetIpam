<?php
		
	function getInfoItem($iditem){
		require('models/connectDB.php');
		$_SESSION['iditem']=$iditem;
		$item = $bdd->query('SELECT * FROM items WHERE ID_ITEM="'.$_SESSION['iditem'].'"');
				while ($results = $item->fetch())
		{
			$_SESSION['itemname']=$results['NAME_ITEM'];
			$_SESSION['itemprice']=$results['PRICE_ITEM'];
			$_SESSION['itemref']=$results['REF_ITEM'];
		}
		$item->closeCursor();
	}
	
	function getInfoUser($iduser){
		require('models/connectDB.php');
		$_SESSION['idcustomer']=$iduser;
		$item = $bdd->query('SELECT * FROM users WHERE ID_USER="'.$_SESSION['idcustomer'].'"');
				while ($results = $item->fetch())
		{
			$_SESSION['namecustomer']=$results['NAME_USER'];
			$_SESSION['forenamecustomer']=$results['FORENAME_USER'];
		}
		$item->closeCursor();
	}
	

?>
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
	
	function checkStringOk($stringtotest) {
		$pattern = "#^[a-z0-9éèçàA-Z\s]+$#i";
		if (preg_match($pattern , $stringtotest)) return true;
		else {
			include("views/errorstring.php");
			return false;
		}
	}
	
	function checkNumberOk($nbchecked){
		if (is_numeric($nbchecked) && ($nbchecked>0)) return true;
		else {
			include("views/notanumber.php");
			return false;
		}
	}	
	
	function checkQuantityOk($qtchecked){
		if (checkNumberOk($qtchecked)){
		if ((int)$qtchecked == $qtchecked) return true;
		else {
			include("views/qtnotinteger.php");
			return false;
			}
		}
	}
?>
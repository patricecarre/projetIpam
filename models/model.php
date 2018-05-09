<?php
		
	function logonUser(){
		$_SESSION['login']=$_POST['login'];
		$_SESSION['pwd']=$_POST['pwd'];
		$_SESSION['username']='null';
		$_SESSION['userforename']='null';
		$_SESSION['userlevel']='null';
		require('models/connectDB.php');
		$user = $bdd->query('SELECT * FROM users WHERE LOGIN_USER="'.$_SESSION['login'].'"');
		
		while ($results = $user->fetch())
		{
			if (password_verify($_SESSION['pwd'], $results['PWD_USER'])){
			$_SESSION['userid']=$results['ID_USER'];
			$_SESSION['username']=$results['NAME_USER'];
			$_SESSION['userforename']=$results['FORENAME_USER'];
			$_SESSION['userlevel']=$results['LEVEL_USER'];
			include ("js/welcome.php");		
			}
		}
		$user->closeCursor();
	}
	
	function additemdb(){
		require('models/connectDB.php');
		$bdd->exec('INSERT INTO items(NAME_ITEM,PRICE_ITEM,REF_ITEM) VALUES ("'.$_POST['itemname'].'","'.$_POST['itemprice'].'","'.$_POST['itemref'].'")');
	}

	function adduserdb(){
		require('models/connectDB.php');
		$passwordcrypted=password_hash($_POST['passworduser'], PASSWORD_DEFAULT);
		$bdd->exec('INSERT INTO users(NAME_USER,FORENAME_USER,LOGIN_USER,PWD_USER) VALUES ("'.$_POST['nameuser'].'","'.$_POST['forenameuser'].'","'.$_POST['loginuser'].'","'.$passwordcrypted.'")');
	}
	
	function edititemdb(){
		require('models/connectDB.php');
		$bdd->exec('UPDATE items SET NAME_ITEM="'.$_POST['itemname'].'", PRICE_ITEM="'.$_POST['itemprice'].'", REF_ITEM="'.$_POST['itemref'].'" WHERE ID_ITEM="'.$_SESSION['iditem'].'" ');
	}
	
	function deleteitemdb(){
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
			echo "item supprimé";
		}
		else echo "item en commande vous ne pouvez pas le supprimer";
	}
	
	function listEditItem(){
		require('models/connectDB.php');
		$item=$bdd->query('SELECT * FROM ITEMS');
		echo "<span class=txtlabel> Choisissez l'article à modifier</span>";
		while ($results = $item->fetch())
		{
			echo "<form method='post' action='?action=edititem&amp;iditem=".$results['ID_ITEM']."'>";
			echo "<button type='submit'>".$results['NAME_ITEM']."</button>";
			echo "</form>";
		}
		$item->closeCursor();
	}

	function listDeleteItem(){
		require('models/connectDB.php');
		$item=$bdd->query('SELECT * FROM ITEMS');
		echo "<span class=txtlabel> Choisissez l'article à supprimer</span>";
		while ($results = $item->fetch())
		{
			echo "<form method='post' action='?action=delitem&amp;iditem=".$results['ID_ITEM']."'>";
			echo "<button type='submit'>".$results['NAME_ITEM']."</button>";
			echo "</form>";
		}
		$item->closeCursor();
	}
	
	function listViewItem(){
		require('models/connectDB.php');
		$item=$bdd->query('SELECT * FROM ITEMS');
		echo "<span class=txtlabel> Choisissez l'article à consulter</span>";
		while ($results = $item->fetch())
		{
			echo "<form method='post' action='?action=detailitem&amp;iditem=".$results['ID_ITEM']."'>";
			echo "<button type='submit'>".$results['NAME_ITEM']."</button>";
			echo "</form>";
		}
		$item->closeCursor();
	}
	
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
	
	function getitemorder(){
		require('models/connectDB.php');
		$item=$bdd->query('SELECT * FROM ITEMS');
		echo "<span class=txtlabel> Choisissez l'article à commander en précisant la quantité souhaitée</span>";
		echo "</br>";
		while ($results = $item->fetch())
		{
			echo $results['NAME_ITEM'];
			echo "<form method='post' action='?action=additembasket&amp;iditem=".$results['ID_ITEM']."'>";
			echo "<label for='quantity'>quantité : </label>";
			echo "<input type='text' class=inputqt name='quantity'/>";
			echo "<button type='submit'>COMMANDER</button>";
			echo "</form>";
		}
		$item->closeCursor();
		}
		
	function addorderdb(){
		$nbritem=count($_SESSION['basket']['iditem']);
		require('models/connectDB.php');
		for($i = 0; $i < $nbritem; $i++)
			{
				$bdd->exec('INSERT INTO orders(ID_ITEM,ID_USER,QUANTITY,TOTAL_ORDER) VALUES ("'.$_SESSION['basket']['iditem'][$i].'","'.$_SESSION['userid'].'","'.$_SESSION['basket']['quantity'][$i].'","'.$_SESSION['totalorder'].'")');
			}
		}
		
		
	function getallorders (){
		require('models/connectDB.php');
		$tempcustomer=0;
		$temporder=0;
		$order=$bdd->query('SELECT * FROM ORDERS ORDER BY ID_USER');
		while ($results = $order->fetch())
			{
				getInfoItem($results['ID_ITEM']);
				getInfoUser($results['ID_USER']);
				if ($_SESSION['idcustomer'] != $tempcustomer) {
					echo "</br>";
					echo "CLIENT n°:".$_SESSION['idcustomer']." Nom: ".$_SESSION['namecustomer']." Prenom: ".$_SESSION['forenamecustomer']."";
					echo "</br>";
				}
				if ($results['REF_ORDER'] != $temporder) { 
				echo "COMMANDE n°: ".$results['REF_ORDER']." total: ".$results['TOTAL_ORDER']." euros";
				echo "</br>";
				}
				echo " - ".$_SESSION['itemname']." prix: ".$_SESSION['itemprice']." x".$results['QUANTITY']." ";
				$tempcustomer=$_SESSION['idcustomer'];
				$temporder=$results['REF_ORDER'];
				echo "</br>";
			}
		$order->closeCursor();
		}
		
		
	
	function getlistoforders(){
		require('models/connectDB.php');
		$temporder=0;
		$order=$bdd->query('SELECT * FROM ORDERS WHERE ID_USER="'.$_SESSION['userid'].'" ORDER BY REF_ORDER');
		while ($results = $order->fetch())
			{
				getInfoItem($results['ID_ITEM']);
				if ($results['REF_ORDER'] != $temporder) { 
				echo "</br>";
				echo "COMMANDE n°: ".$results['REF_ORDER']." total: ".$results['TOTAL_ORDER']." euros";
				echo "</br>";
				}
				echo " - ".$_SESSION['itemname']." prix: ".$_SESSION['itemprice']." x".$results['QUANTITY']." ";
				echo "</br>";
				$temporder=$results['REF_ORDER'];
			}
		$order->closeCursor();
		}
		
?>
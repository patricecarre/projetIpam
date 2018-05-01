<?php
		
	function logonUser(){
		$_SESSION['login']=$_POST['login'];
		$_SESSION['pwd']=$_POST['pwd'];
		$_SESSION['username']='null';
		$_SESSION['userforename']='null';
		$_SESSION['userlevel']='null';
		require('models/connectDB.php');
		$user = $bdd->query('SELECT * FROM users WHERE LOGIN_USER="'.$_SESSION['login'].'" AND PWD_USER="'.$_SESSION['pwd'].'"');
		
		while ($results = $user->fetch())
		{
			$_SESSION['username']=$results['NAME_USER'];
			$_SESSION['userforename']=$results['FORENAME_USER'];
			$_SESSION['userlevel']=$results['LEVEL_USER'];
		}
		$user->closeCursor();
	}
	
	function additemdb(){
		require('models/connectDB.php');
		$bdd->exec('INSERT INTO items(NAME_ITEM,PRICE_ITEM,REF_ITEM) VALUES ("'.$_POST['itemname'].'","'.$_POST['itemprice'].'","'.$_POST['itemref'].'")');
	}

	function adduserdb(){
		require('models/connectDB.php');
		$bdd->exec('INSERT INTO users(NAME_USER,FORENAME_USER,LOGIN_USER,PWD_USER) VALUES ("'.$_POST['nameuser'].'","'.$_POST['forenameuser'].'","'.$_POST['loginuser'].'","'.$_POST['passworduser'].'")');
	}
	
	function edititemdb(){
		require('models/connectDB.php');
		$bdd->exec('UPDATE items SET NAME_ITEM="'.$_POST['itemname'].'", PRICE_ITEM="'.$_POST['itemprice'].'", REF_ITEM="'.$_POST['itemref'].'" WHERE ID_ITEM="'.$_SESSION['iditem'].'" ');
	}
	
	function deleteitemdb(){
		require('models/connectDB.php');
		$bdd->exec('DELETE FROM items WHERE ID_ITEM="'.$_SESSION['iditem'].'"');
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
	
?>
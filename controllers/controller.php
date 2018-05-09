<?php

require('models/model.php');

function viewshop()
{
	listViewItem();
	include ("views/viewshop.php");
}

function login()
{
	include ("views/login.php");
}

function logon(){
	logonUser();
	home();
}

function home(){
	if (isset($_SESSION['userlevel'])) {
						if ($_SESSION['userlevel'] == 'admin') {
							echo "bienvenue ".$_SESSION['userforename']." dans le menu administrateur ";
							include ("views/admin.php");
							}
						elseif ($_SESSION['userlevel'] == 'user') {
							echo "bienvenue ".$_SESSION['userforename']." dans le menu client";
							if (!isset($_SESSION['basket'])) createBasket();
							include ("views/user.php");
							}
						else {
							echo "vous n'êtes pas authentifié";
							include ("views/home.php");
							}
						}
	else include ("views/home.php");
}

function listoforders(){
						if ($_SESSION['userlevel'] == 'admin') {
							getallorders();
							include ("views/adminlistoforders.php");
							}
						elseif ($_SESSION['userlevel'] == 'user') {
							getlistoforders();
							include ("views/userlistoforders.php");
							}
						else {
							echo "pas de commande enregistrée";
							include ("views/home.php");
							}
	}



function createBasket(){
	$_SESSION['basket']=array();
	$_SESSION['basket']['iditem']=array();
	$_SESSION['basket']['quantity']=array();
	}
	
function viewbasket(){
	getorder();
	include ("views/viewbasket.php");
}

function getorder(){
	$nbritem=count($_SESSION['basket']['iditem']);
	$_SESSION['totalorder']=0;
	echo "CONTENU ACTUEL DE VOTRE PANIER:";
	echo "</br>";
	echo "</br>";
	if ($nbritem>0) {
		   for($i = 0; $i < $nbritem; $i++)
			{
			getInfoItem($_SESSION['basket']['iditem'][$i]);
			echo "article: ".$_SESSION['itemname']." - prix unitaire:".$_SESSION['itemprice']." euros ";
			echo "<form method='post' action='?action=editquantitybasket&amp;iditem=".$_SESSION['iditem']."'>";
			echo "<label for='quantity'>quantité : </label>";
			echo "<input type='text' name='quantity' class=inputqt value='".$_SESSION['basket']['quantity'][$i]."'>";
			echo "<button type='submit'>modifier</button>";
			echo "</form>";
			echo "<form method='post' action='?action=delitembasket&amp;iditem=".$_SESSION['iditem']."'>";
			echo "<button type='submit'>supprimer article</button>";
			echo "</form>";
			$_SESSION['totalorder'] += $_SESSION['basket']['quantity'][$i] * $_SESSION['itemprice'];
			}
			echo "montant total commande: ".$_SESSION['totalorder']." euros";
			echo "</br>";
			echo "</br>";
			echo "<form method='post' action='?action=validorder'>";
			echo "<button class='button' type='submit'>VALIDER LE PANIER</button>";
			echo "</form>";			
	}
	else echo "VOTRE PANIER EST VIDE";
}


function disconnect()
{	
	session_destroy();
	include ("views/home.php");
}

function detailitem()
{	
	getInfoItem($_GET['iditem']);
	include ("views/detailitem.php");
}

function edititem()
{	
	getInfoItem($_GET['iditem']);
	include ("views/edititem.php");
}

function delitem()
{	
	getInfoItem($_GET['iditem']);
	include ("views/delitem.php");
}

function additem()
{
	include ("views/additem.php");
}

function adduser()
{
	include ("views/adduser.php");
}

function listToEdit()
{
	listEditItem();
	include ("views/viewshop.php");
}

function listToDelete()
{
	listDeleteItem();
	include ("views/viewshop.php");
}

function validadd()
{	
	additemdb();
	include ("views/addok.php");
}

function validadduser()
{	
	adduserdb();
	include ("views/adduserok.php");
	
}

function validedit()
{	
	edititemdb();
	include ("views/editok.php");
}

function validdelete()
{	
	deleteitemdb();
	include ("views/deleteok.php");
}

function orderitem(){
	getitemorder();
	include ("views/orderitem.php");
}

function additembasket(){
	$nbritem=count($_SESSION['basket']['iditem']);
	$itemexists=false;
	if ($nbritem>0) {
		for($i = 0; $i < $nbritem; $i++)
			{
				if ($_SESSION['basket']['iditem'][$i]==$_GET['iditem']) {
					$_SESSION['basket']['quantity'][$i] += $_POST['quantity'];
					$itemexists=true;
				}
			}
	}
	if(!$itemexists) {
		$_SESSION['basket']['iditem'][]=$_GET['iditem'];
		$_SESSION['basket']['quantity'][]=$_POST['quantity'];
	}
	viewbasket();
}

function delitembasket(){
	$nbritem=count($_SESSION['basket']['iditem']);
	$_SESSION['tempbasket']=array();
	$_SESSION['tempbasket']['iditem']=array();
	$_SESSION['tempbasket']['quantity']=array();
	for($i = 0; $i < $nbritem; $i++){
		if ($_GET['iditem'] != $_SESSION['basket']['iditem'][$i]) {
			$_SESSION['tempbasket']['iditem'][]=$_SESSION['basket']['iditem'][$i];
			$_SESSION['tempbasket']['quantity'][]=$_SESSION['basket']['quantity'][$i];
			}
		}
	
	$_SESSION['basket']= $_SESSION['tempbasket'];
	unset ($_SESSION['tempbasket']);
	viewbasket();
}

function editquantitybasket(){
	$nbritem=count($_SESSION['basket']['iditem']);
	for($i = 0; $i < $nbritem; $i++){
		if ($_SESSION['basket']['iditem'][$i] == $_GET['iditem']) {
			$_SESSION['basket']['quantity'][$i]=$_POST['quantity'];
			}
		}
	viewbasket();
}

function validorder(){
	addorderdb();
	unset ($_SESSION['basket']);
	createBasket();
	home();
}

<?php

require('models/model.php');

function viewshop()
{
	include("models/listviewitem.php");
	include ("views/viewshop.php");
}

function login()
{
	include ("views/login.php");
}

function logon(){
	include("models/logonuser.php");
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
							if (!isset($_SESSION['basket'])) include("models/createbasket.php");
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
							include("models/getallorders.php");
							include ("views/adminlistoforders.php");
							}
						elseif ($_SESSION['userlevel'] == 'user') {
							include("models/getlistoforders.php");
							include ("views/userlistoforders.php");
							}
						else {
							echo "pas de commande enregistrée";
							include ("views/home.php");
							}
	}




	
function viewbasket(){
	include("models/getorder.php");
	include ("views/viewbasket.php");
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
	include("models/listedititem.php");
	include ("views/viewshop.php");
}

function listToDelete()
{
	include("models/listdeleteitem.php");
	include ("views/viewshop.php");
}

function validadd()
{	
	include("models/additemdb.php");
	include ("views/addok.php");
}

function validadduser()
{	
	include("models/adduserdb.php");
	include ("views/adduserok.php");
	
}

function validedit()
{	
	include("models/edititemdb.php");
	include ("views/editok.php");
}

function validdelete()
{	
	include("models/deleteitemdb.php");
	include ("views/deleteok.php");
}

function orderitem(){
	include("models/getitemorder.php");
	include ("views/orderitem.php");
}

function additembasket(){
	include("models/additembasket.php");
	viewbasket();
}

function delitembasket(){
	include("models/delitembasket.php");
	viewbasket();
}

function editquantitybasket(){
	include("models/editquantitybasket.php");
	viewbasket();
}

function validorder(){
	include("models/addorderdb.php");
	include("models/createbasket.php");
	home();
}

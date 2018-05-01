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
							include ("views/admin.php");
							}
						elseif ($_SESSION['userlevel'] == 'user') {
							include ("views/user.php");
							}
						else {
							echo "vous n'êtes pas authentifié";
							include ("views/home.php");
							}
						}
	else include ("views/home.php");
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
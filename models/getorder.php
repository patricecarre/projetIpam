<?php
	$nbritem=count($_SESSION['basket']['iditem']);
	$_SESSION['totalorder']=0;
	include("views/getorder.php");
?>
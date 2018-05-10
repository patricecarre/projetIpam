<?php

	if (checkQuantityOk($_POST['quantity'])){
	$nbritem=count($_SESSION['basket']['iditem']);
	for($i = 0; $i < $nbritem; $i++){
		if ($_SESSION['basket']['iditem'][$i] == $_GET['iditem']) {
			$_SESSION['basket']['quantity'][$i]=$_POST['quantity'];
			}
		}
	}
?>
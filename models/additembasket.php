<?php
	if (checkQuantityOk($_POST['quantity'])){
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
	}
?>
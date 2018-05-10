<?php
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
?>
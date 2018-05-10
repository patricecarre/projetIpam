<?php
		
		
		if (checkStringOk(trim($_POST['login'])) && checkStringOk(trim($_POST['pwd'])))
		{
		$_SESSION['login']=$_POST['login'];
		$_SESSION['pwd']=$_POST['pwd'];
		$_SESSION['username']='null';
		$_SESSION['userforename']='null';
		$_SESSION['userlevel']='null';
		require('models/connectDB.php');
		$user = $bdd->query('SELECT * FROM users WHERE LOGIN_USER="'.$_SESSION['login'].'"');
		$userunknown=true;
		while ($results = $user->fetch())
			{
			$userunknown=false;
			if (password_verify($_SESSION['pwd'], $results['PWD_USER'])){
			$_SESSION['userid']=$results['ID_USER'];
			$_SESSION['username']=$results['NAME_USER'];
			$_SESSION['userforename']=$results['FORENAME_USER'];
			$_SESSION['userlevel']=$results['LEVEL_USER'];
			include ("views/welcome.php");		
				}
			else include("views/badpassword.php");
			}	
		$user->closeCursor();
		}
		if ($userunknown) include ("views/baduser.php");
?>
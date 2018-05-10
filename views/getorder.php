<?php
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
			echo "<button class='button' type='submit'>PASSER COMMANDE</button>";
			echo "</form>";			
	}
	else echo "VOTRE PANIER EST VIDE";
?>
<?php
				if ($_SESSION['idcustomer'] != $tempcustomer) {
					echo "</br>";
					echo "CLIENT n°:".$_SESSION['idcustomer']." Nom: ".$_SESSION['namecustomer']." Prenom: ".$_SESSION['forenamecustomer']."";
					echo "</br>";
				}
				if ($results['REF_ORDER'] != $temporder) { 
				echo "COMMANDE n°: ".$results['REF_ORDER']." total: ".$results['TOTAL_ORDER']." euros";
				echo "</br>";
				}
				echo " - ".$_SESSION['itemname']." prix: ".$_SESSION['itemprice']." x".$results['QUANTITY']." ";
?>
<?php
				if ($results['REF_ORDER'] != $temporder) { 
				echo "</br>";
				echo "COMMANDE n°: ".$results['REF_ORDER']." total: ".$results['TOTAL_ORDER']." euros";
				echo "</br>";
				}
				echo " - ".$_SESSION['itemname']." prix: ".$_SESSION['itemprice']." x".$results['QUANTITY']." ";
				echo "</br>";
?>
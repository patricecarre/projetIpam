<?php
			echo $results['NAME_ITEM'];
			echo "<form method='post' action='?action=additembasket&amp;iditem=".$results['ID_ITEM']."'>";
			echo "<label for='quantity'>quantité : </label>";
			echo "<input type='text' class=inputqt name='quantity'/>";
			echo "<button type='submit'>COMMANDER</button>";
			echo "</form>";
?>
	
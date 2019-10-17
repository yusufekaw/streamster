<?php

include "soap.php";

?>

GBPJPY
<table border="1">
		<tr>
			<td>Open</td>
			<td>Last</td>
			<td>High</td>
			<td>Low</td>
			<td>Change</td>
			<td>Time</td>
		</tr>
		<tr>
			<td>
				<?php echo $GBPJPY->Open; ?>
			</td>
			<td>
				<?php 
					if($GBPJPY->Last>$GBPJPY->Open){
						echo "<font color='green'>".$GBPJPY->Last."</font>";
					}
					else if($GBPJPY->Last<$GBPJPY->Open){
						echo "<font color='red'>".$GBPJPY->Last."</font>";
					}
					else{
						echo $GBPJPY->Last;
					}
						 
				?>
			</td>
			<td>
				<?php echo "<font color='green'>".$GBPJPY->High."</font>"; ?>
			</td>
			<td>
				<?php echo "<font color='red'>".$GBPJPY->Low."</font>"; ?>
			</td>
			<td>
				<?php 
					if($GBPJPY->Change>0){
						echo "<font color='green'>".$GBPJPY->Change."</font>";
					}
					else if($GBPJPY->Change<0){
						echo "<font color='red'>".$GBPJPY->Change."</font>";
					}
					else{
						echo $GBPJPY->Change;
					}
						 
				?>
			</td>
			<td>
				<?php echo $GBPJPY->Time; ?>
			</td>
		</tr>
	</table>



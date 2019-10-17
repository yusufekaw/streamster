<?php

date_default_timezone_set("Asia/Jakarta"); 

$api = new SoapClient ("http://127.0.0.1:8018/service.wsdl",
    array('features' => SOAP_SINGLE_ELEMENT_ARRAYS));

$GBPJPY = $api -> GetQuote("GBP/JPY");

?>

<!DOCTYPE html>
<html>
<meta http-equiv="refresh" content="1">
<head>
	<title>Streamster API</title>
</head>
<body>

	<table>
		<tr>
			<td>Open</td>
			<td>Last</td>
			<td>High</td>
			<td>Low</td>
			<td>Low</td>
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
<br>
	<?php
	echo Date('His'); 
	if(Date('His')=='070030' OR Date('His')=='070035'){
		echo "hello";
		$api -> SendOrder(array(
    		"Instrument" => "GBP/JPY",
    		"Side" => "BUY",
    		"Desk" => "Virtual Forex",
    		"Quantity" => 512,
    		"ExitTarget" => $GBPJPY->Open+0.2,
    		"Text" => "API"
		));

		$api -> SendOrder(array(
    		"Instrument" => "GBP/JPY",
    		"Side" => "SELL",
    		"Desk" => "Virtual Forex",
    		"Quantity" => 512,
    		"ExitTarget" => $GBPJPY->Open-0.2,
    		"Text" => "API"
		));
	}

?>



</body>
</html>




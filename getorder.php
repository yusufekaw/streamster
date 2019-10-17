<?php
date_default_timezone_set("Asia/Jakarta"); 
include "soap.php";
	echo Date('H:i:s')."<br>";
    $date = Date("Y/m/d h:i:s");
	if(Date('His')=='070030'){
		echo "hello";
		$api -> SendOrder(array(
    		"Instrument" => "GBP/JPY",
    		"Side" => "BUY",
    		"Desk" => "Live Forex",
    		"Quantity" => 512,
    		"ExitTarget" => $GBPJPY->Open+0.2,
    		"Text" => "API ".$date
		));

        $api -> SendOrder(array(
    		"Instrument" => "GBP/JPY",
    		"Side" => "SELL",
    		"Desk" => "Live Forex",
    		"Quantity" => 512,
    		"ExitTarget" => $GBPJPY->Open-0.2,
    		"Text" => "API ".$date
		));
	}

?>
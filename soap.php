<?php 

$api = new SoapClient ("http://127.0.0.1:8018/service.wsdl",
    array('features' => SOAP_SINGLE_ELEMENT_ARRAYS));

$GBPJPY = $api -> GetQuote("GBP/JPY");

?>
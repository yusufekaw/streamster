<?php
date_default_timezone_set("Asia/Jakarta");

include "connection.php";
include "soap.php";
$no=Date('Ymdhis');

$open=$GBPJPY->Open;
$high=$GBPJPY->High;
$low=$GBPJPY->Low;

mysqli_query($koneksi,"INSERT INTO gj_history VALUES (99,NOW(),".$open.",".$high.",".$low.")");
?>
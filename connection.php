<?php

$koneksi = mysqli_connect("localhost","root","","forex_history") or mysql_error();

if($koneksi){
	echo "nyambung";
}
else{
	echo "gak nyambung";
}

?>
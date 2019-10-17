<?php
date_default_timezone_set("Asia/Jakarta");
    $no=Date('Ymdhis'); 
	if(Date('His')=='064530'){
        echo "success input";
		$open=$GBPJPY->Open;
        $high=$GBPJPY->High;
        $low=$GBPJPY->Low;

        mysqli_query($koneksi,"INSERT INTO gj_history VALUES (99,NOW(),".$open.",".$high.",".$low.")");
    }
?>
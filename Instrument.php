<?php
date_default_timezone_set("Asia/Jakarta"); 
?>
<!DOCTYPE html>
<html>
<head>
	<title>Instrument</title>
	<head>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
	</head>
</head>
<?php echo Date('ymd')-1;?>
<body>
<div id="responsecontainer"></div>
<div id="order"></div>
</body>
	<script>
		 $(document).ready(function() {
 	 	$("#responsecontainer").load("getquote.php");
   		var refreshId = setInterval(function() {
      	$("#responsecontainer").load("getquote.php");
   		}, 1000);
   		$.ajaxSetup({ cache: false });
		});
	</script>
	<script>
		 $(document).ready(function() {
 	 	$("#order").load("getorder.php");
   		var refreshId = setInterval(function() {
      	$("#order").load("getorder.php");
   		}, 1000);
   		$.ajaxSetup({ cache: false });
		});
	</script>
 
</html>
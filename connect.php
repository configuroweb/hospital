<?php
	$con = mysqli_connect("localhost","root","");
	date_default_timezone_set ("America/Bogota");
	mysqli_select_db($con,"hospital");
	if(!$con){
			die("Failed to connect");
			}

?>

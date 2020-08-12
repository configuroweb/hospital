<?php
	$con = mysqli_connect("localhost","root","");
	date_default_timezone_set ("America/Bogota");
	mysqli_select_db($con,"hospital");
	if(!$con){
			die("Failed to connect");
			}

?>
<?php
define ("HOSTNAME","localhost");
define ("USERNAME","root");
define ("PASSWORD","");
define ("DATABASE","hospital");

$dbhandle=new mysqli(HOSTNAME,USERNAME,PASSWORD,DATABASE) or die("Incapaz de conectar a la base de datos");

if($dbhandle->connect_error){
	die("conexión fallida".$dbhandle->connect_error);
}
?>
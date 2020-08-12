<?php include 'auth.php'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap-theme.min.css">
<link rel="stylesheet" href="css/print.css" media="print">

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<title>Hospital ConfiguroWeb</title>
<script type="text/javascript" src="js/rightde.js"></script>
<style type="text/css">
</style>
</head>
<body>

<?php
require('connect.php');
$id=$_REQUEST['id'];
$ide=$_REQUEST['id'];
$query = "SELECT * FROM `admit_invo_db` WHERE `Invo_no`='$id'";
$result = mysqli_query($con, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);

$querye = "SELECT `pet_em` FROM `patient` WHERE `pet_id`='$ide'";
$resulte = mysqli_query($con, $querye) or die ( mysqli_error());
$rowe = mysqli_fetch_assoc($resulte);
?>
<div class="container">
<div class="row">
<div class="col-md-12 col-xs-12 ">
<h1 class="text-center ">Hospital ConfiguroWeb<br /><small style="font-size:20px">Factura de Paciente</small></h1></div>
</div>
</div>

<center>
<form class="" action="" method="post" id="upform">
  <input type="hidden" name="new" value="1" />
  <table height="500" width="500">
    <tr>
    </tr>
    <tr>
      <td width="200"><strong>No de Factura : <?php echo $row["Invo_no"]; ?></strong></td>
      <td width="250"><strong>Fecha : <?php echo $row["invo_date"]; ?></strong></td>
    </tr>
    <tr>

      <td width="200"><strong>No reg de Paciente : </strong></td>
      <td width="250"><strong><?php echo $row["pet_no"]; ?></strong></td>
    </tr>
    <tr>
      <td width="200"><strong>Nombre completo Paciente : </strong></td>
      <td width="250"><strong><?php echo $row["pet_name"]; ?></strong></td>
    </tr>
    <tr>
      <td width="200"><strong>Edad de Paciente : </strong></td>
      <td width="250"><strong><?php echo $row["p_age"]; ?></strong></td>
    </tr>
    <tr>
      <td width="200"><strong>Cobros por medicinas : </strong></td>
      <td width="250"><strong>COP <?php echo $row["price_of_med"]; ?></strong></td>
    </tr>
    <tr>
      <td width="200"><strong>Precio por doctores : </strong></td>
      <td width="250"><strong>COP <?php echo $row["price_of_doc"]; ?></strong></td>
    </tr>


      <td ><strong>Cuenta de días internado</strong></td>
      <td ><strong><?php echo $row["day_count"]; ?></strong></td>

    </tr>
    <tr>
      <td ><strong>Precio por cuarto : </strong></td>
      <td ><strong>COP <?php echo $row["price_of_doc"]; ?></strong></td>
    </tr>
    <tr>
      <td ><strong>Cobros de Servicio : </strong></td>
      <td ><strong>COP <?php echo $row["ser_char"]; ?></strong></td>
    </tr>
    <tr>
      <td ><strong>Precio total : </strong></td>
      <td ><strong>COP <?php echo $row["totl"]; ?></strong></td>
    </tr>
  </table>
<br>

<button   class="hidden-print" name=submit type="button" onclick="formPrint()">Imprimir</button>
</center>
  </ul>

  </div>
</form>



</div>
</div>
</div>
</div>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script>
function formPrint()
  {
    window.print();
  }
</script>
</body>

</html>

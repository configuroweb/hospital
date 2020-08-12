<?php include 'connect.php';?>
<?php include 'admitdb.php';?>
<?php include 'lvlauth.php'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>


<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap-theme.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<title>Hospital ConfiguroWeb</title>
<link rel="stylesheet" type="text/css" href="css/staff.css"/>
<script type="text/javascript" src="js/rightde.js"></script>
<link rel="stylesheet" href="css/hide.css">
</head>
<body>

<header class="nav-down ">
<?php include_once('navbar.php');?>
</header><br>
<div class="container">
<div class="row">
<div class="col-md-12 col-xs-12">

<h1 class="text-center ">Hospital ConfiguroWeb<br /><small style="font-size:20px">Sistema Administrativo de Hospitales</small></h1></div>

</div>
</div>
<br />

<div class="container">
<div class="row">
<div class="col-md-12 col-xs-12">

<div class="page-header">
<h3 style="font-family:calibri;" class="text-center">Formulario de registro de admisión de pacientes</h3></div>
<br />
<div class="container">
<div class="row">
<div class="col-md-4 col-md-push-4 col-xs-12 alert alert-success text-center">Pacientes registrados en este foro o admitidos en el Hospital.</div>
</div>
</div>

<div class="container">
<div class="row ">
<div class="col-md-4 col-md-offset-4 col-xs-12">
<div class="panel panel-default">
<div class="panel-heading">
<h3 class="panel-title text-center">Formulario de registro de admisión de pacientes</h3>
</div>
<center>
<div class="panel-body">
<small class="text-danger">Todos los campos son requeridos</small>
<div>

<?php
$id=$_REQUEST['id'];
$query = "SELECT * from `patient` where pet_id='".$id."'";
$result = mysqli_query($con, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);
?>

  <form method="post" action="">
  <div align="left">  ID de paciente :</div>
    <input disabled  value="<?php echo $row["pet_id"]; ?>" style="margin:5px;  border-radius:0px" type="text" class="form-control" placeholder="ID de paciente" >
    <input  name="adm_pid" value="<?php echo $row["pet_id"]; ?>" style="margin:5px;  border-radius:0px" type="hidden" class="form-control" placeholder="ID de paciente" >
<div align="left">  Nombre de Paciente :</div>
    <input disabled    value="<?php echo $row["pet_fn"]; ?> <?php echo $row["pet_sn"]; ?>" style="margin:5px;  border-radius:0px" type="text" class="form-control" placeholder="Nombre de Paciente">
    <input  name="adm_name"   value="<?php echo $row["pet_fn"]; ?> <?php echo $row["pet_sn"]; ?>" style="margin:5px;  border-radius:0px" type="hidden" class="form-control" placeholder="Nombre de paciente">
<div align="left">  Edad de Paciente :</div>
    <input disabled     value="<?php echo $row["pet_age"]; ?>" style="margin:5px;  border-radius:0px" type="text" class="form-control" placeholder="Edad de Paciente">
    <input  name="adm_age"    value="<?php echo $row["pet_age"]; ?>" style="margin:5px;  border-radius:0px" type="hidden" class="form-control" placeholder="Patient Age">
<div align="left">  Número de Contacto de Paciente :</div>
    <input disabled    value="<?php echo $row["pet_ac"]; ?> <?php echo $row["pet_con"]; ?>" style="margin:5px;  border-radius:0px" type="text" class="form-control" placeholder="Número de Contacto de Paciente">
    <input  name="adm_con"    value="<?php echo $row["pet_ac"]; ?> <?php echo $row["pet_con"]; ?>" style="margin:5px;  border-radius:0px" type="hidden" class="form-control" placeholder="Número de Contacto de Paciente">
<div align="left">  Grupo sanguíneo paciente :</div>
    <input disabled      value="<?php echo $row["pet_bg"]; ?>" style="margin:5px;  border-radius:0px" type="text" class="form-control" placeholder="Grupo sanguíneo paciente">
    <input  name="adm_bg"     value="<?php echo $row["pet_bg"]; ?>" style="margin:5px;  border-radius:0px" type="hidden" class="form-control" placeholder="Grupo sanguíneo paciente">
<div align="left">  Enfermedades del Paciente :</div>
    <input required  name="pet_disea" value="" style="margin:5px;  border-radius:0px" type="text" class="form-control" placeholder="Enfermedades">
    <select required  name="adm_rn"  style="margin:5px;  border-radius:0px" class="form-control">
    <option value="">Seleccionar cuarto</option>
    <?php
        $count = 1;
        $sel_query="SELECT `room_id`,`room_name` FROM `hospi_room` WHERE `room_avilabl` = 'AV'";
        $result = mysqli_query($con,$sel_query);
        while($row = mysqli_fetch_assoc($result)) { ?>
            <option  value="<?php echo $row["room_id"]; ?>"> <?php echo $row["room_name"]; ?> </option>
            <?php $count++; } ?>
    </select>

  </div>
  <button name="submit"  class="btn" onclick="">Enviar</button>
  <br>
  <script type="text/javascript">

document.write('<?php echo $hos; ?>');
    </script>
  </form>

<tr><td colspan="2" style="padding:5px">
<br /><br />
<script type="text/javascript">
document.write('<?php echo $success; ?>');
    </script>
</td>
  </tr>

</center>
<div class="panel-footer text-center">Presiona enviar después de completar </div>

</div>
</div>
</div>
</center>
</div>
</div>
</div>
</div>
</div>

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/hidenv.js"></script>
</body>
<footer>
	<?php include 'footer.php';?>
</footer>
</html>

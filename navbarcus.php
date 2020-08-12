
<nav style="border-radius:0px; height:20px;background-color:#FFF" class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <p class="navbar-brand">Hola, hola <font color="#7eaefc"> <?php echo $_SESSION['sadmun']; ?>!</font> Has accedido como <?php echo $_SESSION['admty']; ?> <a href="dminlogout.php">cerrar sesión</a></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

      <ul class="nav navbar-nav">
        <li><a  href="patin.php">Información de Paciente</a></li>
        <li><a  href="staff.php">Información de Personal</a></li>
        <li><a  href="invoinfo.php">Facturas de Pacientes</a></li>
        <li><a  href="roomavi.php">Información de Cuartos</a></li>
        <li><a  href="admite.php">Información de Pacientes Admitidos</a></li>
        
      </ul>

    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

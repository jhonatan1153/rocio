<html>
   
    <?php
    error_reporting(0);
     $nombre = $_POST["nombre"];
     $apellido = $_POST["apellido"];
     $correo = $_POST["correo"];
     $pass = $_POST["pass"];
    ?>

    <head>
            <title>ROCIO</title>   
            <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">
        <script type="text/javascript" src="bootstrap/js/jquery-3.4.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="bootstrap/superior.css">
        <meta charset="UTF-8">
    </head>

<nav class="navbar navbar-expand-lg navbar-light bg-primary">
 

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar1" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbar1">
    <ul class="navbar-nav">
      <li class="nav-item active ">
        <a class="nav-link text-light" href="#" style="font-size:22px"><strong>Inicio </strong><span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-light" href="catalogo.php"style="font-size:22px"><strong> Nuestros productos</strong></a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-light" href="contacto.php"style="font-size:22px"><strong> Contáctenos</strong></a>
      </li>
    </ul>
  </div>


   <a class="navbar-brand " href="#"><strong><h4 class="font-weight-bold">VIDRIOS LA 43</h4></strong></a>
  <img src="public/images/logo.png" class="img-fluid float-right" width="55" alt="Responsive image">

</nav>




<body>
<div class="container" style="background:#E5ECEA;">
  <div class="row" >
    <div class="col-sm-6">
      <br>
<H1 class="text-center "><strong>VIDRIOS Y ALUMINIO LA 43</strong></H1>
<br>

<h4>En vidrios y aluminio la 43 trabajamos todo lo relacionado con:<BR><BR>

-Vidrios para construccion y muebles<BR>
-Espejos en todos los tamaños y calibres<BR>
-Muebles modulares en vidrio <BR>
-Devisiones de baño <BR>
-Todo lo relacionado en aluminio (pollos de cocina,gabinetes de baño,etc)<BR>
-Marqueteria en general<BR><BR>


Estamos ubicados en la Cra.43 No.45-57 B/republica de israel en la ciudad cali.
<BR>Ofrecemos nuestro servicios a domicilios.

</h4>


    </div>


       <div class="col-sm-6">
    <center>
      <BR>
      <BR>

    <div class="slider">
			<ul>
				<li>
  <img src="public/images/banner.jpg" style="height: 500px; width: 70%;" alt="">
 </li>
 
				<li>
  <img src="public/images/espejolindo.jpg" style="height: 500px; width: 70%;" alt="">
</li>
				<li>
  <img src="public/images/espejo.jpg" style="height: 500px; width: 70%;" alt="">
</li>
				<li>
  <img src="public/images/espejo2.jpg" style="height: 500px; width: 70%;" alt="">
</li>
			</ul>
		</div>
</center>
    </div>

  </div>
</div>

</body>



<!-- Footer -->
<footer class="page-footer font-small bg-primary pt-4">

  <!-- Footer Links -->
  <div class="container-fluid text-center text-md-left">

    <!-- Grid row -->
    <div class="row">



    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2019 

  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->

</html>





<script type="text/javascript">
$('#myCollapsible').on('hidden.bs.collapse', function () {
  // do something…
})</script>


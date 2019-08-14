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




   <!-- <header class="superior"> 

            <div class="btn-group">
                   <a class="button" href="#">inicio</a>
                    <a class="button" href="catalogo.php">nuestro productos</a>
                    <a class="button" href="contacto.php">contactenos</a>  

             </div>

            <!-- <a class ="img aling-left" href=""></a> -->
             <!--<img src="public/images/logo.png" class="img-fluid float-right" width="60" alt="Responsive image">-->


<!--

             <span class="despegable">
                    <button class="boton">MENU</button>
                      <div class="links">
                        <a href="#">inicio</a>
                          <a href="catalogo.php">nuestro catalogo</a>
                          <a href="contacto.php">contactenos</a>   
                          <a href="registro.php" >registro</a>
                          <a href="login.php" >login</a>  
                      <div>
                </span>

                
    </header>
   -->

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


Estamos ubicados en la Cra.43 No.45-57 B/republica de israel en la ciudad cali y ofrecemos nuestro servicios a domicilios.

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





<!-- Footer -->
<footer class="page-footer font-small bg-primary pt-4">

  <!-- Footer Links -->
  <div class="container-fluid text-center text-md-left">

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-6 mt-md-0 mt-3">

        <!-- Content -->
        <h5 class="text-uppercase">Footer Content</h5>
        <p>Here you can use rows and columns to organize your footer content.</p>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none pb-3">

      <!-- Grid column -->
      <div class="col-md-3 mb-md-0 mb-3">

        <!-- Links -->
        <h5 class="text-uppercase">Links</h5>

        <ul class="list-unstyled">
          <li>
            <a href="#!">Link 1</a>
          </li>
          <li>
            <a href="#!">Link 2</a>
          </li>
          <li>
            <a href="#!">Link 3</a>
          </li>
         
        </ul>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-3 mb-md-0 mb-3">

        <!-- Links -->
        <h5 class="text-uppercase">Links</h5>

        <ul class="list-unstyled">
          <li>
            <a href="#!">Link 1</a>
          </li>
          <li>
            <a href="#!">Link 2</a>
          </li>
          <li>
            <a href="#!">Link 3</a>
          </li>
        
        </ul>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2018 Copyright:
    <a href="https://mdbootstrap.com/education/bootstrap/"> MDBootstrap.com</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->





</html>











<script type="text/javascript">
$('#myCollapsible').on('hidden.bs.collapse', function () {
  // do something…
})</script>


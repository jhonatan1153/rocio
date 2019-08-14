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

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">VIDRIOS LA 43</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar1" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbar1">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pricing</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
  </div>
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
<H1 class="text-center text-secondary"><strong>VIDRIOS Y ALUMINIO LA 43</strong></H1>


    </div>


       <div class="col-sm-6">
    

    <div class="slider">
			<ul>
				<li>
  <img src="public/images/banner.jpg" style="height: 550px; width: 70%;" alt="">
 </li>
 
				<li>
  <img src="public/images/espejolindo.jpg" style="height: 550px; width: 70%;" alt="">
</li>
				<li>
  <img src="public/images/espejo.jpg" style="height: 550px; width: 70%;" alt="">
</li>
				<li>
  <img src="public/images/espejo2.jpg" style="height: 550px; width: 70%;" alt="">
</li>
			</ul>
		</div>

    </div>

  </div>
</div>


</html>
<script type="text/javascript">
$('#myCollapsible').on('hidden.bs.collapse', function () {
  // do something…
})</script>


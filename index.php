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
              
        <link rel="stylesheet" type="text/css" href="bootstrap/superior.css">
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    
    </head>
    <body>

    <header class="superior"> 

            <div class="btn-group">
                   <a class="button" href="index.php">inicio</a>
                    <a class="button" href="catalogo.php">nuestro productos</a>
                    <a class="button" href="contacto.php">contactenos</a>   

             </div>

             <a class ="img" href=""></a>


             <span class="despegable">
                    <button class="boton">MENU</button>
                      <div class="links">
                        <a href="index.php">inicio</a>
                          <a href="catalogo.php">nuestro catalogo</a>
                          <a href="contacto.php">contactenos</a>   
                      <div>
                </span>

                
    </header>
    
    </body>

<div class="container">
  <div class="row">
    <div class="col-6" style="background:black;">
     </div>

<div class="col-6">


    <div class="slider">
			<ul>
				<li>
  <img src="public/images/banner.jpg" style="height: 550px; width: 100%;" alt="">
 </li>
 
				<li>
  <img src="public/images/espejolindo.jpg" style="height: 550px; width: 100%;" alt="">
</li>
				<li>
  <img src="public/images/espejo.jpg" style="height: 550px; width: 100%;" alt="">
</li>
				<li>
  <img src="public/images/espejo2.jpg" style="height: 550px; width: 100%;" alt="">
</li>
			</ul>
		</div>

    </div>

  </div>
</div>


</html>
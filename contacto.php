<html>
<head>
    <title>contactenos</title>

    <link rel="stylesheet" type="text/css" href="bootstrap/contacto.css">
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

        <a class="img" href=""></a>

        <span class="despegable">
                <button class="boton">MENU</button>
                  <div class="links">
                    <a href="index.php">inicio</a>
                      <a href="catalogo.php">nuestro catalogo</a>
                      <a href="contacto.php">contactenos</a>   
                      <a href="registro.php" >registro</a>
                      <a href="login.php" >login</a>  
                  <div>
            </span>


    </header>

</body>   


<nav class="info">

</nav>
<footer class="inferior">

        
        <div class="linea1"></div>
        <div class="ubicacion">
        
        <label >nuestra ubicacion</label>
        
        <img src="public/images/phone.png" class="phone"><label class="nomphone" >donde estamos ubicados</label>
    
        
        <img src="public/images/ubication.png" class="location"><label class="nomlocation">donde estamos ubicados</label>

        <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m11!1m3!1d823.2619305829578!2d-76.5102534835515!3d3.40547524355236!2m2!1f0!2f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e30a6d316a87143%3A0xacc79887f9fcebe8!2sCra.+43+%234559%2C+Cali%2C+Valle+del+Cauca!5e1!3m2!1ses-419!2sco!4v1565707999511!5m2!1ses-419!2sco" width="300" height="300" frameborder="0" style="border:0; position: relative;" allowfullscreen></iframe>


     
        </div>
        
        
        
        <div class="linea2"></div> 
      
    <div class="colores">
            

            <form action="" method="POST" accept-charset="UTF-8" onclick="listo" id="formulario">
                    
                    <legend>Contactenos</legend>

              
                    <fieldset class="cuadro">

            
                            <div class="form-group">
                                <div class="letra" >nombre *</div>
            
                                <input type="text" id="nombre" name="nombre" class="caja" required>
            
                            </div>
            
            
                            <div class="form-group">
            
                                <div class="letra">apellido *</div>
            
                                <input type="text" id="apellido" name="apellido" class="caja" required>
            
                            </div>

                            <div class="form-group">
            
                                    <div class="letra">numero telefono *</div>
                
                                    <input type="text" id="telefono" name="telefono" class="caja" required>
                
                                </div>
            
            
                            <div class="form-group">
            
                                    <label class="letra">motivo de contacto</label>

                                    <select class="caja" >
                                            <option value="cotizacion">cotizacion</option>
                                            <option value="compra">compra</option>
                                            <option value="otro">otro</option>
                                        </select>
                            </div>
            
            
                            <div class="form-group">
            
                                <div class="letra">descripcion *</div>
            
                                <textarea id="descripcion" name="descripcion" class="textarea" minlength="1" maxlength="250" required></textarea>
            
                            </div>
            
            
                            <div class="enviar">
                                <input type="submit" class="btn btn-primary" style=" width: 120px; margin:0 auto;" value="Enviar">
                            </div>
            
                        </fieldset>
                      
    
            </form>
        </div>
</footer>

</html>








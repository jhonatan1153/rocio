<html>

<?php
include "bases/top.php";
?>




<?php


 if($_GET){

      if ($_GET['p']=='inicio') {
       include "inicio.php";
        }
      
  
      else if ($_GET['p']=='productos') {
     
        include "catalogo.php";
     
      }
       else if ($_GET['p']=='vidrios') {
     
        include "vidrios.php";
     
      }
      else if ($_GET['p']=='baño') {
     
        include "baños.php";
     
      }
      else if ($_GET['p']=='meson') {
     
        include "mezon.php";
     
      }
      else if ($_GET['p']=='contacto') {
         
        include "contacto.php";
     
      }
      else if ($_GET['p']=='nosotros') {
         
        include "nosotros.php";
     
      }
   }else{

        include "inicio.php";

}

?>



<?php
include "bases/bot.php";
?>


</html>




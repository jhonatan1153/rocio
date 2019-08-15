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
     
      }else if ($_GET['p']=='contac') {
         
        include "contacto.php";
     
      }
   }else{

        include "inicio.php";

}

?>






<?php
include "bases/bot.php";
?>


</html>




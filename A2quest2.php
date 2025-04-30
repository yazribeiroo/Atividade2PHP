<?php 

function contarComMultiplos() {
   for ($i = 1; $i <= 100; $i++) {
       echo $i;
       if ($i % 10 == 0) {
         echo " - Múltiplo de 10 \n\n";
  }
  echo "\n";
 }
 echo "\n";
}   

 contarComMultiplos();

 ?>
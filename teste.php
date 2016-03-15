<?php
  // require_once('conexao.php');

  $sal     = $_POST['sal'];
  
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Imposto Calculado</title>
    <meta charset="utf-8">
  </head>
  <body>
 

<?php

            
            // calculando o inss
            
            if ($sal < 1556.95) 
            {

              echo "IF 1";

            }         

            elseif (($sal > 1556.94) and ($sal < 2594.93))
            {

              $inss = $sal * 0.09;

            }         elseif (( $sal > 2594.92 ) and ( $sal < 5189.83 ))
            
                {

                  echo "IF 2";

                }        


                else 
                
                {
                

                  echo "else if 3";
                }            

     echo "</br>";
     echo $sal;


      // calculando o IR


          
            


?>


 <?php
      
/* calculando o IR

            if ($sal > 4664.68 ){

                $ir = ($total * 0.275) - 869.36;

                      

            } if ($sal < 1903.99 ) {


              $ir = 0 ;


            } if (($sal > 1903.98) and ($sal < 2826.66) ) {
                        
                        $ir = ($total * 0.075) - 142.80;
                      }

              if (($sal > 2826.65) and ($sal < 3751.06) ) {
                        
                        $ir = ($total * 0.15) - 354.80;
                      }

            else{

                $ir = ($total * 0.225) - 636.13;
            }

          */

 ?>




  </body>
</html>

      
            



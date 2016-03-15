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
            $inss = 0;
            $ir = "eita";
            $total = 0;
            $inss = $sal * 0.08;
            
            // calculando o inss
            
            if ($sal < 1556.95) 
            {

              $inss = $sal * 0.08;

            }         

            elseif (($sal > 1556.94) and ($sal < 2594.93))
            {

              $inss = $sal * 0.09;

            }         

            elseif (( $sal > 2594.92 ) and ( $sal < 5189.83 ))
            {

              $inss = $sal * 0.11;



            }        else 
                {
                  $inss = 5189.82 * 0.11;


                }            

      $total = $sal - $inss;


      // calculando o IR


             if ($sal < 1903.99 ) {


              $ir = 0 ;


            } elseif (($total > 1903.98) and ($total < 2826.66) ) {
                        
                        $ir = ($total * 0.075) - 142.80;
                      }

              elseif (($total > 2826.65) and ($total < 3751.06) ) {
                        
                        $ir = ($total * 0.15) - 354.80;
                      }

               elseif (($total > 3751.05) and ($total < 4664.68) ) {
                        
                        $ir = ($total * 0.225) - 636.13;
                      }          
           

               else{

                                  

                    $ir = ($total * 0.275) - 869.36;
                    

            
            }

            if ($ir < 0) {
              $ir = 0;
            }
        
            


?>


 <?php
      
      echo "Salario: ";
      echo $sal;
      echo "</br>";
      echo "INSS: ";
      echo $inss;
      echo "</br>";
      echo "IR: ";
      echo $ir;
      echo "</br>";
      echo "Salario - INSS : ";
      echo $total;

 ?>




  </body>
</html>
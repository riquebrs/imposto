<?php
  // require_once('conexao.php');

  $sal     = $_POST['sal'];
  
?>
<!DOCTYPE html>
<html>
  <head>


    <title>Imposto Calculado</title>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script> 
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">  
  <script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
  <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script> 
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
        
            
$total = $sal - $inss - $ir;

?>


 <?php
      echo "<table class= table table-condensed >


<tr>
<td>Descrição</td> <td>Valor</td>
</tr>

<tr>
<td>Salario</td> <td>$sal</td>
</tr>

<tr>
<td>INSS</td> <td>$inss</td>
</tr>

<tr>
<td>Imposto de Renda</td> <td>$ir</td>
</tr>

<tr>
<td>Recebimento Liquido</td> <td>$total</td>
</tr>

</table>";

    

 ?>





</body>
</html>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loop - For</title>
  </head>
  <body>
  <!--Os comentarios dentro das tags php, abaixo desse comentario, nao aparecem na pagina HTML gerada -->
  
    <?php
      /*
        $numeros = array();

          while (count($numeros) <= 5) {

            $num = rand(1,60);

            if (!in_array($num, $numeros)) {
              $numeros[] = $num;
            }
          }
          print_r($numeros);
      */

      for ($numeros=[]; count ($numeros) <= 5;) { 
         $num = rand(1,60);

          if (!in_array($num, $numeros)) {
            $numeros[] = $num;
        }
      }
      echo '<pre>';
        print_r($numeros);
      echo '<pre/>';
    


        
      
      

    
    
    ?>
    <br/>
    <br/>
    <hr/>
  <h1>Isso é sobre loops, e arrays, voce nao vai querer saber</h1>
     
      
      
  </body>
</html>
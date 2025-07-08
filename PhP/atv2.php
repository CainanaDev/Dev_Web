<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Função</title>
  </head>
  <body>
  <!--Os comentarios dentro das tags php, abaixo desse comentario, nao aparecem na pagina HTML gerada -->
      <?php

      //funcion return
      function calcularImposto ($salario){
          $alq = 0;
          if($salario <= 1900 ){
            $alq = 0;

          } else if($salario >= 1900 && $salario <= 2300){
            $alq = ($salario * 7.5) / 100;

          } else if($salario >= 2300 && $salario <= 2500){
            $alq = ($salario * 9.5) / 100;

          } else if($salario >= 2500 && $salario <= 3000){
            $alq = ($salario * 10) / 100;
            
          } else{
            $alq = ($salario * 20) / 100;
          };

          return $alq;
          
      };
      echo  calcularImposto(10000);
     

      ?>
     
      
      
  </body>
</html>
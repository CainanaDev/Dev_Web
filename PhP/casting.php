<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Casting</title>
  </head>
  <body>
  <!--Os comentarios dentro das tags php, abaixo desse comentario, nao aparecem na pagina HTML gerada -->
      <?php

         //gettype() => retorna o tipo da var
         $valor = 20;
         $valor2 = (float) $valor;

        //int prara floar

         echo gettype($valor);
         echo '<br/>';
         echo gettype($valor2);


      ?>
      
      
      
  </body>
</html>
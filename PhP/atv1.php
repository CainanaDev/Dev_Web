<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>If_Else</title>
  </head>
  <body>
  <!--Os comentarios dentro das tags php, abaixo desse comentario, nao aparecem na pagina HTML gerada -->
      <?php
      $idade = 33;
      $peso = 49.0;
      //estrutura de decisões
      if ($idade >= 16 && $idade <=69  && $peso >= 40) {
        echo 'Pode doar';
      } else {
        echo 'Não pode doar';
      }
      ?>
      
      
      
  </body>
</html>
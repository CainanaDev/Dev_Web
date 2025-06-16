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
      $nome = 'joao';
      $idade = 25;
      //estrutura de decisões
      if ('a' > '9' && $nome > $idade) {
        echo 'Verdadeiro';
      } else {
        echo 'Falso';
      }
      ?>
      
      
      
  </body>
</html>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch</title>
  </head>
  <body>
  <!--Os comentarios dentro das tags php, abaixo desse comentario, nao aparecem na pagina HTML gerada -->
      <?php
        switch ('abc') {
          case 'abc':
            echo 'Case 1';
            break;

          case abc:
            echo 'Case 2';
            break;  
          
          default:
            echo 'Nada';
            break;
        }
      ?>
      
      
      
  </body>
</html>
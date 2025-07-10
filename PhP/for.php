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
 
    for ($i=0; true; $i++) { 
      if ($i >= 10) {
        break;
      };
      echo "Printa ai, cê né o bichão?! $i <br/>";
    }
    ?>
    <br/>
    <br/>
    <hr/>
  <h1>Isso é sobre loops, voce nao vai querer saber</h1>
     
      
      
  </body>
</html>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loop - do while</title>
  </head>
  <body>
  <!--Os comentarios dentro das tags php, abaixo desse comentario, nao aparecem na pagina HTML gerada -->
  
    <?php
      #a diferença basica do do_while pro while é que o bloco de codigo será execultado ao menos uma vez antes de ser estabelecida a condição de parada. 
      $a =100;
      do {
        echo "$a<br/>";
        $a --;
       
      } while ($a > 9);
    ?>
    <br/>
    <br/>
    <hr/>
  <h1>Isso é sobre loops, voce nao vai querer saber</h1>
     
      
      
  </body>
</html>
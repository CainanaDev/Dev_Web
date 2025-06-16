<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variáveis</title>
  </head>
  <body>
  <!--Os comentarios dentro das tags php, abaixo desse comentario, nao aparecem na pagina HTML gerada -->
      <?php
        
       $Nome = 'Antonio'; //string
       $idade = 25; //int
       $peso = 58.5; // flot
       $fazExercico = true; //boolean

      //concatenação com o operador .
       echo 'Ola '.$Nome.', vi que sua cor preferida é '.$peso.', e que voce gosta de jogar';

       echo '<br/>';
       
       //também é possivel usar a opção de aspas duplas para concatenação no PHP
       echo "Ola $Nome, vi que sua cor preferida é $idade, e que voce gosta de jogar";
      ?>
      
      
      
  </body>
</html>
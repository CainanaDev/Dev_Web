<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Função STR</title>
  </head>
  <body>
  <!--Os comentarios dentro das tags php, abaixo desse comentario, nao aparecem na pagina HTML gerada -->
      <?php
      $texto = 'Ola Seja Bem Vindo - PHP';
      echo $texto .'<br/>';
      //str to lower = Tudo minusculo
      echo strtolower($texto);
      echo '<hr/>';

      echo $texto .'<br/>';
      //str to upper = Tudo maiusculo
      echo strtoupper($texto);
      echo '<hr/>';

      echo $texto .'<br/>';
      //ucfrist/ upper case first = Primeira letra maiuscula
      echo ucfirst($texto);
      echo '<hr/>';

      echo $texto .'<br/>';
      //strlen/ length = Conta as str
      echo strlen($texto);
      echo '<hr/>';

      echo $texto .'<br/>';
      //str replace = troca uma palavra por outra
      echo str_replace('PHP', 'HTML', $texto);
      echo '<hr/>';

      echo 'Subistituir ponto por virgula Nº 20.50' .'<br/>';
      //Muito usado para funções de calculos com franção
      echo str_replace('.', ',', 20.50);
      echo '<hr/>';

       echo $texto .'<br/>';
      //str replace = troca uma palavra por outra
      echo substr($texto, 4, 5);
      ;
     
      
      ?>
     
      
      
  </body>
</html>
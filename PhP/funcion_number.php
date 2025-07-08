<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Função NUMBER</title>
  </head>
  <body>
  <!--Os comentarios dentro das tags php, abaixo desse comentario, nao aparecem na pagina HTML gerada -->
      <?php
      $numero = 10.4;
      echo $numero
       .'<br/>';
      //ceil arreonda pra cima
      echo ceil($numero
    );
      echo '<hr/>';

      echo $numero
       .'<br/>';
      //floor arredonda pra baixo
      echo floor($numero
    );
      echo '<hr/>';

      echo $numero
       .'<br/>';
      //round arredonda com base nas casas decimais
      echo round($numero
    );
      echo '<hr/>';

      echo $numero
       .'<br/>';
     //rond()gera um numero aleatorio
      echo rand(1,9);
      echo '<br/>'.getrandmax(); //o valor maximo aleatorio do sistema
      echo '<hr/>';

      echo $numero
       .'<br/>';
      //str replace = troca uma palavra por outra
      echo  sqrt($numero
    );
      echo '<hr/>';

      echo 'Subistituir ponto por virgula '.$numero .'<br/>';
      //Muito usado para funções de calculos com franção
      echo str_replace('.', ',', $numero);
      echo '<hr/>';

    
     
      
      ?>
     
      
      
  </body>
</html>
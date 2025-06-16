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
        
       $Nome = 'Joao'; //string
       $idade = 25; //int
       $peso = 58.5; // flot
       $fazExercico = true //boolean

      ?>
      
      
      <h1>Ficha</h1>
      <br/>
      <p>Nome: <?= $Nome ?> </p>
      <p>Idade: <?= $idade ?> </p>
      <p>Peso: <?= $peso ?> </p>
      <p>Faz exercicio? : <?= $fazExercico ?> </p>
  </body>
</html>
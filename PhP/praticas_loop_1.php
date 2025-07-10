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
      $cadastro = [ 
       ['Titulo' => 'Titulo 1', 'Conteudo' => 'Conteudo da noticia 1'],
       ['Titulo' => 'Titulo 2', 'Conteudo' => 'Conteudo da noticia 2'],
       ['Titulo' => 'Titulo 3', 'Conteudo' => 'Conteudo da noticia 3']
     ];
     echo '<pre>';
      print_r($cadastro); 
     echo '</pre>';
      echo '<br/><br/><br/>';
      $n = 0;
      while ($n < 3) {
        echo '<h3>'. $cadastro[$n]['Titulo']. '</h3>';
        echo '<p class=1>'. $cadastro[$n]['Conteudo']. '<p>';
        echo '<hr/>';
        $n++;

      
      }

    
    
    ?>
    <br/>
    <br/>
    <hr/>
  <h1>Isso é sobre loops, e arrays, voce nao vai querer saber</h1>
     
      
      
  </body>
</html>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Função</title>
  </head>
  <body>
  <!--Os comentarios dentro das tags php, abaixo desse comentario, nao aparecem na pagina HTML gerada -->
      <?php
      //funcion void
      function exibirOla(){
        echo 'SEJA BEM VINDO';
      };   
      exibirOla();


      //funcion return
      function calcularAreaTerreno ($largura, $comprimento){
          $area = $largura * $comprimento;
          return $area;
          
      };
      echo '<br/>'. calcularAreaTerreno(10,20);
     

      ?>
     
      
      
  </body>
</html>
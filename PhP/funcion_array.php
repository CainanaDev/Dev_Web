<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
  </head>
  <body>
  <!--Os comentarios dentro das tags php, abaixo desse comentario, nao aparecem na pagina HTML gerada -->
    <?php
        /*
        $array = array();
          #a função is_array, verificar se uma variavel de fato é array
          #e retorna true ou false
        $retorno = is_array($array);
        if ($retorno) {
          echo 'Sim, é um array';
        }else{
          echo 'Não é um array';
        }*/

        /*
        $array = [1 => 'a', 7=> 'b', 15 => 'c'];
          echo '<pre>';
            print_r($array);
          echo '</pre>';
          echo '<br/>';
          #a função array_keys trás de volta as chaves do array em um novo array
        $chaves_array = array_keys($array);
        echo '<pre>';
            print_r($chaves_array);
          echo '</pre>';
          echo '<br/>';
        */

        /*
        $array = ['Mouse', 'Teclado', 'Fonte', 'Notebook', 'Gabinete'];
        echo '<pre>';
            print_r($array);
          echo '</pre>';
          echo '<br/>';
            #a função sort organiza o array por ordem alfabetica, devolvendo true ou false, rearranjando os indices
          #sort($array);
          #echo '<pre>';
          #  print_r($array);
          #echo '</pre>';
            #ja a função asort reordena por ordem alfabetica, mantendo os respectivos indices
          asort($array);
           echo '<pre>';
            print_r($array);
          echo '</pre>';
          */

          /*
        $array = ['Mouse', 'Teclado', 'Fonte', 'Notebook', 'Gabinete'];
        echo '<pre>';
            print_r($array);
          #função count conta a quantidade de elementos no array  
          echo count($array);
          echo '</pre>';
          echo '<br/>';
          */

         /* 
        $array1 =['Tv', 'DVD', 'Som'];
        $array2 =['Sofa', 'Poltrona', 'Mesa', 'Abaju']; 
           #a função array merge une dois array em novo array
        $novo = array_merge($array1, $array2);
          echo '<pre>';
            print_r($novo);
          echo '</pre>';
          echo '<br/>';
          */

          /*
        #a função explode seprara uma string com base no delimitador usado e devolve um array com cada informação - Primeiro indica o delimitador, depois a variavel que contem a string
        $D = "10/08/1994";
        $c = explode('/', $D);
        echo '<pre>';
            print_r($c);
            echo $c[2].'-'.$c[0].'-'.$c[1]; //nesse exemplo estamos usando o retorno do explode para gerar uma nova sequencia de informações em o delimitador excluido
          echo '</pre>';
          echo '<br/>';
          */
            #a função impode junta os elementos de um array em uma string, usando o delimitado indicado
          $array = ['Abacate', 'Melão', 'Mamão'];
          $a=implode('-', $array);
          echo $a;



      

    ?>
  <h1>Não tem nada aqui</h1>
     
      
      
  </body>
</html>
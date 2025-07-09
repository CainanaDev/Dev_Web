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
        #$lista = array() - multidimensional
        $lista_coisas = [];
          $lista_coisas['frutas'] = ['Maçã', 'Uva', 'Manga','Outros'=>['Jenipapo','Jaca'], 'Melancia'];
          $lista_coisas['pessoas'] = ['Antonio', 'Joao','Carlos'];
          $lista_coisas['aleatorio']=['g'=>'Gato', 'c'=>'Cachorro', 'C'=>'Camelo' ];

          #Para adicionar mais itens, basta indica o array como no exemplo abaixo
          $lista_coisas['frutas'][] = 'MELAO';
          $lista_coisas['frutas']['Outros'][] = 'Nao Especificado';
          $lista_coisas['pessoas']['J'] = 'Beltrano';

        # => A tag <pre> ajuda a formatar a impressão do array, junto com o print_r 
        echo '<pre>';
            print_r($lista_coisas); //organiza o array
        echo '</pre>';
        echo '<hr/>';
        var_dump($lista_coisas); //Imrpime o array desorganizado, mas com o tipo de cada variavel
        echo '<hr/>'.'<br/>';
        #Para visualizar apenas um item especifico do array, basta indica as cordenandas no echo
        echo $lista_coisas['frutas']['Outros'][0] . '</br>';
        echo $lista_coisas['frutas'][0];
        
        echo '<hr/>'.'<br/>';
        #Como pesquisar em arrays
        #usando o in_array, indicamos o que queremos pesquisa e onde queremos pesquisar - O retorno é true 1 ou false 0 

        $tem = in_array('Cachorro', $lista_coisas['aleatorio']);
        #in_array junto com o teste condificional if para tratamento da respota da pesquisa
        if ($tem) {
          echo 'Sim, existe';
        }else{
          echo 'Não existe';
        };
         echo '<hr/>'.'<br/>';
        # Ja o metodo de pesquisa array_search, nos devolve qual o indice da informação pesquisa dento do respectivo array ou retorna vazio caso nao ache a correspondencia 
        $tem2 = array_search('Gato', $lista_coisas['aleatorio']);
        if ($tem2 <> '') {
          echo "Sim, existe, na posição $tem2, do respectvo array";
        }else{
          echo 'Não existe';
        };
        //null é considerado vazio - mas vazio não é considerado null

      ?>
     
      
      
  </body>
</html>
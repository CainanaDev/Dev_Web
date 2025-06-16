<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Constantes</title>
  </head>
  <body>
  <!--Os comentarios dentro das tags php, abaixo desse comentario, nao aparecem na pagina HTML gerada -->
      <?php
      /*PARA DECLARAÇÃO DE CONSTANTES EM PHP,
      ULTILIZA-SE A FUNÇÃO define, QUE POR PARDRÃO,
      RECEBE COMO PARAMETRO DOIS VALORES, O PRIMEIRO VALOR
      É O NOME DA CONSTANTE, O SEGUNDO É O VALOR ATRIBUIDO
      */
        define('BD_URL', 'endereco_db_dev');
        define('BD_USUARIO', 'usuario_dev');
        define('BD_SENHA', 'senha_dev');

        // .. logica .. //
        echo BD_URL .'<br/>' ;
        echo BD_USUARIO .'<br/>' ;
        echo BD_SENHA .'<br/>' ;

        /*PARA CHAMAR UMA CONSTANTE NO PHP
        NÃO É NECESSARIO COLOCA O dolar/sifrão antes
        basta usar o proprio nome usado na declaração
        da const*/
      
      ?>
      
      
      
  </body>
</html>
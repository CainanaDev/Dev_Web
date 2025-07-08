<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Função Date</title>
  </head>
  <body>
  <!--Os comentarios dentro das tags php, abaixo desse comentario, nao aparecem na pagina HTML gerada -->
      <?php
      /*
      //recuperar data atual
      //https://www.php.net/manual/pt_BR/datetime.format.php - Formato para datas
        echo date('d,D /M/o - H:i ');
        echo '<br/>';
        echo date_default_timezone_get(); // monstra o timezone atual
        echo '<hr/>';

        date_default_timezone_set('Europe/Berlin') ; //Indicando o novo 
        
        echo '<br/>';
        echo date('d,D /M/o - H:i ');
        echo '<br/>';
        echo date_default_timezone_get();

        //dia/mes/ano - horas:minutos
        //d, D, M, o  -     H: i  
        */

        //contanto a parte da era Unix 01/01/1970
        //Para calcular intervalo entre datas ela precisa está no padrão AAAA-DD-MM.
        $data_fim = '2025-08-07';
        $data_inicio = '2024-07-19';

        //A função strtime transforma a data em segundos, com base no inicio da era unix. EX.:08/07/2025 -- 01/01/1970
        $time_inicial = strtotime($data_inicio);
        $time_final = strtotime($data_fim);
        //Após transformar o intervalo entre datas, em segundos (logo abaixo), podemos efetuar calculos de intervalo de tempo, como quanto tempo há entre a data de incio e a data de fim 

        echo $data_inicio.' Sua representação em segundos é: '.$time_inicial;
        echo '<br/>';
        echo $data_fim.' Sua representação em segundos é: '.$time_final;
        //calcular diferença entre segundos (sempre da data maior, em relação a unix, para data menor)
        $diferenca_segundos = $time_final - $time_inicial;
        echo '<br/>';
        echo  "A diferença de segundos entre as datas acimas é: $diferenca_segundos";
        //base para calculos de segundos em um dia 
        $segundos_do_dia = (24*60)*60;
         echo '<br/>';
         echo "Um dia possue 24h, o que vale o mesmo que $segundos_do_dia segundos";
         $diferença = $diferenca_segundos / $segundos_do_dia;
          echo '<br/>';
          echo "A diferença de dias entre $data_inicio e $data_fim, com base nos segundos, é:  $diferença"

      ?>
     
      
      
  </body>
</html>
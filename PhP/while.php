<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loop - While</title>
  </head>
  <body>
  <!--Os comentarios dentro das tags php, abaixo desse comentario, nao aparecem na pagina HTML gerada -->
  
    <?php
    #o while é um loop que determina que basicamente podemos traduzir em "Enquanto isso, faça aquilo". Ou seja, enquanta a valor menos que 10, digite 10. Caso nao haja um criterio de parada, que faça o valor ficar maior que 10, a aplicação trava 
    $a = 0;
       while ($a <= 10) {
         
        echo "$a<br/>";
        $a ++; //criterio de parada 
        break;// através do uso de if/else, jutamente com o brak, podemos aprimorar os criterios de fim do laço, pois, o laço para onde encontra o break - da mesma forma que vai seguir onde encontrar o continue. Daí vai variar da cabeça de cada um 
        
       }
    ?>
    <br/>
    <br/>
    <hr/>
  <h1>Isso é sobre loops, voce nao vai querer saber</h1>
     
      
      
  </body>
</html>
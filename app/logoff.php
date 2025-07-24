<?php
  session_start();
  //Para remoção de indices de array, da função session, podemos usar a função unsert() - que espera o indice a ser removido e o array
  #Ex.: unset($ARRAY['INDICE'])

  //Pra destruir variaveis de sessão por inteiro temos a função session_destroy(). Que mata todas as sessões ativas quando execultadas
  session_destroy();
  header('Location: index.php');
 ?>
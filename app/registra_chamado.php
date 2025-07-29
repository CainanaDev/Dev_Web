<?php
session_start();
  //função fopen cria ou abre um arquivo novo. sintexe 'nome', 'parametro'
  $arq = fopen('arq.hd', 'a');
  //str replace  substitui eventuais caracteres especiais digitados, no exemplo abaixo está substituindo o # por -
  $c = str_replace('#','-', $_POST);
 //o implode juntas otos os itens de um array (nosso array POST), em uma unica string, separado por um delimitador pre devinido
  $texto = $_SESSION['id'].'#'.implode('#', $c ).PHP_EOL; //PHP_EOL adiciona uma quebra de linha do arquivo de acordo com a sistema opracional
  
/*$t = str_replace('#', '-', $_POST['titulo']);
  $c = str_replace('#', '-', $_POST['categoria']);
  $d = str_replace('#', '-', $_POST['descricao']);
  $texto = $t . '#' . $c . '#' . $d; 
  //essa também é uma opção para juntat o array depois de separado*/



 //a função fwrite escreve dentro do arquivo aberto com o fopen aquilo que está na varivavel texto, e, em seguinda, a fclose fecha esse arquivo 
  fwrite($arq, $texto);
  fclose($arq);
  //echo $texto;
  header('location: abrir_chamado.php?chamado=ok')
?>
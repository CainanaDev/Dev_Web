<?php
session_start();
/*a função isset verifica se um indice existe no array - 
o operador de neção inverte o resultado - Besse caso queremos saber se o indice 'autenticado' existe ou nao no array. Caso não exista devemos levar a aplicação para outro fluxo, 
por isso o operador de negação */
if (!isset($_SESSION['autenticado'])||$_SESSION['autenticado'] <> 'SIM' ) {
  header('Location: index.php?login=erro2');
  echo $_SESSION['autenticado'];
}
?>
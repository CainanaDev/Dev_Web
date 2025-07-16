<?php
session_start(); //Guarda um id no cache para cada sessão iniciada

$_POST; #encainha os dados da pagina inicial para o back-and

//USUARIOS DO SISTEMA
$auth=false; #a variavel $auth, serve para direcionar o fluxo de loguin 
$usr = [
  ['email' => 'teste@teste.com.br', 'senha' => '123456'],
  ['email' => 'user@teste.com.br', 'senha' => 'abcd']
];
/*
echo '<pre>';
echo print_r($usr);
echo '</pre>';
*/
//FUNÇÃO PARA VERIFICAR SE O USUARIO EXISTE
foreach($usr as $user){
  if ($user ['email'] == $_POST['email'] && 
  $user['senha']== $_POST['senha']) {
    $auth=true;
  }
};
//CONDICIONAL PARA DIRECIONAR O FLUXO COM BASE NA EXISTENCIA OU NAO DO USUARIO
if ($auth) {
  echo 'Logou';
  $_SESSION['autenticado'] = 'SIM';
   header('Location: home.php');
} else {
  $_SESSION['autenticado'] = 'NÃO';
  header('Location: index.php?login=erro');
};



/*
print_r($_POST);
echo '<br/>';
echo $_POST['email'];
echo '<br/>';
echo $_POST['senha'];

*/
?>
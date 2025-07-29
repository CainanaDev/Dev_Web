<?php
session_start(); //Guarda um id no cache para cada sessão iniciada

$_POST; #encainha os dados da pagina inicial para o back-and

//USUARIOS DO SISTEMA - 
$auth=false; #a variavel $auth, serve para direcionar o fluxo de loguin 
$user_id = null;
$perfil_id = null;

$perfil = [
  1 => 'Administrativo',
  2 => 'Usuarios',
];
$usr = [
        ['id'=>1, 'email' => 'teste@teste.com.br', 'senha' => '123456', 'perfil' => 1],
        ['id' => 2, 'email' => 'user@teste.com.br', 'senha' => 'abcd', 'perfil' => 1],
        ['id' => 3, 'email' => 'antonio@teste.com.br', 'senha' => 'abcd', 'perfil' => 2],
        ['id' => 4, 'email' => 'joao@teste.com.br', 'senha' => 'abcd', 'perfil' => 2]
];
/*
echo '<pre>';
echo print_r($usr);
echo '</pre>';
*/
//FUNÇÃO PARA VERIFICAR SE O USUARIO EXISTE
foreach($usr as $user){
  if ($user ['email'] == $_POST['email'] && 
      $user['senha']== $_POST['senha']){
      $auth=true;
      $user_id = $user['id'];
      $perfil_id = $user['perfil'];
  }   
};
//CONDICIONAL PARA DIRECIONAR O FLUXO COM BASE NA EXISTENCIA OU NAO DO USUARIO
if ($auth) {
   $_SESSION['autenticado'] = 'SIM';
   $_SESSION['id'] = $user_id;
   $_SESSION['perfil_usr'] =  $perfil_id;

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
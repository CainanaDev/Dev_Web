<?php require_once "valida.php"; ?>
<?php
//abre o arquivo
$chamados = [];
$arq = fopen('arq.hd', 'r');
//enquanto houver linhas a ser recuperado
while (!feof($arq)) { //testa pelo fim de um arquivo
  $registro = fgets($arq);
  $chamados[] = $registro;
}
//fecha o arquivo
fclose($arq);
/*
echo '<pre>';
print_r($chamados);
echo '</pre>';
*/

?>
<html>

<head>
  <meta charset="utf-8" />
  <title>App Help Desk</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <style>
    .card-consultar-chamado {
      padding: 30px 0 0 0;
      width: 100%;
      margin: 0 auto;
    }
  </style>
</head>

<body>

  <nav class="navbar navbar-dark bg-dark">
    <a class="navbar-brand" href="#">
      <img src="logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
      App Help Desk
    </a>
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="logoff.php">
          Logoff
        </a>
      </li>
    </ul>
  </nav>

  <div class="container">
    <div class="row">

      <div class="card-consultar-chamado">
        <div class="card">
          <div class="card-header">
            Consulta de chamado
          </div>

          <div class="card-body">

            <?php
              foreach ($chamados as $chamado) { ?>
                <?php
                $dados = explode('#', $chamado);
                
                if($_SESSION['perfil_usr'] == 2){
                  if ($_SESSION['id']!= $dados[0]){
                    continue;
                  }
                }


                if(count($dados)<3){
                  continue;
                }
                /*echo '<pre>';
                print_r($dados);
                echo '</pre>';*/
                ?>

                <div class="card mb-3 bg-light">
                  <div class="card-body">
                    <h5 class="card-title"><?= $dados[1] ?></h5>
                    <h6 class="card-subtitle mb-2 text-muted"><?= $dados[2] ?></h6>
                    <p class="card-text"><?= $dados[3] ?></p>

                  </div>
                </div>

            <?php } ?>



            <div class="row mt-5">
              <div class="col-6">
                <a class="btn btn-lg btn-warning btn-block" href="home.php">Voltar</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>
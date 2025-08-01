<html>
  <head>
    <meta charset="utf-8" />
    <title>App Help Desk</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
      .card-login {
        padding: 30px 0 0 0;
        width: 350px;
        margin: 0 auto;
      }
    </style>
  </head>

  <body>

    <nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="index.php">
        <img src="logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
        Help Desk - Cainana
      </a>
    </nav>

    <div class="container">
      <div class="row">

        <div class="card-login">
          <div class="card">
            <div class="card-header">
              Login
            </div>
            <div class="card-body">
              <form action="validador.php" method="post">
                <div class="form-group">
                  <input name="email" type="email" class="form-control" placeholder="E-mail">
                </div>
                <div class="form-group">
                  <input name="senha" type="password" class="form-control" placeholder="Senha">
                </div>

                <?php
                //a funçao isset verificar se um indice está setado
                if (isset($_GET['login']) && $_GET['login'] == 'erro') {
                  //caso não esteja, sera exibida uma mensagem de erro de login
                ?>
                  <div class="text-danger">
                    Usuário ou senha inválido(s)
                  </div>
                <?php } ?>
              <!--#####################-->
                <?php
                //verificar se o usuario fez login
                if (isset($_GET['login']) && $_GET['login'] == 'erro2') {

                ?>
                  <div class="text-danger">
                    Nossa que feio tentando acessar a pagina
                    dessa forma, Isso ta protegido, viu?! Faça login por favor!!

                  </div>
                <?php } ?>

                <?php
                //verificar se o usuario fez login
                if (isset($_GET['login']) && $_GET['login'] == 'logoff') {

                ?>
                  <div class="text-danger">
                    Por favor, faça login novamente para continuar

                  </div>
                <?php } ?>

                <button class="btn btn-lg btn-info btn-block" type="submit">Entrar</button>
              </form>
            </div>
          </div>
        </div>
      </div>
  </body>

</html>
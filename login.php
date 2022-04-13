<html>
    <link href='css/estilo.css' rel="stylesheet">
<head>
<style>
.centro {
  text-align: center;
}
body{
    background-image: url('img/bar.jpg');
}
h1{
    color: white;
}
</style>
</head>
<body>
<?php include_once 'topo.php'; ?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark rounded"> 
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="javascript:void(0);" aria-controls="navbarsExample10" aria-expanded="false" aria-label="Toggle navigation" onclick="myFunction()"> 
          <span class="navbar-toggler-icon"></span> 
        </button> 
 
        <div class="collapse navbar-collapse justify-content-md-center" id="myLinks"> 
          <ul class="navbar-nav"> 
            <li class="nav-item active"> 
              <a class="nav-link"> <span class="sr-only"></span></a> 
            </li> 
            <li class="nav-item"> 
              <a class="nav-link" href="formulario.php"> Nova Bebida </a> 
            </li> 
            <li class="nav-item"> 
              <a class="nav-link" href="menu_adm.php"> Menu </a> 
            </li> 
            <li class="nav-item"> 
              <a class="nav-link" href="index.php"> Login </a> 
            </li>
            <li class="nav-item"> 
              <a class="nav-link" href="logout.php"> Sair </a> 
            </li> 
          </ul> 
        </div> 
      </nav> 
      <div class="centro">
    <?php
    // Executa a conexao com o mysql e selecionar a base
    include_once 'conexao.php';

    session_start(); //faz o arquivo iniciar a sessao com o browser

    // pega dados via POST
    // Recebe o valo do email
    $login = $_POST["login"];
    // Recebe o valo do email
    $senha = $_POST["senha"];
    // Converte a senha em um hash criptografado de MD5
    $senha = md5($senha);

//montar a instrução para ir ao banco
    //e selecionar o usuario que tenha este email
    $sql = "select * from usuario where login = '$login' AND senha = '$senha' ";

    //executar conexao e roda a query sql
    $resultado = mysqli_query($con, $sql);

    if (mysqli_num_rows($resultado) == 1) {
        
        // Variavel $row recebe o conteudo do array gerado pelo banco
        $row = mysqli_fetch_array($resultado);
        //enviar dados recebidos do banco de dados para a sessão iniciada
        $_SESSION["login"] = $row["login"];
        $_SESSION["perfil"] = $row["perfil"];
        $_SESSION["tempo"] = time();
        echo "Seja Bem Vindo! " . $_SESSION['login'];
        //econtrou
        //vou redirecionar o usuario para a pasta do sistema
        if ($_SESSION["perfil"] == "adm") {
            //$logado = $conteudo_adm ;
            // Cria o formulario cadastrar e Alterar Senha
            echo '<br><a href="consultauser.php">Consultar Usuário</a>';
        }
        // Verifica a seção de acordo com o perfíl
        if ($_SESSION["perfil"] == "user") {
            // Variavel $e recebe a linha contendo o email do usuario carregado pelo banco
            
            echo '<h1>Perfil do Usuario</h1>
            <br> <a href="consulta.php">Consultar</a>';
        }
        // Verifica a seção de acordo com o perfíl
        if ($_SESSION["login"] == "0") {
            // Variavel $e recebe a linha contendo o email do usuario carregado pelo banco;
        }
    } else {
        // Cria um alerta informando que o usuário ou senha é inválido
        echo "<script>alert ('Email ou Senha Invalidos!'); location.href='index.php';</script>";
    }
    ?>
    <?php
    // Carrega o conteúdo da sessão email que foi criada no login
 
    echo "<p></p> <a href='logout.php'>Logout</a> </a>";
    ?>
</div>
</body>
</html>
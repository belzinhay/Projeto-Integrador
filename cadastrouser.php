<?php include_once 'topo.php';

// 1- Resgatar os dados vindos do formulário

$nome = $_POST["nome"];
$email = $_POST["email"];
$senha = $_POST["senha"];
$cep = $_POST["cep"];
$rua = $_POST["rua"];
$bairro = $_POST["bairro"];
$cidade = $_POST["cidade"];
$estado= $_POST["uf"];
$ibge = $_POST["ibge"];

//2- Abrir a conexão com o banco de dados

include_once 'conexao.php';

//3- Montar a instrução para gravar o banco
$sql = "insert into usuario values(NULL,'$nome','$email','$senha','$cep','$rua','$bairro','$cidade','$estado','$ibge')";

//4- Gravar - Resultado é boolean (se ok, true, senão false)
$result = mysqli_query($con,$sql);

if($result){
    echo"</br>Gravado com sucesso!";
}else{
    echo"</br>Erro ao gravar";
}
//5- Fechar a conexão com o banco
mysqli_close($con);

include_once 'rodape.php';
?>
<a href="sair.php"> Sair </a>
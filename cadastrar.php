

<?php include_once 'topo.php';

// 1- Resgatar os dados vindos do formulário

$bebida = $_POST["bebida"];
$tipo = $_POST["tipo"];
$valor = $_POST["valor"];
$pais = $_POST["pais"];
$nota = $_POST["nota"];
$comentario = $_POST["comentario"];

//2- Abrir a conexão com o banco de dados

include_once 'conexao.php';

//3- Montar a instrução para gravar o banco
$sql = "insert into produto values(NULL,'".$bebida."','".$tipo."','".$valor."','".$pais."','".$nota."','".$comentario."')";


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
<a href="logout.php"> Sair </a>

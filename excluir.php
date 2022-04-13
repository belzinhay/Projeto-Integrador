<?php 
include_once 'topo.php';

//retirar a decodificação
// base64_decode 
//$id = base64_decode($_GET["id"]);
//echo"id do produto é: ".$id;
$id = $_GET["id"];

//Montar a instrução de apagar no banco de dados

$sql = "delete from produto where idproduto =".$id;

// chamar a conexão

include_once 'conexao.php';

if(mysqli_query($con,$sql)){
    echo"Produto Excluído com Sucesso!";
}else{
    echo"Erro ao Excluir";
}
mysqli_close($con);
include_once 'rodape.php';
?>
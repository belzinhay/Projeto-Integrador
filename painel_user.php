<!DOCTYPE html>
<html lang="pt-br">
<head>    
<meta charset="UTF-8">    
<meta name="viewport" content="width=device-width, initial-scale=1.0">    
<meta http-equiv="X-UA-Compatible" content="ie=edge">    
<title>Painel Usuário</title>    
<style>        
h1{            
    text-align: center;        
}    
</style>
</head>
<body
<?php echo"Seja Bem Vindo(a)!"; ?>
<input id="myInput" type="text" placeholder="Pesquisar..">
<br>
<br>
<table class="table table-dark table-sm table-bordered border-secondary">
<tr>    
<th>Nome</th>    
<th>Ator/Atriz</th>    
<th>Nota</th>
<tr>
<?php while($linha = mysqli_fetch_array($rs)){?>
<tr>    <td><?php echo $linha["Nome"]; ?>
</td>    <td><?php echo $linha["Ator"]; ?>
</td>    <td><?php echo $linha["Nota"];?>
</td>
</tr>
<?php} ?>
<?php session_start();    
if(!isset($_SESSION['Id'])){        
    header("location: index.php");        
    exit;    }
    include_once 'toposairu.php';    
    echo"<br>";    
    echo"<h2>Tabela</h2>";    
    echo"<br>";    
    $con= mysqli_connect ("localhost","root", "","user")  or die ("Erro ao conectar com o banco");          
    
    $sql = "select * from usuario ORDER BY Nome ASC";
         $rs= mysqli_query($con,$sql);
        if(mysqli_num_rows($rs) > 0){         
?>
</table>
<?php}else{    echo"Nenhum personagem cadastrado.";}mysqli_close($con);?>
</body>
</html>
<?php include_once 'topo.php';

include_once 'conexao.php';  
$sql = "select * from usuario ORDER BY nome ASC";    
$rs = mysqli_query($con,$sql);
if(mysqli_num_rows($rs) > 0){ 
?>
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
      <body>
      <style>

    body{
    top:0;
    left:0;
    width:100%;
    height:100%;
    background-image: url('img/bar.jpg');
}
h3{
  color: white;
}
    </style>
</body>
<div class="container">
<br>
<h3>Consulta de Bebidas</h3>
<br>
<table class="table table-dark table-striped">
    <tr>
        <th>Bebida</th>
        <th>Tipo</th>
        <th>Valor</th>
        <th>País</th>
        <th>Nota</th>
        <th>Comentário</th>
    <tr>           
<?php        
while($linha = mysqli_fetch_array($rs)){
?>
    <tr>
    <td><?php echo $linha["bebida"]; ?></td>
    <td><?php echo $linha["tipo"]; ?></td>
    <td><?php echo $linha["valor"]; ?></td>
    <td><?php echo $linha["pais"]; ?></td>
    <td><?php echo $linha["nota"]; ?></td>
    <td><?php echo $linha["comentário"]; ?></td>

    <td><a href = "editar.php?id=<?php echo base64_decode($linha["idproduto"]); ?>">Editar</a></td>
    <td><a href = "excluir.php?id=<?php echo base64_decode($linha["idproduto"]); ?>">Excluir</a></td>
</tr>
</div>
<?php          } ?>
</table>

<?php
}else{
   echo"não existe cadastrado";     
}
mysqli_close($con);
include_once 'rodape.php';
?>
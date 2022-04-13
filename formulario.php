<?php include_once 'topo.php'; ?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark rounded"> 
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="javascript:void(0);" aria-controls="navbarsExample10" aria-expanded="false" aria-label="Toggle navigation" onclick="myFunction()"> 
  <span class="navbar-toggler-icon"></span></button> 
 
  <div class="collapse navbar-collapse justify-content-md-center" id="myLinks"> 
   <ul class="navbar-nav"> 
    <li class="nav-item active"> 
      <a class="nav-link"> <span class="sr-only"></span></a> 
    </li> 
            <li class="nav-item"> 
              <a class="nav-link" href="painel.php"> Menu </a> 
            </li> 
            <li class="nav-item"> 
              <a class="nav-link" href="consulta.php"> Consulta de Bebidas </a> 
            </li> 
            <li class="nav-item"> 
              <a class="nav-link" href="index.php"> Login </a> 
            </li>
            <li class="nav-item"> 
              <a class="nav-link" href="sair.php"> Sair </a> 
            </li>  
          </ul> 
        </div> 
      </nav> 
      <body>

<style>
   body{
    background-image: url('img/bar.jpg');
}h1{
    color: white;
}
</style>
</body>

<div class="container">
<br>
<h3> Cadastro de Produto</h3>

<form action="cadastrar.php" method="post">

Bebida: <br>
<input type="text" name="bebida" id="bebida" class="form-control"/>
</br>
Tipo de Bebida: <br>
<input type="text" name="tipo" id="tipo" class="form-control"/>
</br>
Valor: <br>
<input type="text" name="valor" id="valor" class="form-control"/>
</br>
País: <br>
<input type="text" name="pais" id="pais" class="form-control"/>
</br>
Nota: <br>
<select name="nota" id="nota"/>
    <option value="">Selecione</option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
</select>
<br></br>

Comentario: <br>
<textarea class="form-control" id="comentario" name="comentario" rows="4" cols="50"></textarea>
<br></br>

<input class="btn btn-dark" type="submit" value="Cadastrar Produto" />
<input class="btn btn-dark" type="reset" value="Limpar" />
<ul class="nav justify-content-center">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="sair.php">Sair</a>
  </li>
  </ul>

</form>
<?php include_once 'rodape.php'; ?>
</div>
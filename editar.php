<?php include_once 'topo.php';

//Resgate de dados da URL
$id = base64_decode($_GET["id"]);

// montar a instrução para selecionar o registro na base de dados
$sql = "select * from produto where idproduto =".$id;

//abrir a conexão com o banco
include_once 'conexao.php';

//executar
$rs = mysqli_query($con,$sql);
if(mysqli_num_rows($rs)==1){
    $reg = mysqli_fetch_array($rs);
}
?>
     <style>
   .cadastro{
        margin: auto;
        top: 13%;
        left: 35%;
        width: 30%;
        height: 80%;
        position: absolute;
        transform: translate (-50%,-50%);
        padding: 15px;
        background: #fff;
    }

    body{
    position:absolute;
    top:0;
    left:0;
    width:100%;
    height:100%;
    background-image: url('img/bar.jpg');
    background-size: cover;
    background-repeat: no-repeat;
    
}
.bo{
    padding-left: 100%;
    padding-top: 15px;
}
h3{
  color: white;
}
    </style>
<div class="container">
<h3> Atualizar Produtos </h3>

<form class="formgroup" action="atualizar.php" method="post">

Bebida: <br>
<input type="text" name="bebida" id="bebida" class="form-control" value="<?php echo $reg["bebida"]; ?>"/>
</br>
Tipo de Bebida: <br>
<input type="text" name="tipo" id="tipo" class="form-control" value="<?php echo $reg["tipo"]; ?>"/>
</br>
Valor: <br>
<input type="text" name="valor" id="valor" class="form-control" value="<?php echo $reg["valor"]; ?>"/>
</br>
País: <br>
<input type="text" name="pais" id="pais" class="form-control" value="<?php echo $reg["pais"]; ?>"/>
</br>
Nota: <br>
<select name="nota" id="nota" class="form-control"/>
    <option value="<?php echo $reg["valor"]; ?>"><?php echo $reg["nota"]; ?></option>
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
</select>
<br></br>
<input class="hidden" name ="id" type="text" value="<?php echo $reg["idproduto"];?>"/>
<input type="submit" value="Atualizar Produtos" class="btn btn-dark" />
<input type="reset" value="Limpar Campos" class="btn btn-dark"/>
</form>
</div>
<?php include_once 'rodape.php'; ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script>
<body>
<style>
body{
    background-image: url('img/bar.jpg');
}
h1{
    color: white;
}

</style>
<div class="container">
    
    <main class="form-signin">
    <form class="formgroup" action="login.php" method="post">
    <br><center><h1 class="h3 mb-3 fw-normal"><b>Faça o Seu Login</b></h1></center>
</br>
    <h4>Login:</h4><br>
    <input type= "text" name= "login" class="form-control"></br>
    <h4> Senha:</h4><br>
    <input type= "password" name= "senha" class="form-control"></br>
    <br>

<div class="checkbox mb-3">
<label>
<br>
<input type="checkbox" value="remember-me">Lembra-me</label> 
</div>

<div class="row">
    <div class="col">
    <button class="w-100 btn btn-lg btn-dark" type="submit">Conectar</button>
    </div>

    <div class="col">   
    <button class="w-100 btn btn-lg btn-dark" type="submit">Limpar</button>
    </div>
    <br>
<div class="button">
    <div class="col">   <br>
    
    </div>
    </form>
    
    <button class="w-100 btn btn-lg btn-dark" type="button" onclick="location.href='cadastrarp.php';">Cadastro</button>
    
    </main>
</div>
<?php
if(isset($_GET["msg"])){
echo $_GET["msg"];
}
?>
</body>
</html>
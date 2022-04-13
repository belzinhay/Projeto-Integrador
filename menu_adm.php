<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> 
 
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
    background-image: url('img/bar.jpg');
}
</style>
</body>
      <?php 
      session_start();
      echo "Seja Bem Vindo(a), ".$_SESSION["login"];
      ?>
<br>
      <a href ="formulario.php">Formulario</a>
      <br>
      <a href ="consultauser.php">Consulta</a>

      
      
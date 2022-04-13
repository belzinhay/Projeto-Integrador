<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
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
<script>
function limpa_formulário_cep() {
            //Limpa valores do formulário de cep.
            document.getElementById('rua').value=("");
            document.getElementById('bairro').value=("");
            document.getElementById('cidade').value=("");
            document.getElementById('uf').value=("");
            document.getElementById('ibge').value=("");
    }

    function meu_callback(conteudo) {
        if (!("erro" in conteudo)) {
            //Atualiza os campos com os valores.
            document.getElementById('rua').value=(conteudo.logradouro);
            document.getElementById('bairro').value=(conteudo.bairro);
            document.getElementById('cidade').value=(conteudo.localidade);
            document.getElementById('uf').value=(conteudo.uf);
            document.getElementById('ibge').value=(conteudo.ibge);
        } //end if.
        else {
            //CEP não Encontrado.
            limpa_formulário_cep();
            alert("CEP não encontrado.");
        }
    }
        
    function pesquisacep(valor) {

        //Nova variável "cep" somente com dígitos.
        var cep = valor.replace(/\D/g, '');

        //Verifica se campo cep possui valor informado.
        if (cep != "") {

            //Expressão regular para validar o CEP.
            var validacep = /^[0-9]{8}$/;

            //Valida o formato do CEP.
            if(validacep.test(cep)) {

                //Preenche os campos com "..." enquanto consulta webservice.
                document.getElementById('rua').value="...";
                document.getElementById('bairro').value="...";
                document.getElementById('cidade').value="...";
                document.getElementById('uf').value="...";
                document.getElementById('ibge').value="...";

                //Cria um elemento javascript.
                var script = document.createElement('script');

                //Sincroniza com o callback.
                script.src = 'https://viacep.com.br/ws/'+ cep + '/json/?callback=meu_callback';

                //Insere script no documento e carrega o conteúdo.
                document.body.appendChild(script);

            } //end if.
            else {
                //cep é inválido.
                limpa_formulário_cep();
                alert("Formato de CEP inválido.");
            }
        } //end if.
        else {
            //cep sem valor, limpa formulário.
            limpa_formulário_cep();
        }
    };
   
    var check = function () {
      if (document.getElementById('password').value ==
        document.getElementById('confirm_password').value) {
        document.getElementById('message').style.color = 'green';
        document.getElementById('message').innerHTML = 'Senhas Iguais';
      } else {
        document.getElementById('message').style.color = 'red';
        document.getElementById('message').innerHTML = 'Senhas Diferentes';
      }
    }
  

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;
</script>
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
        color: white;
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
    padding-left: 50%;
    padding-top: 22px;
}

    </style>
</head>

<body>
    <div class="conteudo">

    <div class="cadastro">
    <form  method="POST" class="row g-8">
    <div class="col-md-8">
    Nome: </br>
    <input type="text" name="Nome" class="form-control"/></div>
    <div class="col-md-2">
    Idade: </br>
    <input type="number" name="Idade" class="form-control"  maxlength="10"/></div>
    <div class="col-md-6">
    Login: </br>
    <input type="text" name="Login" class="form-control"/></div>
    <div class="col-md-6">
    Senha: </br>
    <input type="password" name="Senha" id="password" class="form-control" onkeyup="check();"></div>
    <div class="col-md-6">
    Confirmar senha: <br>
    <input type="password" name="confirm_password" id="confirm_password" onkeyup="check();" class="form-control"/></div>
    <br>
    <div class="col-md-6">
        <label>Cep:
        <input name="Cep" type="text" id="cep" value=""  maxlength="9"
        onblur="pesquisacep(this.value);" class="form-control" /></label></div>
        <div class="col-md-10">
        <label>Rua:
        <input name="Rua" type="text" id="rua"  class="form-control"/></label></div>
        <div class="col-md-6">
        <label>Bairro:
        <input name="Bairro" type="text" id="bairro"  class="form-control"/></label>
        <label>Cidade:
        <input name="Cidade" type="text" id="cidade" class="form-control"/></label></div>
        <div class="col-md-4">
        <label>Estado:
        <input name="Estado" type="text" id="uf"  class="form-control"/></label>
        <label>IBGE:
        <input name="Ibge" type="text" id="ibge"  class="form-control"/></label></div>
        <div class="bo">
        <input id="button" type="reset" class="btn btn-dark" value="Limpar"/>
        <input id="button" type="submit" class="btn btn-dark" value="Cadastrar"/> 
        </div>
      </form>
      </div>
</div>
</div>
</body>
</html>
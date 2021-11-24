<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="icon" type="imagem/png" href="/imagen_site/faviconsmoc.png" />
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilo.css">
   
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"
                integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
                crossorigin="anonymous"></script>
    <title>SMOC | Endereço</title>
</head>
<header>
     <nav class="navbar fixed-top navbar-expand-lg navbar-light" style="background-color: #57A0C2;">
        <a href="index.php" class="navbar-brand">
            <img src="imagem_site/logo.png" height="60px" alt="logo*">                
        </a>

        <button class="navbar-toggler" data-toggle="collapse" data-target="#menu">
        	<span class="navbar-toggler-icon"></span>
        </button>

         <!-- LINKS DA NAVBAR -->
        	<div id="menu" class="collapse navbar-collapse">
	            <ul class="navbar-nav ml-md-auto">
	                <li class="nav-item active">
	                    <a class="nav-link" href="nossa_empresa.php">Nossa Empresa </a>
	                </li>
	                <li class="nav-item">
	                    <a class="nav-link" href="fale_conosco.php">Fale Conosco</a>
	                </li>
	            </ul>
	        <div>
	     <!-- ENCERRA LINKS -->
    </nav>
    <!-- ENCERRA NAV -->
</header>

    
       <!-- Adicionando JQuery -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
            integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
            crossorigin="anonymous"></script>

    <!-- Adicionando Javascript -->
    <script type="text/javascript" >

        $(document).ready(function() {

            function limpa_formulário_cep() {
                // Limpa valores do formulário de cep.
                $("#rua").val("");
                $("#bairro").val("");
                $("#nm_cidade").val("");
                $("#nome_uf").val("");
                $("#ibge").val("");
            }
            
            //Quando o campo cep perde o foco.
            $("#cep").blur(function() {

                //Nova variável "cep" somente com dígitos.
                var cep = $(this).val().replace(/\D/g, '');

                //Verifica se campo cep possui valor informado.
                if (cep != "") {

                    //Expressão regular para validar o CEP.
                    var validacep = /^[0-9]{8}$/;

                    //Valida o formato do CEP.
                    if(validacep.test(cep)) {

                        //Preenche os campos com "..." enquanto consulta webservice.
                        $("#rua").val("...");
                        $("#bairro").val("...");
                        $("#nm_cidade").val("...");
                        $("#nome_uf").val("...");
                        $("#ibge").val("...");

                        //Consulta o webservice viacep.com.br/
                        $.getJSON("https://viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {

                            if (!("erro" in dados)) {
                                //Atualiza os campos com os valores da consulta.
                                $("#rua").val(dados.logradouro);
                                $("#bairro").val(dados.bairro);
                                $("#nm_cidade").val(dados.localidade);
                                $("#nome_uf").val(dados.uf);
                                $("#ibge").val(dados.ibge);
                            } //end if.
                            else {
                                //CEP pesquisado não foi encontrado.
                                limpa_formulário_cep();
                                alert("CEP não encontrado.");
                            }
                        });
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
            });
        });

    </script>

<body>
<div class="container">
    <div class="border border-left-0 border-right-0 border-top-0 border-top-0 border-dark">
    	<center><h2 id="bordas_end">Endereço</h2></center>
    </div>

       <h5 style="margin-top: 40px;">Endereço residencial</h5>
       <hr id="hr3">

    <!-- INICIA FORM -->
    <form method="Post" action="cadastrar_endereco.php" enctype="multipart/form-data">

        <div class="form-row">
            <div class="col-md-2 col-sm-5">
                <label style="margin-top: 40px;">CEP</label><br>
            	<input type="text" class="form-control" id="cep" name="cep" placeholder="xxxxx-xxx" required>
            </div>

            <div class="col-md-6 col-sm-5">
                <label style="margin-top: 40px">Endereço</label><br>
            	<input type="text" id="rua" class="form-control" name="rua" placeholder="Endereço" required>
            </div>
        </div>

        <div class="form-row">
            <div class="col-md-2 col-sm-2">
                <label style="margin-top: 40px">Número</label>
                <input type="text" class="form-control" name="numero_casa" placeholder="Número" required>
                
            </div>

            <div class="col-md-2 col-sm-3">
                <label style="margin-top: 40px;">Complemento</label>
                <input type="text" class="form-control" name="complemento" placeholder="Complemento">
            </div>
            <div class="col-md-4 col-sm-3">
                <label style="margin-top: 40px">Bairro</label>
                <input type="text" id="bairro" class="form-control" name="bairro"  placeholder="Bairro" required>
            </div>
        </div>


        <div class="form-row">
            <div class="col-md-3 col-sm-2">
                <label style="margin-top: 10%">Cidade</label><br>
           		<input type="text" id="nm_cidade"class="form-control" name="nm_cidade" placeholder="Cidade" required>     
            </div>

            <div class="col-md-2 col-sm-2">
                <label style="margin-top: 15.5%">Estado</label><br>
                <input type="text" id="nome_uf" class="form-control" name="nome_uf" placeholder="UF" required>     
            </div>
        </div>

        <div class="form-row">
            <div class="col-md-5 col-sm-3">
               <label style="margin-top:13%;">Comprovante de residência</label>
               <input type="file" class="form-control" name="file" id="file" placeholder="example@gmail.com" required>
            </div>
        </div>

        <input type="submit" style="margin-bottom:10px; margin-top:10px; float: right;" value="Próximo" value="Próximo" class="btn btn-lg btn-primary">
    </form>
    <!-- ENCERRA FORM -->

    <!-- <img src="imagem_site/casa_crianca.jpg" id="casa_crianca"> -->
    
</div>

<div class="container" style="margin-top:100px;">
    <div class="progress">
        <div class="progress-bar progress-bar-striped progress-bar-animated" 
          role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 50%;border-radius: 5px;">
        </div>
    </div>     

    <table border="0" width="100%">
        <tr>
            <td height="30px" min-width="5%" id="traco_um"></td>
            <td height="30px" min-width="10%" id="traco_dois"></td>
            <td height="30px" min-width="15%" id="traco_tres"></td>
            <td height="30px" min-width="20%" id="traco_quatro"></td>
            <td height="30px" min-width="25%" id="traco_cinco"></td>
        </tr>
    </table> 

    <table border="0" style="margin-bottom: 50px;" width="100%">
        <tr>
            <td style="font-size: 15px;" width="25%">Creche</td>
            <td style="font-size: 15px;" width="25%">Responsáveis</td> 
            <td style="font-size: 15px;" width="25%">Endereço</td>
            <td style="font-size: 15px;" width="25%">Crianca</td>
            <td style="font-size: 15px;" width="25%">Confirmar</td>
        </tr>
    </table> 
                    
    
</div> 


    
</body>

<footer>

    <!-- JS -->

    
    <script src="bootstrap/js/jquery.js" ></script>
    <script src="bootstrap/js/bootstrap.bundle.min.js" ></script>
    
</footer>
</html>
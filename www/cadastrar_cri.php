<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="icon" type="imagem/png" href="/imagen_site/faviconsmoc.png" />
    
    <title>SMOC | Criança</title>
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

<body>
    <div class="container">
    	<div class="border border-left-0 border-right-0 border-top-0 border-top-0 border-dark">
    	   <center><h2 id="bordas_cri">Criança</h2></center>
    	</div>
           <h5 id="dados_cri">Dados da criança</h5>
           <hr id="hr4">

        <!-- INICIA FORM -->
        <form method="Post" name="formUser" action="cadastro_crianca_banco.php" enctype="multipart/form-data">

            <div class="form-row">
                <div class="col-md-5 col-sm-5">
                    <label style="margin-top: 40px;">Nome da criança</label><br>
                    <input type="text" class="form-control" name="nm_crianca" id="nm_crianca" minlength="3" maxlength="45" required>
                </div>
            </div>

            <div class="form-row">
                <div class="col-md-2 col-sm-2">
                    <label style="margin-top: 40px">Gênero</label>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-4">
                    <input type="radio" name="genero" value="1" style="margin-top: 10px" required>
                        <label>Masculino</label>

                    <input type="radio" name="genero" value="2" style="margin-left: 20px;margin-top: 10px" required>
                         <label>Feminino</label>
                        
                </div>
            </div>

            <div class="form-row">
                <div class="col-md-4">
                    <label style="margin-top:7%;">Data de Nascimento</label>        
                    <input type="date" class="form-control" name="data_nasc" id="data_nasc" min= "2015-01-01"max="2019-12-31" required>
                </div>
            </div>

            <h5 id="dados_cri">Documentos</h5>
            <hr id="hr4">

            <div class="form-row">
                <div class="col-md-5 col-sm-3">
                   <label style="margin-top:7%;">Certidão de nascimento</label>
                   <input type="file" class="form-control" name="file" required> 
                </div>
            </div>

            <div class="form-row">
                <div class="col-md-5 col-sm-3">
                   <label style="margin-top:7%;">Cartão do SUS</label>
                   <input type="file" class="form-control" name="cartao_sus" required>
                </div>
            </div>

            <div class="form-row">
                <div class="col-md-5 col-sm-3">
                   <label style="margin-top:7%;">Vacinas</label>
                   <input type="file" class="form-control" name="vacinas" required>
                </div>
            </div>

            <div class="form-row">
                <div class="col-md-5 col-sm-3">
                   <label style="margin-top:7%;">Imagem 3X4</label>
                   <input type="file" class="form-control" name="imagem_3x4">
                </div>
            </div>
            
            <input type="submit" style="margin-bottom:10px;float: right;"
             value="Próximo"  class="btn btn-lg btn-primary" name="submit" onclick="return validaForm()">
        </form>
        <!-- ENCERRA FORM -->

        <img src="imagem_site/criança_lado.jpg" id="criança_lado">
        <img src="imagem_site/aviao_papel.jpg" id="aviao_papel">
        
    </div>

    <div class="container" style="margin-top:100px;">
        <div class="progress">
            <div class="progress-bar progress-bar-striped progress-bar-animated" 
              role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 75%;border-radius: 5px;">
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

    <script src="js/jquery-3.4.1.min.js" type="text/javascript"></script>
    <script src="js/jquery.mask.min.js" type="text/javascript"></script>
    <script src="js/mascara.js" type="text/javascript"></script>
    <script type="text/javascript">
    	function validaForm(){
            var name = formUser.nm_crianca.value;
            var genero = formUser.genero.value;
            var data = formUser.data_nasc.value;
            var certidao = formUser.file.value;
            var cartao = formUser.cartao_sus.value;
            var vacinas = formUser.vacinas.value;
            var foto = formUser.imagem_3x4.value;

    		if(name == "" || name == null){
    			alert("Preencha o campo nome!");
    			formUser.nm_crianca.focus();
    			return false;
    		}else if(name.length <= 3){
    			alert("Preencha o campo nome com mais de três caracteres!")
    			formUser.nm_crianca.focus();
    			return false;
    		}

    		if(genero == "" || genero == null){
    			alert("Preencha o campo gênero!")
    			formUser.genero.focus();
    			return false;
    		}

            if(data == ""){
                alert("Preencha o campo da data!")
    			formUser.data_nasc.focus();
    			return false;
            }

            if(certidao == ""){
                alert("Envie uma foto da Certidão de Nascimento!")
    			formUser.file.focus();
    			return false;
            }else if(cartao == ""){
                alert("Envie uma foto do Cartão do SUS!")
    			formUser.cartao_sus.focus();
    			return false;
            }else if(vacinas == ""){
                alert("Envie uma foto das vacinas!")
    			formUser.vacinas.focus();
    			return false;
            }else if(foto == ""){
                alert("Envie uma foto da criança!")
    			formUser.imagem_3x4.focus();
    			return false;
            }
        }
    </script>
</footer>
</html>
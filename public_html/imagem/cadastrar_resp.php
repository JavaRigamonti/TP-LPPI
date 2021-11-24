<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="imagem/png" href="/imagen_site/faviconsmoc.png" />
    <script src="js/jquery-3.4.1.min.js" type="text/javascript"> </script>
    <script src="js/jquery.validate.min.js" type="text/javascript"> </script>
    <script src="js/Localization/messages_pt_BR.js" type="text/javascript"></script>
    <script src="js/additional-methods.min.js" type="text/javascript"></script>  
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">.
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script  src="js/jquery.mask.min.js" type="text/javascript"> </script>
    <link rel="stylesheet" href="css/estilo.css">
    <script src="js/mascara.js"type="text/javascript"></script>
    <title>SMOC | Cadastro responsável</title>
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
   	 <center><h2 id="bordas_cad_resp">Dados do Responsável</h2></center>
    </div>
       <h5 id="dado_resp">Dados do Responsavel</h5>
       <hr id="hr2">
    <!-- INICIA FORM -->
    <form method="POST" name="formUser" action="cad_banco_resp.php" enctype="multipart/form-data">
        <div class="form-row">
            <div class="col-md-2 col-sm-5">
                <label style="margin-top: 30px;">Nome</label>
                <input type="text" class="form-control" name="nm_pessoa" id="nm_pessoa" placeholder="Nome" required> 
            </div>

            <div class="col-md-5 col-sm-5">
                <label style="margin-top: 30px;">Sobrenome</label>
                <input type="text" class="form-control" name="sobrenome_pessoa" placeholder="Sobrenome" id="sobrenome_pessoa" required>
            </div>
        </div>

        <div class="form-row">
            <div class="col-md-2 col-sm-2">
                <label style="margin-top: 30px;">Data de Nascimento</label>
                <input type="date" class="form-control" name="dt_nascimento" placeholder="DD/MM/AAAA" min="1950-01-01" max="2019-11-28" required>
                
            </div>

            <div class="col-md-2 col-sm-3">
                <label style="margin-top: 30px;">Telefone de Contato</label>
                <input type="text" class="form-control" id="addd" name="addd" placeholder="(ddd)">
            </div>
            <div class="col-md-2 col-sm-3">
                <label style="margin-top: 47px"></label>
                <input type="text" class="form-control" id="telefone" name="telefone" placeholder="xxxxx-xxxx" required>
            </div>
        </div>


        <div class="form-row">
            <div class="col-md-2 col-sm-2">
                <label style="margin-top:30px;">RG</label>
                <input type="text" class="form-control" name="rg" id="rg" placeholder="xx-xxx-xxx-xx" required>
            </div>
        </div>
        <div class="form-row">
             <div class="col-md-2 col-sm-3">
                <label style="margin-top:30px;">CPF</label>
                <input type="text" class="form-control" name="cpf" id="cpf" placeholder="xxx-xxx-xxx-xx" onsubmit="return validarCPF()" required>
            </div>
        </div>

        <div class="form-row">
            <div class="col-md-5 col-sm-3">
               <label style="margin-top:30px;">E-mail</label>
               <input type="email" class="form-control" name="email" placeholder="example@gmail.com" required>
            </div>
        </div>

        <div class="form-row">
            <div class="col-md-4 col-sm-3">
               <label style="margin-top:30px;">Comprovante de trabalho</label>
               <input type="file" class="form-control" name="file" required>
            </div>
        </div>

        <input type="submit" style="margin-bottom:10px; margin-top:10px; float: right;" value="Próximo" class="btn btn-lg btn-primary" onclick=" return validaForm()">
    </form>
<!--
    <img src="imagem_site/menino_telefone.jpg" id="menino_telefone" >
    <img src="imagem_site/menina_bico.jpg" id="menina_bico" > -->

</div>

<div class="container" style="margin-top:100px;">
    <div class="progress">
        <div class="progress-bar progress-bar-striped progress-bar-animated" 
          role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 25%;border-radius: 5px;">
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
    <!-- <script src="bootstrap/js/jquery.js" ></script> -->
    <script src="bootstrap/js/bootstrap.bundle.min.js" ></script>
    <script type="text/javascript">
    	function validaForm(){
    		var name = formUser.nm_pessoa.value;
            var sobrenome = formUser.sobrenome_pessoa.value;
            var data = formUser.dt_nascimento.value;
            var ddd = formUser.addd.value;
            var telefone = formUser.telefone.value;
            var rg = formUser.rg.value;
            var cpf = formUser.cpf.value;
            var email = formUser.email.value;
            var comprovante = formUser.file.value;

    		if(name == "" || name == null){
    			alert("Preencha o campo nome!");
    			formUser.nm_pessoa.focus();
    			return false;
    		}else if(name.length <= 3){
    			alert("Preencha o campo nome com mais de três caracteres!")
    			formUser.nm_pessoa.focus();
    			return false;
    		}

    		if(sobrenome == "" || sobrenome == null){
    			alert("Preencha o campo sobrenomenome!")
    			formUser.sobrenome_pessoa.focus();
    			return false;
    		}else if(sobrenome.length <= 3){
                alert("Preencha o campo sobrenome com mais de três caracteres!")
    			formUser.sobrenome_pessoa.focus();
    			return false;
            }

            if(data == ""){
                alert("Preencha o campo da data!")
    			formUser.dt_nascimento.focus();
    			return false;
            }

            if(ddd == ""){
                alert("Preencha o campo DDD!")
    			formUser.ddd.focus();
    			return false;
            }else if(telefone == ""){
                alert("Preencha o campo Telefone!")
    			formUser.telefone.focus();
    			return false;
            }

            if(rg == ""){
                alert("Preencha o campo RG!")
    			formUser.rg.focus();
    			return false;
            }

            if(cpf == ""){
                alert("Preencha o campo CPF!")
    			formUser.cpf.focus();
    			return false;
            }

            if(email == ""){
                alert("Preencha o campo E-mail!")
    			formUser.email.focus();
    			return false;
            }

            if(comprovante == ""){
                alert("Envie uma foto do comprovante!")
    			formUser.file.focus();
    			return false;
            }
        }
    </script>
    
</footer>
</html>
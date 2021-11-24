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
    <title>SMOC | Esqueci a minha senha</title>
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
	                <li class="nav-item">
	                    <a class="nav-link" href="crechess.php">Cadastre aqui!</a>
	                </li>
	            </ul>
	        <div>
	     <!-- ENCERRA LINKS -->
    </nav>
    <!-- ENCERRA NAV -->
</header>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
            	<div class="border border-left-0 border-right-0 border-top-0 border-top-0 border-dark">
    			<center><h2 id="bordas_end">Esqueci a senha</h2></center>
    		</div>
    		
                <h5 id="recu_senha">Recuperar a minha senha</h5>
                <hr id="hr14">
            </div>
        </div>

        <div class="form-row">
            <div class="col-md-5">
                <label style="margin-top:30px;">E-mail</label>
                <input type="text" class="form-control">
            </div>

            <div class="col-md-">
                <label style="margin-top:76px;"></label>
                <button class="btn btn-primary" data-toggle="modal" data-target="#conteudoModal">Enviar</button>
            </div>
        </div>
    </div>

    <!-- MODAL, ALTERAR NO PHP PARA AS TELAS DE ERRO! -->

    <div id="conteudoModal" class="modal fade"> <!-- puxando o id do Botão de cima -->
        <div class="modal-dialog"> <!-- começa modal -->
            <div class="modal-content"> <!-- conteudo modal -->

                <!-- TÍTULO MODAL -->
                <div class="modal-header"> <!-- cabeçalho modal -->
                    <h4>Enviado!</h4>
                    <button class="close" data-dismiss="modal" arial-label="fechar">
                        <span arial-hidden="true">&times;</span>
                    </button>
                </div>

                <!-- CONTEUDO -->
                <div class="modal-body">
                    <p class="lead">Verifique a sua caixa de entrada do seu E-mail.<br> Se caso não encontrar, procure na caixa de Spam ou digite novamente seu E-mail</p>
                </div>

            </div>
        </div> 
    </div>

    <!-- TERMINA MODAL -->

<footer>
    <!-- JS -->
    <script src="bootstrap/js/jquery.js"></script>
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>

    <script>
    </script>
</footer>

</body>
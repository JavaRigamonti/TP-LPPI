<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--<meta name="viewport" content="width=device-width, initial-scale=1.0">-->
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilo.css">
    <title>SMOC</title>
</head>
<header>
	<!-- INICIA NAV -->
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
<div class="container-fluid">
   <div id="imgfundo">
	    <div id="login">
	    	<!-- INICIA FORM -->
	    	<form method="POST" action="confere_login.php">
		    	<label><h4 style="margin-top: 30px">Faça seu login</h4></label>
				    <img src="imagem_site/carrinhobb.png" height="50px" alt="carrinho_de_bebê"><br>
				    	<div class="form-row">
				    		<div class="col-11">
						   		<div class="form-group">
							      	<input type="text" class="form-control" name="email" placeholder="Email" style="margin-left: 12px" required >
							    </div>
							</div>
						</div>
	
						<div class="form-row">
							<div class="col-11">
							    <input type="password" class="form-control" name="senha" placeholder="Senha" style="margin-left: 10px"  required>
								<small class="form-text text-muted" style="text-align: right;">
									<a id="senha" href="inicio_esqueci_senha.php"><em>Esqueci minha senha</em></a>
								</small>
							</div>
						</div>
					  
					 <input type="submit" name="enviar" class="btn btn-primary" value="Login" id="btn-login" >
					 </input>
	
			    <p id="par3">Ainda não é cadastrado? <a id="cadastro_pg" href="crechess.php">Clique Aqui!</a></p>
			<!-- ENCERRA FORM -->
		 </form>      
	   </div>  	
   </div> 		
</div>
	<div id="fundo"></div>
</body>

<footer>

	<!-- JS -->
	<script src="bootstrap/js/jquery.js" ></script>
	<script src="bootstrap/js/bootstrap.bundle.min.js" ></script>
	
</footer>
</html>
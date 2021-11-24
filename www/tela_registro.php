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
    <title>SMOC | Registro</title>
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
        <center><h2 id="bordas_confi_email">Registro</h2></center>
    </div>

    <form method="POST" action="confirma_registro.php">
      <div class="row">
          <div class="col-md-5">

              <label style="margin-top: 110px;">E-mail</label><br>
              <input type="text" name="email" class="form-control" placeholder="e-mail"> 

          </div>
      </div> 

      <div class="form-row">
          <div class="col-md-5">
             <label style="margin-top: 30px;">Insira a senha</label>
             	<div class="form-group">
	             <input type="password" name="senha" class="form-control" >
	        </div>
	        
	        <div class="form-group">
	        <label">confirme a senha</label>
	             <input type="password" name="Csenha" class="form-control" >
	              <small class="form-text text-muted">A senha deve conter pelo menos 8 caracteres incluindo números</small>
	        </div>
	             
	            
	        

          </div>
      </div> 

      <div class="row">
          <div class="col-md-5">
             <input type="submit" style="margin-top: 30px;"  value="Finalizar cadastro" class="btn btn-lg btn-primary">

          </div>
      </div> 

      <img class="img-fluid" src="imagem_site/crianca_feliz.jpg" id="crianca_feliz">
    

    </form>


        

    
    <!-- ENCERRA FORM -->

    
</div>
</body>

<footer>

    <!-- JS -->
    <script src="bootstrap/js/jquery.js" ></script>
    <script src="bootstrap/js/bootstrap.bundle.min.js" ></script>
    
</footer>
</html>
















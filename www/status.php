<?php


		
		include_once 'conecta_banco.php';
	
			session_start();
			
			$email = $_SESSION['email'];
			
			
			
			$info = $con->query("SELECT info FROM tb_login WHERE login = '$email'");
		        $info2= $info->fetchObject();
		        $confere_info = $info2->info;
		       
			
			if($confere_info == 0)
			{
				header ("Location: index.php");
				
			}
			
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="icon" type="imagem/png" href="/imagen_site/faviconsmoc.png" />
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilo.css">
    <title>SMOC | Status da Matrícula</title>
</head>
<header>
     <nav class="navbar fixed-top navbar-expand-lg navbar-light" style="background-color: #57A0C2;">
        <a href="index.php" class="navbar-brand">
            <img src="imagem_status/logo.png" height="60px" alt="logo*">                
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
<div class="container-fluid">
    <div class="row">
        <div class="col-md-3">
            <div class="list-group">
                <h4  class="list-group-item" href="#" id="itens" style="margin-top: 100px;">
                  <center>Olá, fulano!</center><!-- Chamar o nome do usuario logado -->
                </h4>

                <a class="list-group-item" href="inicio.php">
                  <input type="button" class="btn btn-primary btn-block" name="home" value="Home"style="margin-top: 10px;">
                </a>

                <a class="list-group-item " href="status.php">
                  <input type="button" class="btn btn-success btn-block" name="status_matricula" value="Status da Matrícula"style="margin-top: 10px;">
                </a>

                <a class="list-group-item" href="minha_matricula.php">                                  
                  <input type="button" class="btn btn-primary btn-block" name="sua_matricula" value="Sua Matrícula"style="margin-top: 10px;">
                </a>
					
                <a class="list-group-item list-group-item-danger" href="logout.php"> <!-- list-group-item-action -->
                  <input type="button" class="btn btn-danger btn-block" name="sair" value="Sair"style="margin-top: 10px;">
                </a>    
            </div>
          </div>

        <div class="col-md-8" id="caixa-itens" style="position:relative; height:500px; overflow: auto;">
          <div data-spy="scroll" data-target="#itens" data-offset="0">
            <div class="shadow p-5 mb-5 bg-white rounded">
                <h5 id="status_matricula">Status da matrícula</h5>
                   <hr id="hr5">

                
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" 
                          role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style=" /*width: 50%; aonde será colocado os % */border-radius: 5px">
                        </div>
                    </div>     

                    <table border="0" width="100%">
                        <tr>
                            <td height="30px" width="5%" id="sem_topo1"></td>
                            <td height="30px" width="10%" id="sem_topo2"></td> 
                            <td height="30px" width="15%" id="sem_topo3"></td>
                        </tr>
                    </table> 

                    <table border="0">
                        <tr>
                            <td class="text-left" style="font-size: 15px;" width="5%">Matrícula<br> enviada</td>
                            <td class="text-center" style="font-size: 15px;" width="10%">Aguardando confirmação</td> 
                            <td class="text-right" style="font-size: 15px;" width="5%">Matrícula<br> confirmada</td>
                        </tr>
                    </table> 
            </div>
          </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-8" id="caixa-itens" style="position:relative; height:500px; /*overflow: auto*/">
          <div data-spy="scroll" data-target="#itens" data-offset="0">
            <div class="shadow p-5 mb-5 bg-white rounded" style="margin-top: -20px">
                <h5>Sala de Aula</h5>
                  <hr id="hr6">
                  <label style="margin-top: 30px;">Nome da Turma</label>
                  <input type="text" class="form-control" name="nome_turma" disabled>
                  <small class="form-text text-muted" style="margin-top: 20px;">Obs: Irá aparecer o nome da turma se a matrícula for confirmada.</small>
            </div>
          </div>
          
        </div>
    </div>
</div>


</body>

<footer>

    <!-- JS -->
    <script src="bootstrap/js/jquery.js" ></script>
    <script src="bootstrap/js/bootstrap.bundle.min.js" ></script>
    
    <script>
      $('#caixaLivro').scrollspy({ target: '#itens'})
    </script>

</footer>
</html>
















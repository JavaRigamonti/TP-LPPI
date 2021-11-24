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
			
			
			
		$res= $con->query("SELECT * FROM tb_login where usuario='$nm_pessoa'; ");
		$registro = $res->fetchAll();
		$linhas = sizeof($registro);
		
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
    <title>SMOC | Tela inicial responsável</title>
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
<div class="container-fluid">
    <div class="row">
        <div class="col-md-3">
            <div class="list-group">
                <h4  class="list-group-item" href="#" id="itens" style="margin-top: 100px;">
                			<?php for($i =0 ; $i< $linhas ; $i++)
                			{
                			$cd_login = $registro[$i][0];
					$login=$registro[$i][1];
					$senha = $registro[$i][2];
					$usuario = $registro[$i][3];
					?>
                			
                  <center>Olá, <?php echo "" .$usuario.""; ?></center><!-- Chamar o nome do usuario logado -->
                </h4>
                <?php } ?>

                <a class="list-group-item" >
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
        

        <div class="col-md-8" style="position:relative; height:500px; overflow: auto;">
            <div data-spy="scroll" data-target="#itens" data-offset="0">
                <div class="shadow p-3 mb-5 bg-white rounded">
                	<h2 style="margin-top:200px;margin-left:10px ; margin-right:10px ; ">
                		Nesta página você ficará por dentro do status <br>
                    da matrícula do aluno.
                	</h2>  	
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
















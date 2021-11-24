<?php
			include_once 'conecta_banco.php';
			session_start();
			
			$email = $_SESSION['email'];
			
			$info = $con->query("SELECT info FROM tb_funcionario WHERE login_funcionario = '$email'");
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
    <link rel="icon" type="imagem/png" href="/imagen_site/faviconsmoc.png" />
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilo.css">
    <title>SMOC | Pesquisar</title>
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
                <center>Olá, fulano!</center><!-- Chamar o nome do usuario logado -->
              </h4>

              <a class="list-group-item" href="inicio_funcionario.php">
                <input type="button" class="btn btn-primary btn-block" name="crianca_solicitacao" value="Crianças solicitação" style="margin-top: 10px;">
              </a>

              <a class="list-group-item " href="turmas.php">
                <input type="button" class="btn btn-primary btn-block" name="turmas" value="Turmas"style="margin-top: 10px;">
              </a>

              <a class="list-group-item" href="pesquisar.php">                                  
                <input type="button" class="btn btn-success btn-block" name="pesquisar" value="Pesquisar"style="margin-top: 10px;">
              </a>

              <a class="list-group-item" href="excluir_cadastro.php">                                  
                <input type="button" class="btn btn-warning btn-block" name="excluir_cadastro" value="Excluir cadastro"style="margin-top: 10px;">
              </a>

              <a class="list-group-item list-group-item-danger" href="logout.php"> <!-- list-group-item-action -->
                <input type="button" class="btn btn-danger btn-block" name="sair" value="Sair" 
                style="margin-top: 10px;">
              </a>    
          </div>
        </div>

        <div class="col-md-8" id="caixa-itens" style="position:relative; height:500px; overflow: auto;">
           <div data-spy="scroll" data-target="#itens" data-offset="0">
              <div class="shadow p-5 mb-5 bg-white rounded">
                <h2 id="pesquisar" style="margin-top: 100px;">Pesquisar</h2>
                  <hr id="hr9">
              </div>
           </div>
        </div>
    </div>

    <div class="row">
      <div class="col-md-3"></div>
      <div class="col-md-4" id="caixa-itens" style="position:relative; height:500px; /*overflow: auto*/">
        <div data-spy="scroll" data-target="#itens" data-offset="0">
          <div class="shadow p-5 mb-5 bg-white rounded" style="margin-top: -220px">
            <label>Responsável ou criança</label>
              <hr id="hr10">
              <form method="POST" action="processa_pesquisa.php">
              <select class="form-control" name="selecao">
                <option value="">Selecione</option>
                <option value="1">Responsável</option>
                <option value="2">Criança</option>
              </select>  
          </div>
        </div>
      </div>
      
      <div class="col-md-4" id="caixa-itens" style="position:relative; height:500px; /*overflow: auto*/">
          <div data-spy="scroll" data-target="#itens" data-offset="0">
            <div class="shadow p-5 mb-5 bg-white rounded" style="margin-top: -220px">
              <label>Resultado da Pesquisa</label>
                <hr id="hr12">    
                <table style="width: 100%;" class="table table-bordered ">
                  <thead>
                    <tr style="text-align: center" class="table-active">
                      <th scope="col">Resultado da pesquisa</th>
                    </tr>
                  </thead>

                  <tbody>
                  
                    <tr>
                        <td><strong>Código<strong></td>                        
                    </tr>
                    
                    <tr>
                        <td></td>                        
                    </tr>
                    <tr>
                        <td><strong>Nome<strong></td>                        
                    </tr>
                    
                    <tr>
                        <td></td>                        
                    </tr>
                    
                    <tr>
                    	<td><strong>Sobrenome<strong></td>
                    </tr>
                    
                    <tr>
                        <td></td>                        
                    </tr>
                    
                    <tr>
                    	<td><strong>data de nascimento<strong></td>
                    </tr>
                    
                    <tr>
                        <td></td>                        
                    </tr>
                    
                    <tr>
                    	<td><strong>CPF<strong></td>
                    </tr>
                    
                    <tr>
                        <td></td>                        
                    </tr>
                    
                    <tr>
                    	<td><strong>RG<strong></td>
                    </tr>    
                    
                    <tr>
                        <td></td>                        
                    </tr>                            
                    
                  </tbody>       
                </table>
            </div>
          </div>
       </div>
    </div>

    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-4" id="caixa-itens" style="position:relative; height:500px; /*overflow: auto*/">
          <div data-spy="scroll" data-target="#itens" data-offset="0">
            <div class="shadow p-5 mb-5 bg-white rounded" style="margin-top: -480px">

              <label>Digite a sua pesquisa</label>
                <hr id="hr12">    
                <input type="text" class="form-control" name="pesquisa" >
                <input type="submit" style="margin-top: 50px;" value="Buscar" class="btn btn-lg btn-success">
                </form>
            </div>
          </div>
       </div>

       <div class="col-md-4" id="caixa-itens" style="position:relative; height:500px; /*overflow: auto*/">
       </div>
    </div>
</div>


</body>

<footer>

    <!-- JS -->
    <script src="bootstrap/js/jquery.js" ></script>
    <script src="bootstrap/js/bootstrap.bundle.min.js" ></script>
    
</footer>
</html>

















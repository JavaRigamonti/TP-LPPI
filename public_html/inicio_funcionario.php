<?php
    			include "conecta_banco.php";
 			session_start();
			
            $email = $_SESSION['email'];
            $cd = $_SESSION['cd_crianca'];

            
			
			$info = $con->query("SELECT info FROM tb_funcionario WHERE login_funcionario = '$email'");
		        $info2= $info->fetchObject();
		        $confere_info = $info2->info;
		        	        			
			if($confere_info == 0)
			{
				header ("Location: index.php");	
            }
            
            $res = $con->query("SELECT tm.cd_matricula, tm.data_matricula, tc.nm_crianca FROM tb_matricula as tm JOIN tb_crianca as tc ON tm.cd_crianca = tc.cd_crianca WHERE tm.status_matricula = 'Pendente'");
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
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="icon" type="imagem/png" href="/imagen_site/faviconsmoc.png" />
    <link rel="stylesheet" href="css/estilo.css">
    <title>SMOC | Solicitação de Matricula</title>
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

              <a class="list-group-item">
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


                <form  method="POST" action="logout.php">
              <a class="list-group-item list-group-item-danger" href="logout.php"> <!-- list-group-item-action -->
                <input type="submit" class="btn btn-danger btn-block" name="sair" value="Sair" 
                style="margin-top: 10px;">
              </form>
              </a>    
          </div>
        </div>

        <div class="col-md-9" id="caixa-itens" style="position:relative; height:500px; overflow: auto;">
          <div data-spy="scroll" data-target="#itens" data-offset="0">

            <div class="shadow p-5 mb-5 bg-white rounded" style="margin-top: 100px">
              <h5 id="sua_matricula" style="margin-top: 1px;">Solicitação de matrícula</h5>
                 <hr id="hr7_solic_matri">
                 
                 <div class="table-responsive">
                    <table style="width: 90%;" class="table table-bordered">
                        <thead style="text-align: center" >
                          <tr class="table-active">
                            <th><strong>Cadastro</strong></th>
                            <th><strong>Nome </strong></th>
                            <th><strong>Data da matricula </strong></th>
                            <th><strong>Visualizar matricula </strong></th>
                            <th><strong>Conclusão</strong></th>
                          </tr>
                        </thead>

                        <tbody>
                        <form action="desaprova_usuario.php" method="Post">
                              <?php
                                for($i=0;$i<$linhas;$i++)
                                {
                                   $cd_matricula = $registro[$i][0];
                                   //$dt_matricula = $registro[$i][1];
                                   $nm_crianca = $registro[$i][2];
                                   
                                   
                              ?>
                              <?php echo "<tr>";
                              echo "<td> $cd_matricula</td>"; 
                              ?> <!-- numero inscrição -->
                             <?php  if($nm_crianca != "")
                                            echo "<td>".$nm_crianca."</td>";
                                        else
                                            echo "teste"; ?>
                             <!-- nome -->
                            
                            <?php 
                               $dt_matricula = date ("Y-m-d");
                               $dt_nasc_crianca = str_replace("-", "", $dt_matricula);
                               $ano = substr($dt_nasc_crianca, 0, 4);
                               $mes = substr($dt_nasc_crianca, 4, 2);
                               $dia = substr($dt_nasc_crianca, 6);
                              //echo $dt_nasc_crianca . "  " . $mes;
                              echo "<td>".$dia. "/". $mes ."/" . $ano."</td>";

                            //$dt_matricula; ?></td> <!-- data -->
                            
                            <?php
                            echo "<td>";
                                  echo "<a href='#'><img class='img-fluid' src='imagem_site/pdf.png' width='70px;'></a>";
                            echo "</td>"; 
                            echo "<td>";
                             echo "<input type='hidden' name='matricula' value='$cd_matricula'>"; 
                              echo "<button class='btn btn-outline-success' style='margin-botton:15px;'><a href='confirma_usuario.php?id=$cd_matricula'>Aprova</a></button>";
                              echo "<button class='btn btn-outline-danger'><a href='desaprova_usuario.php?id=$cd_matricula'>desaprova</a></button>";
                              echo "</td></tr>";
                                }
                                ?>                              
                                 <!-- aprovado ou reprovado -->
                               
                            </form>
                        </tbody>       
                    </table>
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
</footer>
</html>
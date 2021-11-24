<?php
		include "conecta_banco.php";
		session_start();
		
	$cd_crianca = $_SESSION['cd_crianca'];
        $cd_pessoa = $_SESSION['cd_pessoa'];
        
        
        // Pegando a creche/bairro escolhido pelo usuário!!
        $nm_bairro_creche = $_SESSION['nm_bairro_creche'];
    	$nm_creche = $_SESSION['nm_creche'];
    
        
        // CONECTANDO CRIANÇA A RESPONSÁVEL ( DEPOIS VER SE VAI FICAR AQUI MESMO!!! )
        $insercao = $con->query("INSERT INTO tb_responsavel_crianca(cd_pessoa, cd_crianca) VALUES ($cd_pessoa, $cd_crianca)");
        
           $data = date ("Y-m-d");
	    $insercao2 = $con->query("INSERT INTO tb_matricula(cd_matricula, data_matricula, status_matricula, cd_crianca) VALUES ( null, $data, 'Pendente', $cd_crianca);");
      

            // INNER JOINS
        // Junção da tabela pessoa, contato e endereço 
		$res=$con->query("SELECT tp.nm_pessoa, tp.sobrenome_pessoa, tp.dt_nascimento, tp.rg, tp.cpf, tp.img_comprovante_trabalho, tc.email, tc.telefone, tc.ddd, te.nm_endereco, te.numero_endereco, te.complemento, te.cep
        FROM tb_pessoa AS tp 
            JOIN tb_contato AS tc ON tp.cd_pessoa = tc.cd_pessoa 
            JOIN tb_endereco AS te ON te.cd_pessoa = tc.cd_pessoa WHERE tp.cd_pessoa = $cd_pessoa;");
		$registro=$res->fetchAll();
        $linhas=sizeof($registro);	

        // Junção da tabela endereço, bairro e cidade    
        $res2=$con->query("SELECT te.img_comp_residencia, tb.nm_bairro, tc.nm_cidade FROM tb_endereco AS te JOIN tb_bairro AS tb 
        ON te.cd_bairro = tb.cd_bairro JOIN tb_cidade AS tc
        ON tb.cd_cidade = tc.cd_cidade
            WHERE te.cd_pessoa = '$cd_pessoa';");
		$registro2=$res2->fetchAll();
        $linhas2=sizeof($registro2);	

        // Junção da tabela responsável, criança    
        $res3 = $con->query("SELECT tc.nm_crianca, tc.genero_crianca, tc.data_nasc, tc.img_certidao_nasc, tc.img_sus, tc.img_vacina, tc.img_3x4 
        FROM tb_responsavel_crianca AS tr JOIN tb_crianca AS tc
	    ON tr.cd_crianca = tc.cd_crianca
    	WHERE tc.cd_crianca = '$cd_crianca';");
        $registro3 = $res3->fetchAll();
        $linhas3 = sizeof($registro3);

		?>

<!DOCTYPE html>
<html>
<head>
<!-- Tem que terminar esse arquivo com as label -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="imagem/png" href="/imagen_site/faviconsmoc.png" />
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilo.css">
    <title>SMOC | Confirmar cadastro</title>
</head>

    <a href="nossa_empresa.php"> Nossa Empresa </a>
    <a href="fale_conosco.php"> Fale Conosco</a>
    <a href="que_somos.php"> O que Somos?</a>
    <a href="creches.php"> Cadastrar Aqui!</a>

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
		<center><h2 id="bordas_confi">Confirmar cadastro</h2></center>
	</div>
	<!-- COMEÇA FORM -->
	<form method="Post" action="envia_email.php">
		<div class="form-row">
			<div class="col-md-4">
				<h5 id="EscoCre" style="margin-top:20px">Escolha a creche</h5>
        	        </div>

        	        <div class="col-md-2">
				<input type="submit" style="margin-top:20px" name="editar" class="btn btn-primary" value="Editar">
        		</div>
        	<hr id="hr1">
        </div>
		<table style="width: 70%; margin-bottom: 50px;" class="table table-bordered ">
			<tbody>
				<tr>
					<td><strong>Bairro</strong></td>
					<td><?php echo $nm_bairro_creche ?></td>
				</tr>
				<tr>
					<td><strong>Nome da Creche</strong></td>
					<td><?php echo $nm_creche ?></td>
				</tr>
			<tbody>				
		</table>

		<div class="form-row">
			<div class="col-md-4">
				<h5>Dados do Responsavel</h5>
        	</div>

        	<div class="col-md-2">
				<input type="submit" name="editar" class="btn btn-primary" value="Editar">
        	</div>
        	<hr id="hr2">
        </div>
		<div class="table-responsive">
			<table style="width: 70%; margin-bottom: 50px;" class="table table-bordered ">
				<tbody>
					<tr>
						<!--  for -->
				<?php
					for($i=0; $i<$linhas; $i++)
					{
						$nome = $registro[$i][0];
						$sobre_nome=$registro[$i][1];
						$data = $registro[$i][2];
						$rg = $registro[$i][3];
						$cpf = $registro[$i][4];
						$img = $registro[$i][5];
	
						$email = $registro[$i][6];
						$telefone = $registro[$i][7];
						$ddd = $registro[$i][8];
	
						$nm_endereco = $registro[$i][9];
						$numero = $registro[$i][10];
						$complemento = $registro[$i][11];
						$cep = $registro[$i][12];					
					
				?> 
						<td><strong>Nome</strong></td>
						<td><?php echo $nome ?> </td>
					</tr>
					<tr>
						<td><strong>Sobrenome</strong></td>
						<td> <?php echo "" .$sobre_nome. ""; ?></td>
					</tr>
					<tr>
						<td><strong>Data de Nascimento</strong></td>
						<td> <?php echo "" .$data. ""; ?></td>
					</tr>
					<tr>
						<td><strong>RG</strong></td>
						<td> <?php echo "" .$rg. ""; ?></td>
					</tr>
					<tr>
						<td><strong>CPF</strong></td>
						<td> <?php echo "" .$cpf. ""; ?></td>
					</tr>
					
					<tr>
						<td><strong>DDD</strong></td>
						<td> <?php echo "" .$ddd. ""; ?></td>
					</tr>
					<tr>
						<td><strong>Telefone</strong></td>
						<td>
							<?php echo "" .$telefone. ""; ?>
						</td>
					</tr>
					<tr>
						<td><strong>E-mail</strong></td>
						<td>
							<?php echo "" . $email . "";?>
						</td>
						 
					</tr>
					<tr>
						<td><strong>Comprovante de trabalho</strong></td>
						<td><?php echo "". $img . ""; ?></td>
						
					</tr>
				<tbody>	
			</table>
		</div>

		<div class="form-row">
			<div class="col-md-4">
				<h5>Endereço residencial</h5>
        	</div>

        	<div class="col-md-2">
				<input type="submit" name="editar" class="btn btn-primary" value="Editar">
        	</div>
        		<hr id="hr3">
        	</div>
		<div class="table-responsive">
			<table style="width: 70%; margin-bottom: 50px;" class="table table-bordered ">
				<tr>
					<td>CEP</td>
					<td><?php echo "". $cep . ""; ?></td>
					
				</tr>
				<tr>
					<td>Endereço</td>
					<td><?php echo "". $nm_endereco . ""; ?></td>
				</tr>
				<tr>
					<td>Número</td>
					<td><?php echo "". $numero . ""; ?></td>
				</tr>
				<tr>
					<td>Complemento</td>
					<td><?php echo "". $complemento . ""; ?></td>
				</tr>
				<?php } ?>
				<tr>
	                <?php
	                  for($i=0; $i<$linhas2; $i++)
	                  {
	                        $comprovante_foto = $registro2[$i][0];
	                        $nm_bairro = $registro2[$i][1];
	                        $nm_cidade = $registro2[$i][2];
	                ?>
					<td>Bairro</td>
	                <td><?php echo  $nm_bairro ?></td>
				</tr>
				<tr>
					<td>Cidade</td>
	                    <td><?php echo "". $nm_cidade . ""; ?></td>
				</tr>
				<tr>
					<td>Comprovante de Residência</td>
	                <td><?php 
	                    if($comprovante_foto){
	                        echo "". $comprovante_foto . "";
	                    }else{
	                        echo "Não inserido!";
	                    }
	                 ?></td>
	                <?php
	                  }
	                ?>
				</tr>
			</table>
		</div>

		<div class="form-row">
			<div class="col-md-4">
				<h5>Dados da criança</h5>
        	</div>

        	<div class="col-md-2">
				<input type="submit" name="editar" class="btn btn-primary" value="Editar">
        	</div>
        	<hr id="hr4">
        </div>
		<div class="table-responsive">
			<table style="width: 70%;" class="table table-bordered ">
				<tr>
	                <?php
	                    for($i=0; $i<$linhas3; $i++)
	                    {
	                        $nm_crianca = $registro3[$i][0];
	                        $genero_crianca = $registro3[$i][1];
	                        $dt_nasc_crianca = $registro3[$i][2];
	                        $certidao_crianca = $registro3[$i][3];
	                        $cartao_sus_crianca = $registro3[$i][4];
	                        $vacina_crianca = $registro3[$i][5];
	                        $foto_crianca = $registro3[$i][6];
	                        
	                ?>
					<td><strong>Nome</strong></td>
					<td><?php echo $nm_crianca;?></td>
				</tr>
				<tr>
					<td><strong>Gênero</strong></td>
	                <td><?php if($genero_crianca == 1)
	                               	echo "Menino";
	                           else{
	                               echo "Menina";
	                           }
	                         
	                    ?></td>
				</tr>
				<tr>
					<td><strong>Data de Nascimento</strong></td>
	                <td><?php 
	                        $dt_nasc_crianca = str_replace("-", "", $dt_nasc_crianca);
	                        $ano = substr($dt_nasc_crianca, 0, 4);
	                        $mes = substr($dt_nasc_crianca, 4, 2);
	                        $dia = substr($dt_nasc_crianca, 6);
	                        //echo $dt_nasc_crianca . "  " . $mes;
	                        echo $dia . "/" . $mes . "/" . $ano;
	                ?></td>
				</tr>
				<tr>
					<td><strong>Certidão de Nascimento</strong></td>
					<td><?php echo $certidao_crianca;?></td>
				</tr>
				<tr>
					<td><strong>Cartão do SUS</strong></td>
					<td><?php echo $cartao_sus_crianca;?></td>
				</tr>
				<tr>
					<td><strong>Vacinas</strong></td>
					<td><?php echo $vacina_crianca;?></td>
				</tr>
				<tr>
					<td><strong>Foto 3x4</strong></td>
	                <td><?php echo $foto_crianca;?></td>
	                    <?php } ?>
				</tr>
			</table>
		</div>
		<input type="submit" style="margin-bottom:10px;float: right;" value="Próximo" class="btn btn-lg btn-primary">
	</form>

	<!-- ENCERRA FORM -->
</div>

<div class="container" style="margin-top:100px;">
    <div class="progress">
        <div class="progress-bar progress-bar-striped progress-bar-animated" 
          role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 100%;border-radius: 5px;">
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

</html>
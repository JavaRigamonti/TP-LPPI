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
    <title>SMOC | fale conosco</title>
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
<div class="container">
	<div class="border border-left-0 border-right-0 border-top-0 border-top-0 border-dark">
    	<center><h2 id="espaco_topo_fc">Fale conosco</h2></center>
    </div>
    <form method="POST" name="formUser" action="processa_fale_conosco.php">
	    <div class="form-row" style="margin-top: 40px;">    	
	    	<div class="col-md-5">

		    	<label style="margin-top:30px;">Nome Completo</label>
		    	<hr id="hr_fc_1">
		    	<input type="text" class="form-control" name="nm_pessoa" >

		    	<label style="margin-top:30px;">E-mail</label>
		    	<hr id="hr_fc_2">
		    	<input type="text" class="form-control" name="email_pessoa" >

		    	<label style="margin-top:30px;">Telefone</label>
		    	<hr id="hr_fc_3">
		    	<input type="text" class="form-control" name="num_pessoa" >

		    	<label style="margin-top:30px;">Assunto</label>
		    	<hr id="hr_fc_4">
		    	<input type="text" class="form-control" name="assunto_pessoa" > 
		    </div>	
		    <div class="col-md-7"></div>
		</div> 

		<div class="form-row" style="margin-top: 40px; margin-bottom: 40px;">
			<div class="col-md-12">
				<label>Mensagem</label>
			    <hr id="hr_fc_5">
			    <textarea class="form-control" name="mensagem" rows="6" cols="100"></textarea>

			    <input type="submit" style="margin-top:10px;float: right;"  
			    value="enviar" class="btn btn-lg btn-primary" onclick='return validaForm()'>
			</div>
		</div>
	</form>

	<!-- MODAL MODAL MODAL MODAL -->

	<div id="conteudoModal" class="modal fade"> <!-- puxando o id do Botão de cima -->
		<div class="modal-dialog"> <!-- começa modal -->
			<div class="modal-content"> <!-- conteudo modal -->

				<!-- TÍTULO MODAL -->
				<div class="modal-header"> <!-- cabeçalho modal -->
					<h4> Mensagem enviada com sucesso!</h4>
					<button class="close" data-dismiss="modal" arial-label="fechar">
						<span arial-hidden="true">&times;</span>
					</button>
				</div>				
			</div>
		</div> 
	</div>

</div>
</body>

<footer>

	<!-- JS -->
	<script src="bootstrap/js/jquery.js"></script>
	<script src="bootstrap/js/bootstrap.bundle.min.js" ></script>
	
	<script type="text/javascript">

	    	function validaForm(){
	    	    var nome = formUser.nm_pessoa.value;
	            var email= formUser.email_pessoa.value;
	            var telefone = formUser.num_pessoa.value;
	            var assunto = formUser.assunto_pessoa.value;
	            var mensagem_texto = formUser.mensagem.value;
	
	    		if(nome == "" || nm_pessoa == null){
	    			alert("Preencha o campo nome!");
	    			formUser.nome.focus();
	    			return false;
	    		}
	
	    		if(email== "" || email_pessoa.indexOf('@') == -1){
	    			alert("Preencha o campo e-mail!")
	    			formUser.email.focus();
	    			return false;
	    			
	    		}
	    		if(telefone == ""){
	                alert("Preencha o campo do telefone!")
	    			formUser.telefone.focus();
	    			return false;
	            	}
	
	           	if(assunto == ""){
	              	alert("Preencha o campo assunto!")
	    			formUser.assunto.focus();
	    			return false;	
		        }
		        
	           	if(mensagem_texto == ""){
	              	alert("Preencha o campo mensagem!")
	    			formUser.mensagem_texto.focus();
	    			return false;
	    	   	}
	        }
   	 </script>
	
</footer>
</html>
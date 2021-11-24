<?php
        include_once 'conecta_banco.php';
        
?>


<!DOCTYPE html >
<html lang="pt-br">
<head>
    <meta charset="UTF-8">		
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="js/jquery-3.4.1.min.js" type="text/javascript"> </script>
    <script src="js/jquery.validate.min.js" type="text/javascript"> </script>
    <script src="js/localization/messages_pt_BR.js" type="text/javascript"></script>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilo.css">
    <title>SMOC | Escolha a creche</title> 
     
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
    	   <center><h2 id="bordas">Escolha a creche</h2></center>
    	</div>
 
        <h5 id="EscoCre2">Selecione o local da instituição desejada</h5>
        <hr id="hr1">
        <!-- INICIA FORMULARIO -->
        <form method="POST"  name="formUser"  id="formUser" action="cadastrar_creche.php ">
        
        
            <div class="form-row">
                <div class="col-xl-6 col-sm-6">
                
                    <label style="margin-top:30px;">Estado</label><br>
                    <select class="form-control" value="estados" name="estados"id="estados">
                    <option value='0'> Selecione</option>
            <?php
                        $res = $con->query("SELECT * FROM estados ");
                        $registro = $res->fetchAll();
                        $linhas = sizeof($registro);
              
                            for($i =0; $i<$linhas; $i++)
                            {
                                $id = $registro[$i][0];
                                $nome = utf8_encode($registro[$i][1]);
                                
                                ?>
                            
             <option value=""><?php echo "".$nome."" ;?></option> 
          
            <?php } ?>
            </select>                             
    			
              				
              	
               
                    <label  style="margin-top:30px;">Cidade</label>
                    <select class="form-control" name="cidade"id="cidades">
                    <option value='0'> Selecione</option>
                    <?php
                        $res1 = $con->query("SELECT * FROM cidades ");
                        $registro1 = $res1->fetchAll();
                        $linhas1 = sizeof($registro1);
              
                            for($i =0; $i<$linhas1; $i++)
                            {
                                $id = $registro1[$i][0];
                                $nome = utf8_encode($registro1[$i][1]);
                                
                                ?>
                            
             <option value=""><?php echo "".$nome."" ;?></option> 
          
            <?php } ?>
         
                    		
                 </select>
                    
                    
                    
                    

                    <label style="margin-top:30px;">Bairro</label><br>
                    <select class="form-control" name="bairros" id="bairros">
                    <option value="selecione">Selecione</option>

                    
                    <?php
                        $res3 = $con->query("SELECT * FROM tb_bairro ");
                        $registro3 = $res3->fetchAll();
                        $linhas = sizeof($registro3);
              
                            for($i =0; $i<$linhas1; $i++)
                            {
                                $id = $registro3[$i][0];
                                $nome = utf8_encode($registro3[$i][1]);
                                
                                ?>
                            
             		<option value=""><?php echo "".$nome."" ;?></option> 

                    <?php } ?>
                    </select>
                        <!--FIM FOR-->
                        
                    <h5 id="EscoCre2">Selecione a creche presente nessa região</h5>
                    <hr id="hr11">

                    <label style="margin-top:30px;">Creche</label>
                    <select class="form-control" name="creches" required>
                        <option value="0">Selecione</option>
                        <?php
                        for($i=0; $i < $linhas; $i++ )
                        {
                            $nm_escola = utf8_encode($registro[$i][0]);
     
                        ?>
 
                        <option id="creche"value="<?php echo $nm_escola; ?>" required><?php echo "". $nm_escola. ""?></option>
                       <?php } ?>
                    </select>
                </div>
            </div>
            <input type="submit" style="margin-bottom:10px; margin-top:10px; float: right;" value="Próximo" class="btn btn-lg btn-primary">
        </form>
                    <!-- TERMINA FORMULARIO -->
<!--    <img src="imagem/sorvete.jpg" id="sorvete" height="350px" class="rounded">     -->
</div>  

<div class="container" style="margin-top:100px;">
    <div class="progress">
        <div class="progress-bar progress-bar-striped progress-bar-animated" 
          role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 0%;border-radius: 5px;">
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
 
                        $(#estados).on("change",function(){
                            var idEstado = $("#estados").val();
                        $.ajax({
                            url:'mostra_cidade.php',
                            type:'POST',
                            data:{id:idEstado},
                            success: function(data){
                                $(#cidades).html(data);

                            }
                        });

                        });

                    
        // Validação dos dados com JavaScript. 
        function validaForm(){
            var estado = formUser.estados.value;  

            if(estado == ""){
                alert("Preencha o campo nome!");
                formUser.estados.focus();
                return false;
            }else if(name.length <= 3){
                alert("Insira mais que três caracteres!");s
                return;
            }

            if(genero == ""){
                alert("Escolha um gênero!");
                formUser.genero.focus();
                return false;
            }

            if(data_nascimento == ""){
                alert("Insira uma data de nascimento!");
                return;
            }

            // Fotos

            if(certidao == ""){
                alert("Insira a foto de Certidão de nascimento!");
                return;
            }

            if(cartao_sus == ""){
                alert("Insira a foto do Cartão do SUS!");
                return;
            }

            if(vacinas == ""){
                alert("Insira a foto da vacina!");
                return;
            }

            if(foto_3x4 == ""){
                alert("Insira a foto 3x4!");
                return;
            }
        }

    </script>
    
</footer>
</html>
     
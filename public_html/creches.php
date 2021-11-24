<!DOCTYPE html >
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
<?php
        include "conecta_banco.php";
        $codigo = $_COOKIE['cd_pessoa'];

       $res=$con->query("SELECT nm_escola from tb_escola;");
       $registro=$res->fetchAll();
       $linhas=sizeof($registro);  

           $res2=$con->query("SELECT tf.nm_uf, tc.nm_cidade, tb.nm_bairro FROM tb_uf as tf JOIN tb_cidade as tc
                                ON tf.cd_uf = tc.cd_uf
                               JOIN tb_bairro as tb 
                               ON tc.cd_cidade = tb.cd_cidade;");
      	    $registro2=$res2->fetchAll();        
           $linhas2=sizeof($registro2);
           
           
    ?>     
     
            
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="js/jquery-3.4.1.min.js" type="text/javascript"> </script>
    <link rel="icon" type="imagem/png" href="/imagen_site/faviconsmoc.png" />
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
        <center><h2 id="bordas">Escolha a creche</h2></center>
        <h5 id="EscoCre2">Selecione o local da instituição desejada</h5>
        <hr id="hr1">
        <!-- INICIA FORMULARIO -->
        <form method="POST"  name="formUser"  id="formUser" action="cadastrar_creche.php ">
            <div class="form-row">
                <div class="col-xl-6 col-sm-6">
                    <label style="margin-top:30px;">Estado</label><br>
                    <select class="form-control" name="estados" id="estados" required>
                    <option value="0">Escolha o estado</option>
                        <!--Inicio FOR-->
                        <?php  
                                for($i=0 ; $i< $linhas2; $i++)
                                {
                                    $nm_uf= utf8_encode($registro2[$i][0]);
     
                        ?>

                    <option id="estado "value="<?php echo $nm_uf; ?>" required><?php echo "" .$nm_uf. ""?></option>
                             <?php } ?>
                    
                    
                    </select>
              
              
               
                    <label  style="margin-top:30px;">Cidade</label>
                    <select class="form-control" name="cidades"id="cidades" required>
                    <option value="0">Selecione</option>
                    <?php 
                    		
                                for($i=0 ; $i< $linhas2; $i++)
                                {
                                    $nm_cidade = utf8_encode($registro2[$i][1]);
                               
                                
     //$query = $this->db->query(" select * from tb_cidade where cd_cidade = '$cd_uf' ");


                        ?>

                    <option id="cidades" value="<?php echo $nm_cidade; ?>"><?php echo "" .$nm_cidade. ""?></option>
                             <?php  }?>
                    </select>

                    <label style="margin-top:30px;">Bairro</label><br>
                    <select class="form-control" name="bairros" id="bairros" required>
                    <option value="0">Selecione</option>

                    <?php
                            for($i=0; $i < $linhas2; $i++)
                            {
                                $nm_bairro = utf8_encode($registro2[$i][2]);
                    ?>
                    <option id="bairro" value="<?php echo $nm_bairro; ?>"><?php echo "" .$nm_bairro. ""?></option>

                    <?php  } ?>?>
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
            <input type="submit" style="margin-bottom:10px; margin-top:10px; float: right;" value="Próximo" class="btn btn-lg btn-primary" onclick="return validar()">
        </form>
                    <!-- TERMINA FORMULARIO -->
<!--    <img src="imagem_site/sorvete.jpg" id="sorvete" height="350px" class="rounded">     -->
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
        function validar(){
            var estado = formUser.estado.value;

            alert(estado);
        }
    </script> 
</footer>
</html>

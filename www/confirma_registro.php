<?php
            include_once 'conecta_banco.php';
		$email = isset($_POST["email"]) ? $_POST["email"] : '';
    $senha = isset($_POST["senha"]) ? $_POST["senha"] : '';
    $Csenha = isset($_POST["Csenha"]) ? $_POST["Csenha"] : '';
  	
  	session_start();
  	$codigo_pessoa = $_SESSION['cd_pessoa'];
  	$nm_pessoa = $_SESSION['nm_pessoa'];
  	
 		
                              		
				  	if($senha == $Csenha)
				  	{
				  			$res = $con->query("INSERT INTO tb_login( cd_login , login, senha, usuario, info, cd_pessoa) VALUES(null , '$email', '$senha', '$nm_pessoa', 0 ,'$codigo_pessoa')");
				  				
				  			header("Location: index.php");
				  	}
				  	
				  	?>
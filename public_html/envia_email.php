<?php
	include_once 'conecta_banco.php';    	
        require 'vendor/autoload.php';
        	

			$res = $con->query("SELECT * FROM tb_contato");
			$registro=$res->fetchAll();
        $linhas=sizeof($registro);
 for($i =0 ; $i<$linhas ; $i++)
        {
        	$cd_contato = $registro[$i][0];
        	$email = $registro[$i][1];
        	}

ini_set('display_errors', 1);

error_reporting(E_ALL);

$from = "suporte@universesmoc.com";

$to = "$email";

$subject = "Confirmação de Matrícula";

$message =  "Olá, tudo bem? 

Este é email é para você confirmar a matrícula da sua criança.
É só clicar no link abaixo:            
           
            
https://universesmoc.com/tela_registro.php";
            
$headers = "De:". $from;

mail($to, $subject, $message, $headers);

header("location:confirma_email.php");


		
?>






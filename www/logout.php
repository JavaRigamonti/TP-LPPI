<?php
        include "conecta_banco.php";
        //  $email = $_POST["email"];
        //   $senha = $_POST["senha"];
	session_start();
	$email = $_SESSION['email'];
	
	

   setcookie("email");
   setcookie("senha");
   setcookie("cd_pessoa");
			session_destroy();  
			$res3 =  $con->query("UPDATE tb_login SET info = 0 WHERE login = '$email';");    
			
			$res4 =  $con->query("UPDATE tb_funcionario SET info = 0 WHERE login_funcionario = '$email';");   
			
		
		

        //  $res = $con->query("SELECT statuss from  usuario  where statuss='1' ");
        //          $registros=$res->fetchAll();
        //          $linhas = sizeof($registros);

                       
                        //     $con->query("UPDATE usuario SET statuss ='0' where statuss = '1'"); 
                        //     // direciona para a p�gina inicial dos usu�rios cadastrados
                            header ("Location: index.php");
                        
                ?>
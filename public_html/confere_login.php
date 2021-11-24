<?php
        include "conecta_banco.php";
                 $email= $_POST["email"];
                 $senha = $_POST["senha"];
                              $res2 = $con->query("SELECT * FROM tb_login  where login='$email' and senha='$senha'");
                              $registro2=$res2->fetchAll();
                              $linhas2 = sizeof($registro2);
                              
                              $res = $con->query("SELECT * FROM tb_funcionario  where login_funcionario ='$email' and senha='$senha'");
                              $registro=$res->fetchAll();
                              $linhas = sizeof($registro);
                              
                              
		                $codigo= $con->query("SELECT tr.cd_crianca FROM tb_responsavel_crianca as tr JOIN tb_login as tl
		                ON tr.cd_pessoa = tl.cd_pessoa
		                    WHERE tl.login = '$email';");
		                    
		                $codigo2= $codigo->fetchObject();
		                $cd_crianca = $codigo2->cd_crianca;
		
							
		                setcookie("cd_crianca", $cd_crianca); 
                  
                              
                              if($linhas != 0  && $linhas2 == 0)
                              {
                              					session_start();
						$_SESSION["email"] = $email;
						
						
						$res4 =  $con->query("UPDATE tb_funcionario  SET info = 2 WHERE login_funcionario = '$email';");
						
                              	header("Location: inicio_funcionario.php");
			      }
                              		
					
				
				if($linhas == 0 && $linhas2 !=0)
				{
						session_start();
						$_SESSION["email"] = $email;
						
						$res3 =  $con->query("UPDATE tb_login SET info = 1 WHERE login = '$email';");
						
							
                			header ("Location: inicio.php");
				}	
				if($linhas == 0 && $linhas2 ==0)
				{
						
				
				
                header ("Location: index.php");
				}	



						?>
					
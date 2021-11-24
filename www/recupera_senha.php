<?php 
				$email  = $_POST['email'];


				$res = $con->query("SELECT * FROM tb_contato where email= '$email'");
						$registro = $res->fetchAll();
						$linhas = sizeof($registro);

						if ($linhas !=0) 
						{
									ini_set('display_errors', 1);

error_reporting(E_ALL);

$from = "$suporte@universesmoc.com";

$to = "$email";

$subject = "Erro senha ";

$message = "O correio do PHP funciona bem";

$headers = "De:". $from;

mail($to, $subject, $message, $headers);

echo "A mensagem de e-mail foi enviada.";
						}
			
?>
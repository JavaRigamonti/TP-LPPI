<?php
	$nm_pessoa = $_POST['nm_pessoa'];
	$email_pessoa = $_POST['email_pessoa'];
	$num_pessoa = $_POST['num_pessoa'];
        $assunto_pessoa = $_POST['assunto_pessoa'];
        $mensagem = $_POST['mensagem'];
        	
        require 'vendor/autoload.php';

        $from = new SendGrid\Email(null, $email_pessoa);
        $subject = "Mensagem de contato";
        $to = new SendGrid\Email(null, "suporte@universesmoc.com");
        $content = new SendGrid\Content("text/html", 
            "Olá equipe Universe!, 
            <br><br>
            Nova mensagem de contato
            <br><br>
            Nome: $nm_pessoa <br>
            Email: $email_pessoa <br>
            Numero de Contato: $num_pessoa <br>
            Assunto tratado: $assunto_pessoa <br><br>
            Mensagem: <br> $mensagem");

        $mail = new SendGrid\Mail($from, $subject, $to, $content);
        
        //Necessário inserir a chave
        $apiKey = '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';
        $sg = new \SendGrid($apiKey);

        $response = $sg->client->mail()->send()->post($mail);
	
        header("location:fale_conosco.php");
?>


<?php
date_default_timezone_set("America/Sao_Paulo");
if(IsSet($_COOKIE["email"]))
    $login= $_COOKIE["email"];
if(IsSet($_COOKIE["senha"]))
    $senha = $_COOKIE["senha"];

if(!(empty($login) OR empty($senha)))
{
    include "conecta_banco.inc";

	$res = $con->query("SELECT * FROM login WHERE email ='$login' and senha='$senha'");
	$registros=$res->fetchAll();

	if(sizeof($registros)==0)
	{
        setcookie("email");
        setcookie("senha");
        echo "Voc� n�o efetuou o LOGIN!";
        exit;
    }
}
else
{
    echo "Voc� n�o efetuou o LOGIN!";
    exit;
}

$con=null;
?>

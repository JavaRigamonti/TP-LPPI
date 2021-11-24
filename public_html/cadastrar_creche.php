<?php

include 'conecta_banco.php';
$estado= isset($_POST["estados"]) ? $_POST["estados"] : '';
$cidade = isset($_POST["cidades"]) ? $_POST["cidades"] : '';
$bairro = isset($_POST["bairros"]) ? $_POST["bairros"] : '';


// Vai ser usado depois, para ser inserido na tabela matricula_escola, vai filtrar com ESTA variável, para pegar o código da escola e INSERIR NO BANCO!!!
$nm_creche = isset($_POST["creches"]) ? $_POST["creches"] : '';
session_start();

$_SESSION["nm_creche"] = $nm_creche;
$_SESSION["nm_bairro_creche"] = $bairro;
	
// fazendo o insert no banco 

$res = $con->query("INSERT INTO tb_crianca(nm_crianca, data_nasc, img_sus, img_vacina, img_certidao_nasc, img_3x4, genero_crianca)
        VALUES('$', '$', '$', '$', '$', '$', '$')");
header("location:cadastrar_resp.php");

?>




<?php
    $servidor ="127.0.0.1";
    $usuario_bd="unive271_smoc";
    $senha_bd="m2aocoh1do";
    $banco = "unive271_projeto_tcc";
$con = new PDO("mysql:host=$servidor;dbname=$banco", $usuario_bd, $senha_bd);
?>
<?php
    include_once 'conecta_banco.php';
    $codigo = $_GET['id'];
    
    $res = $con->query("UPDATE tb_matricula SET status_matricula = 'Aprovada' WHERE cd_matricula = '$codigo';");
   
    if($res){
        echo "<script>alert('Matricula confirmada com sucesso!')</script>";
        echo "<script>window.location.href='inicio_funcionario.php'</script>";
    }else{
        echo "<script>alert('Erro ao tentar aprovar matricula!')</script>";
        echo "<script>window.location.href='inicio_funcionario.php'</script>";
       // header("Location: inicio_funcionario.php");
    }
?>
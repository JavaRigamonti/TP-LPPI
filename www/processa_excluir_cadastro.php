<?php
			include_once 'conecta_banco.php';

            $pesquisa = $_POST["pesquisa"];
            $res = $con->query("DELETE FROM tb_matricula WHERE cd_matricula = '$pesquisa'");
           
            if($res){
                echo "<script>alert('Matricula excluida com sucesso!')</script>";
                echo "<script>window.location.href='excluir_cadastro.php'</script>";
            }else{
                echo "<script>alert('Erro ao tentar excluir matricula!')</script>";
                echo "<script>window.location.href='excluir_cadastro.php'</script>";
               // header("Location: inicio_funcionario.php");
            }
?>
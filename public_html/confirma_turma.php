<?php
    include 'conecta_banco.php';
    $cd = $_GET['cd'];

    $res = $con->query("INSERT INTO tb_matricula_escola_turma(cd_matricula, cd_escola, cd_turma) 
            VALUES('$cd', '0', '0')");
    if($res){
    	$res2 = $con->query("UPDATE tb_matricula SET status_matricula = 'Enviada' WHERE cd_matricula = '$cd';");
        echo "<script>alert('Matricula enviada com sucesso!')</script>";
        echo "<script>window.location.href='turmas.php'</script>";
    }else{
        echo "<script>alert('Erro ao tentar enviar matricula!')</script>";
        echo "<script>window.location.href='turmas.php'</script>";
    }
?>
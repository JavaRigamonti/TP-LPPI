<?php
    include_once 'conecta_banco.php';
   
    $codigo = $_GET['id'];
    $res = $con->query("UPDATE tb_matricula SET status_matricula = 'Reprovada' WHERE cd_matricula = '$codigo';");
   
   	 if($res){
   	 	echo "<script>alert('Matricula reprovada com sucesso!')</script>";
   	 	echo "<script>window.location.href='inicio_funcionario.php'</script>";
   	 }else{
   	 	echo "<script>alert('Erro ao reprovar matricula!')</script>";
   	 	echo "<script>window.location.href='inicio_funcionario.php'</script>";
   	 } 
?>




















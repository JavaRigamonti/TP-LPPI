<?php
require_once 'conecta_banco.php';


$nm_pessoa = isset($_POST['nm_pessoa']) ? $_POST['nm_pessoa'] : null;
$sobrenome_pessoa = isset($_POST['sobrenome_pessoa']) ? $_POST['sobrenome_pessoa'] :null;
$dt_nascimento = isset($_POST['dt_nascimento']) ? $_POST['dt_nascimento'] : null;


$cpf = isset($_POST['cpf']) ? $_POST['cpf'] : null;
$rg = isset($_POST['rg']) ? $_POST['rg'] : null;

$email = isset($_POST['email']) ? $_POST['email'] : 'null';
  $telefone = isset($_POST['telefone']) ? $_POST['telefone'] : 'null';
  $ddd = isset($_POST['addd']) ? $_POST['addd'] : 'mull';


// Foto;;
$comprovante = $_FILES['file']['name'];

//tb_contato
	  $cpf = str_replace(".", "", $cpf);
        $cpf_r = str_replace("-", "", $cpf);
        $rg = str_replace(".", "", $rg);
        $rg_r = str_replace("-", "", $rg);


  $res = $con->query("INSERT INTO tb_pessoa(cd_pessoa, nm_pessoa, sobrenome_pessoa, dt_nascimento, cpf , rg, img_comprovante_trabalho )
  VALUES(null, '$nm_pessoa', '$sobrenome_pessoa', '$dt_nascimento', '$cpf_r', '$rg_r','$comprovante')");
  
   $codigo= $con->query("SELECT cd_pessoa FROM tb_pessoa WHERE cpf = '$cpf_r';");
    $codigo2= $codigo->fetchObject();
    $cd_pessoa = $codigo2->cd_pessoa;
    
    session_start();
    
    $_SESSION['cd_pessoa'] = $cd_pessoa;
    $_SESSION['nm_pessoa']= $nm_pessoa;
  
  $res1 = $con->query("INSERT INTO  tb_contato(cd_contato, email, telefone, ddd, cd_pessoa)
  VALUES(null, '$email', '$telefone','$ddd', '$cd_pessoa')");	
  
  
   header("Location: endereco.php");
     
?>

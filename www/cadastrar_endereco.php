<?php
    require_once 'conecta_banco.php';
    $cep = isset($_POST['cep']) ? $_POST['cep'] : '';
    $rua = isset($_POST['rua']) ? $_POST['rua'] : '';
    $numero_casa = isset($_POST['numero_casa'] ) ? $_POST['numero_casa'] : '';
    $complemento = isset($_POST['complemento'] ) ? $_POST['complemento'] : '';

    $img = $_FILES['file']['name'];

    $bairro = isset($_POST['bairro'] ) ? $_POST['bairro'] : '';

    $nm_cidade = isset($_POST['nm_cidade'] ) ? $_POST['nm_cidade'] : '';

    $nome_uf = isset($_POST['nome_uf'] ) ? $_POST['nome_uf'] : '';

   //Código cidade
    $teste = $con->query("SELECT cd_cidade FROM tb_cidade WHERE nm_cidade = '$nm_cidade';");
    $teste1 = $teste->fetchObject();
    $cd_cidade = $teste1->cd_cidade;
 
    
  
    // Código do bairro
   $codigo = $con->query("SELECT cd_bairro FROM tb_bairro WHERE nm_bairro = '$bairro';");
   $teste7 = $codigo->fetchObject();
   $cd_bairro_c = $teste7->cd_bairro;
   
   // Pegando o c��digo da pessoa, da p��gina anterior, para inserir na tabela endereco!!
   session_start();
   
   $cd_pessoa = $_SESSION['cd_pessoa'];
  
   $res = $con->query("INSERT INTO tb_endereco(nm_endereco, numero_endereco, complemento, cep, bairro, cidade, estado, img_comp_residencia, cd_bairro, cd_pessoa)
              VALUES('$rua', '$numero_casa', '$complemento', '$cep', '$bairro', '$nm_cidade', '$nome_uf', '$img', '$cd_bairro_c', '$cd_pessoa')");  
              
              header("Location:cadastrar_cri.php");
               
   // $res2 = $con->query("INSERT INTO tb_bairro(nm_bairro, cd_cidade) VALUES('$bairro', '$cd_cidade')");
   
   // $res3 = $con->query("INSERT INTO tb_cidade(nm_cidade, cd_uf) VALUES('$nm_cidade', '$cd_uf')");
   
   // $res4 = $con->query("INSERT INTO tb_uf(nm_uf) VALUES('$nome_uf')");
  
  //  if($res)
  //  {
    
  //      header("Location:cadastrar_cri.php");
   // }
?>
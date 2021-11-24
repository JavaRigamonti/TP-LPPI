<?php
    include 'conecta_banco.php';
    date_default_timezone_set('America/Sao_Paulo');

    $nm_crianca = isset($_POST["nm_crianca"]) ? $_POST["nm_crianca"] : '';
    $genero = isset($_POST["genero"]) ? $_POST["genero"] : '';
    $dt_nascimento = isset($_POST["data_nasc"]) ? $_POST["data_nasc"] : '';
    
    //$vacinas = isset($_FILES["vacinas"]) ? $_FILES["vacinas"] : '';
    // Inserindo imagem do sus
    $cartao_sus = $_FILES['cartao_sus']['name'];
  
    $target_dir_sus = "./imagem/";
    $target_file_sus = $target_dir_sus . basename($_FILES["cartao_sus"]["name"]);
    //Type file
    $imageFileType_sus = strtolower(pathinfo($target_file_sus,PATHINFO_EXTENSION));

    // Inserindo imagem Vacinas

    $vacinas = $_FILES['vacinas']['name'];
 
    $target_dir_vacinas = "./imagem/";
    $target_file_vacinas = $target_dir_vacinas . basename($_FILES["vacinas"]["name"]);
    // Type file
    $iamgemFileType_vacinas = strtolower(pathinfo($target_file_vacinas,PATHINFO_EXTENSION));


    // Inserindo imagem Certidão_Nascimento
    $certidao = $_FILES['file']['name'];
    
    $target_dir = "./imagem/";
    $target_file = $target_dir . basename($_FILES["file"]["name"]);
    // Select file type
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));


    // Inserindo foto 3x4
    $imagem_cri = $_FILES['imagem_3x4']['name'];
    
    $target_dir_cri = "./imagem/";
    $target_file_cri = $target_dir_cri . basename($_FILES["imagem_3x4"]["name"]);
    // Type file
    $iamgemFileType = strtolower(pathinfo($target_file_cri,PATHINFO_EXTENSION));
    
    // Valid file extensions
    //$extensions_arr = array("jpg","jpeg","png","gif");
    // Check extension and size
    
    
    
    // Testando se o tamanho da imagem é menor a 28kb
      if( ($_FILES['file']['size'] <= "2800000") && ($_FILES['cartao_sus']['size'] <= "2800000") && ($_FILES['vacinas']['size'] <= "2800000") && ($_FILES['imagem_3x4']['size'] <= "2800000") ){
        
        $res = $con->query("INSERT INTO tb_crianca(nm_crianca, data_nasc, img_sus, img_vacina, img_certidao_nasc, img_3x4, genero_crianca)
        VALUES('$nm_crianca', '$dt_nascimento', '$cartao_sus', '$vacinas', '$certidao', '$imagem_cri', '$genero')");

        $atual = date('Y/m/d');
        $res2 = $con->query("INSERT INTO tb_matricula(data_matricula, status_matricula) 
        VALUES('$atual', 'Pendente');");
            // Passando o código da criança para a session
            $codigo= $con->query("SELECT cd_crianca FROM tb_crianca WHERE nm_crianca = '$nm_crianca';");
            $codigo2= $codigo->fetchObject();
            $cd_crianca = $codigo2->cd_crianca;
            // Session
            session_start();
            $_SESSION['cd_crianca'] = $cd_crianca;
          // Upload file
          if($res){
            // Pegando data atual para inserir no banco  
              header("Location: confirma_cadastro.php");
             //Caso funcione, passa as imagens para a pasta ./Imagem
              move_uploaded_file($_FILES['file']['tmp_name'],'./imagem/'.$certidao);
              move_uploaded_file($_FILES['cartao_sus']['tmp_name'],'./imagem/'.$cartao_sus);
              move_uploaded_file($_FILES['vacinas']['tmp_name'], './imagem/'.$vacinas);
              move_uploaded_file($_FILES['imagem_3x4']['tmp_name'], './imagem/'.$imagem_cri);
          } else {
            echo "<script>alert('Erro ao realizar cadastro!');</script>";
            //echo $dbname->error;
          } 
      }else{
          echo "<script>alert('Tamanho de foto inválido');</script>";
      }                      
?>
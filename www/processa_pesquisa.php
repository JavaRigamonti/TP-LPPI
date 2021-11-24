<?php
 include "conecta_banco.php"; 
       $selecao = isset($_POST["selecao"]) ? $_POST["selecao"] : '';
       $selecao1 = isset($_POST["selecao1"]) ? $_POST["selecao1"] : '';
       $pesquisa = isset($_POST["pesquisa"]) ? $_POST["pesquisa"] : '';

            if(($selecao == 1)  && ($selecao1 == 1))
            {
                    $res = $con->query("SELECT * FROM tb_pessoa where nm_pessoa='$pesquisa'");
                    $registro = $res->fetchAll();
                    $linhas = sizeof($registro);

                    for($i = 0 ; $i<$linhas; $i++)
                    {
                        $cd_pessoa = $registro[$i][0];
                        $nm_pessoa =$registro[$i][1];
                        $sobrenome_pessoa=$registro[$i][2];
                        $dt_nascimento = $registro[$i][3];
                        $cpf =$registro[$i][4];
                        $rg=$registro[$i][5];

                       
                    }
				 echo "" .$cd_pessoa. "\n";
                        echo "\n";
                        echo "\n" .$nm_pessoa. "\n";
                        echo "" .$sobrenome_pessoa. "\n";
                        echo "" .$dt_nascimento. "\n";
                        echo "" .$cpf. "\n";
                        echo "" .$rg. "\n";
                    
                
        }


?>
<?php   
            include_once 'conecta_banco.php';
           $id =  $_POST['id'];
            
             $res = $con->query("SELECT * FROM cidades where estados_id='$id'")  ;
            $registro = $res->fetchAll();
            $linhas = sizeof($linhas);
            
            
                for($i=0; $i<$linhas; $i++)
                {
                  $cd = $registro[$i][0];
                  $nome = $registro[$i][1];

                 
                  echo "<option>".$nome."</option>";
                                          
                }



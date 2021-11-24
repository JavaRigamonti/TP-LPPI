<?php

include "conecta_banco.inc";
        class Logar 
        {
            //objetos 
            private $pdo;
            //função para logar 
            public function login($login, $senha)
            {
                global $pdo;
                $sql = $pdo->prepare("SELECT * FROM tb_login WHERE login= '$login' and senha='$senha'");
            $sql->execute();
            if($sql->rowCount() > 0)
            {
                // $dados = $sql->fetch();
                // session_start();
                // $_SESSION['logar'] = $dados="login_ok";
                // return true;
                header("Location: ./menu.php");
            }
            }
        }


?>
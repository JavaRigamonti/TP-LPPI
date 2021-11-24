<?php
// definições de host, database, usuário e senha
$host = "localhost";
$db   = "teste";
$user = "root";
$pass = "";
// conecta ao banco de dados

$con = mysql_pconnect($host, $user, $pass) or trigger_error(mysql_error(),E_USER_ERROR); 
// seleciona a base de dados em que vamos trabalhar
mysql_select_db($db, $con);
// cria a instrução SQL que vai selecionar os dados
$comandoSQL = "SELECT descricao,tipo,data,valor FROM receitas_despesas ";
// executa a query
$res = $con->query($comandoSQL);
$registros=$res->fetchAll();
$linhas = sizeof($registros);

if($linhas==0)
{
    echo "Não há receitas e despesas no período escolhido!";
    exit;
}
 
// 
//     <head>
//     <title>Exemplo</title>
// </head>
// <body>
// <?php
//     // se o número de resultados for maior que zero, mostra os dados
//     if($total > 0) {
//         // inicia o loop que vai mostrar todos os dados
//         do {
// ?>
//             <p><?=$linha['nome']?> / <?=$linha['dt_nascimento']?> / <?=$linha['rg']?></p>
// <?php
//         // finaliza o loop que vai mostrar os dados
//         }while($linha = mysql_fetch_assoc($dados));
//     // fim do if 
//     }
// ?>
// </body>
// </html>
// <?php
// // tira o resultado da busca da memória
// mysql_free_result($dados);
?>
<?php
include_once 'conexao.php';

// AREA DE INTERESSE
$comercial            = $_POST['comercial'];
$contrucao            = $_POST['construcao'];
$departamentopessoal  = $_POST['departamentopessoal'];
$educacao             = $_POST['educacao'];
$engenharia           = $_POST['engenharia'];
$financas             = $_POST['financas'];
$geral                = $_POST['geral'];
$juridico             = $_POST['juridico'];
$logistica            = $_POST['logistica'];
$marketing            = $_POST['marketing'];
$producao             = $_POST['producao'];
$recursoshumanos      = $_POST['recursoshumanos'];
$saude                = $_POST['saude'];
$servicosgerais       = $_POST['servicosgerais'];
$tecnologia           = $_POST['tecnologia'];
// DADOS PESSOAIS
$nome                 = $_POST['nome'];
// $sobrenome            = $_POST['sobrenome'];
// $cpf                  = $_POST['cpf'];

$connect = mysqli_connect($host , $user , $passwd , $dbase);

$sql =  "SELECT * FROM `curriculos` WHERE ((area_interesse LIKE '%$comercial%') AND (area_interesse LIKE '%$construcao%') AND (area_interesse LIKE '%$departamentopessoal%') AND (area_interesse LIKE '%$educacao%') AND (area_interesse LIKE '%$engenharia%') AND (area_interesse LIKE '%$financas%') AND (area_interesse LIKE '%$geral%') AND (area_interesse LIKE '%$juridico%') AND (area_interesse LIKE '%$logistica%') AND (area_interesse LIKE '%$marketing%') AND (area_interesse LIKE '%$producao%') AND (area_interesse LIKE '%$recursoshumanos%') AND (area_interesse LIKE '%$saude%') AND (area_interesse LIKE '%$servicosgerais%') AND (area_interesse LIKE '%$tecnologia%')) AND ((cpf  LIKE '%$nome%') OR (nome LIKE '%$nome%') OR (sobrenome LIKE '%$nome%'))";

$response = mysqli_query($connect, $sql);



// while ($row_busca = mysqli_fetch_assoc($response)){
// 	if(!empty($row_busca)){
//     $pagina = 
// 		"<html>
// 			<body>
// 				<h1>Informações do Usuário</h1>
// 				CPF: ".$row_busca['cpf']."<br>
// 				Nome: ".$row_busca['nome']."<br>
// 				Area: ".$row_busca['area-interesse']."<br>				
// 			</body>
// 		</html>
// 		";

//     }else{
// 		$pagina ="";
// 	}
// }

    mysqli_close($connect);

















?>
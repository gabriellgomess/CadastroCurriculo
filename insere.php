<?php

include_once 'conexao.php';

// AREA DE INTERESSE
$comercial            = $_POST['comercial'];
$construcao           = $_POST['construcao'];
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

$areainteresse = $comercial." ".$construcao." ".$departamentopessoal." ".$educacao." ".$engenharia." ".$financas." ".$geral." ".$juridico." ".$logistica." ".$marketing." ".$producao." ".$recursoshumanos." ".$saude." ".$servicosgerais." ".$tecnologia;   

$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$cpf = $_POST['cpf'];
$sexo = $_POST['sexo'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$nascimento = $_POST['nascimento'];
$nacionalidade = $_POST['nacionalidade'];
$estadocivil = $_POST['estadocivil'];
$cep = $_POST['cep'];
$cidade = $_POST['cidade'];
$uf = $_POST['uf'];
$logradouro = $_POST['rua'];
$numero = $_POST['numero'];
$bairro = $_POST['bairro'];

$escolaridade = $_POST['escolaridade'];
$instituicao_esc = $_POST['instituicao_esc'];
$conclusao_esc = $_POST['conclusao_esc'];

$nivel_curso1 = $_POST['nivel-1'];
$curso1 = $_POST['curso-1'];
$instituicao1 = $_POST['instituicao-1'];
$conclusao1 = $_POST['conclusao-1'];

$nivel_curso2 = $_POST['nivel-2'];
$curso2 = $_POST['curso-2'];
$instituicao2 = $_POST['instituicao-2'];
$conclusao2 = $_POST['conclusao-2'];

$nivel_curso3 = $_POST['nivel-3'];
$curso3 = $_POST['curso-3'];
$instituicao3 = $_POST['instituicao-3'];
$conclusao3 = $_POST['conclusao-3'];

$nivel_curso4 = $_POST['nivel-4'];
$curso4 = $_POST['curso-4'];
$instituicao4 = $_POST['instituicao-4'];
$conclusao4 = $_POST['conclusao-4'];

$nivel_curso5 = $_POST['nivel-5'];
$curso5 = $_POST['curso-5'];
$instituicao5 = $_POST['instituicao-5'];
$conclusao5 = $_POST['conclusao-5'];

$nivel_curso6 = $_POST['nivel-6'];
$curso6 = $_POST['curso-6'];
$instituicao6 = $_POST['instituicao-6'];
$conclusao6 = $_POST['conclusao-6'];

$emprego1_empresa = $_POST['nome-empresa-1'];
$emprego1_cargo = $_POST['cargo-1'];
$emprego1_de = $_POST['de-1'];
$emprego1_ate = $_POST['ate-1'];
$emprego1_atividades = $_POST['atividades-1'];

$emprego2_empresa = $_POST['nome-empresa-2'];
$emprego2_cargo = $_POST['cargo-2'];
$emprego2_de = $_POST['de-2'];
$emprego2_ate = $_POST['ate-2'];
$emprego2_atividades = $_POST['atividades-2'];

$emprego3_empresa = $_POST['nome-empresa-3'];
$emprego3_cargo = $_POST['cargo-3'];
$emprego3_de = $_POST['de-3'];
$emprego3_ate = $_POST['ate-3'];
$emprego3_atividades = $_POST['atividades-3'];

$emprego4_empresa = $_POST['nome-empresa-4'];
$emprego4_cargo = $_POST['cargo-4'];
$emprego4_de = $_POST['de-4'];
$emprego4_ate = $_POST['ate-4'];
$emprego4_atividades = $_POST['atividades-4'];

$emprego5_empresa = $_POST['nome-empresa-5'];
$emprego5_cargo = $_POST['cargo-5'];
$emprego5_de = $_POST['de-5'];
$emprego5_ate = $_POST['ate-5'];
$emprego5_atividades = $_POST['atividades-5'];

$sobre_mim = $_POST['sobremim'];
// DEFINE A CONEXÃO AO BANCO
$connect = mysqli_connect($host , $user , $passwd , $dbase);

// DEFINE A CONSULTA
$sql_cpf = "SELECT `cpf` FROM `curriculos` WHERE `cpf` = '$cpf'";

// EXECUTA A CONEXÃO E A CONSULTA
$response_cpf = mysqli_query($connect, $sql_cpf);
$count_cpf = mysqli_num_rows($response_cpf);



if ($count_cpf > 0){
    echo "CPF já cadastrado";
    echo "<a href='index.php'><button>Voltar</button></a>";
    exit;
}else{
$sql = "INSERT INTO curriculos (`cpf`, `area_interesse`, `nome`, `sobrenome`, `sexo`, `telefone`, `email`, `nascimento`, `nacionalidade`, `estado_civil`, `cep`, `cidade`,
                                `uf`, `logradouro`, `numero`, `bairro`, `escolaridade`, `instituicao_esc`, `conclusao_esc`, `nivel_curso1`, `curso1`, `instituicao1`, `conclusao1`, `nivel_curso2`,
                                 `curso2`, `instituicao2`, `conclusao2`, `nivel_curso3`, `curso3`, `instituicao3`, `conclusao3`, `nivel_curso4`, `curso4`, `instituicao4`, `conclusao4`, `nivel_curso5`,
                                  `curso5`, `instituicao5`, `conclusao5`, `nivel_curso6`, `curso6`, `instituicao6`, `conclusao6`, `emprego1_empresa`, `emprego1_cargo`, `emprego1_de`, `emprego1_ate`,
                                   `emprego1_atividades`, `emprego2_empresa`, `emprego2_cargo`, `emprego2_de`, `emprego2_ate`, `emprego2_atividades`, `emprego3_empresa`, `emprego3_cargo`, `emprego3_de`,
                                    `emprego3_ate`, `emprego3_atividades`, `emprego4_empresa`, `emprego4_cargo`, `emprego4_de`, `emprego4_ate`, `emprego4_atividades`, `emprego5_empresa`, `emprego5_cargo`,
                                     `emprego5_de`, `emprego5_ate`, `emprego5_atividades`, `sobre_mim` , `criacao`) 
                                    VALUES ('$cpf', '$areainteresse', '$nome', '$sobrenome', '$sexo', '$telefone', '$email', '$nascimento', 
                                    '$nacionalidade', '$estado_civil', '$cep', '$cidade', '$uf', '$logradouro', '$numero', '$bairro', '$escolaridade',
                                     '$instituicao_esc', '$conclusao_esc', '$nivel_curso1', '$curso1', '$instituicao1', '$conclusao1', '$nivel_curso2',
                                      '$curso2', '$instituicao2', '$conclusao2', '$nivel_curso3', '$curso3', '$instituicao3', '$conclusao3', '$nivel_curso4',
                                       '$curso4', '$instituicao4', '$conclusao4', '$nivel_curso5', '$curso5', '$instituicao5', '$conclusao5', '$nivel_curso6',
                                        '$curso6', '$instituicao6', '$conclusao6', '$emprego1_empresa', '$emprego1_cargo', '$emprego1_de', '$emprego1_ate',
                                         '$emprego1_atividades', '$emprego2_empresa', '$emprego2_cargo', '$emprego2_de', '$emprego2_ate', '$emprego2_atividades',
                                          '$emprego3_empresa', '$emprego3_cargo', '$emprego3_de', '$emprego3_ate', '$emprego3_atividades', '$emprego4_empresa',
                                           '$emprego4_cargo', '$emprego4_de', '$emprego4_ate', '$emprego4_atividades', '$emprego5_empresa', '$emprego5_cargo',
                                            '$emprego5_de', '$emprego5_ate', '$emprego5_atividades', '$sobre_mim' , now())";

// Conecta no banco e executa a query

mysqli_query($connect, $sql) or die (mysqli_error($connect));

}
// Fecha a conexão com o banco

mysqli_close($connect);

// Exibe a mensagem abaixo caso todas as instruções acima tenham sido executadas

echo "<h4 style='font-family: arial; font-weight: bold; color: green'>Currículo cadastrado com sucesso!<br><br><h4>";
echo "<a href='index.php'><button>VOLTAR</button>";


?>
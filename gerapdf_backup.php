<?php
session_start();
//referenciar o DomPDF com namespace
use Dompdf\Dompdf;
use Dompdf\Options;
// include autoloader
require_once("dompdf/dompdf/autoload.inc.php");
//Criando a Instancia
$dompdf = new Dompdf();
// Incluindo a página busca.php

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
$areainteresse = 
                $comercial          ." ".
                $contrucao          ." ".
                $departamentopessoal." ".
                $educacao           ." ".
                $engenharia         ." ".
                $financas           ." ".
                $geral              ." ".
                $juridico           ." ".
                $logistica          ." ".
                $marketing          ." ".
                $producao           ." ".
                $recursoshumanos    ." ".
                $saude              ." ".
                $servicosgerais     ." ".
                $tecnologia;   

$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];

$cpf = $_POST['indice'];

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

// $cursos_complementares = $_POST[]

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

         
$array_cursos = array(
    'cur1' => array($nivel_curso1, $curso1, $instituicao1, $conclusao1),
    'cur2' => array($nivel_curso2, $curso2, $instituicao2, $conclusao2),
    'cur3' => array($nivel_curso3, $curso3, $instituicao3, $conclusao3),
    'cur4' => array($nivel_curso4, $curso4, $instituicao4, $conclusao4),
    'cur5' => array($nivel_curso5, $curso5, $instituicao5, $conclusao5),
    'cur6' => array($nivel_curso6, $curso6, $instituicao6, $conclusao6)
);
$c1 = $array_cursos['cur1'];            
$c2 = $array_cursos['cur2'];            
$c3 = $array_cursos['cur3'];          
$c4 = $array_cursos['cur4'];
$c5 = $array_cursos['cur5'];
$c6 = $array_cursos['cur6'];
echo "<ul>";
if (!empty($c1[1])){
    $crs1 = "
    <h4>Cursos</h4>
    <li>Curso: ".$c1[1]."</li>
    <p>Nível: ".$c1[0]."</p>                
    <p>Instituição: ".$c1[2]." Conclusão: ".$c1[3]."</p>
    <hr>
    ";
}
if (!empty($c2[1])){
    $crs2 = "
    <li>Curso: ".$c2[1]."</li>
    <p>Nível: ".$c2[0]."</p>                
    <p>Instituição: ".$c2[2]." Conclusão: ".$c2[3]."</p>
    ";
}
if (!empty($c3[1])){
    $crs3 = "
    <li>Curso: ".$c3[1]."</li>
    <p>Nível: ".$c3[0]."</p>                
    <p>Instituição: ".$c3[2]." Conclusão: ".$c3[3]."</p>
    ";
}
if (!empty($c4[1])){
    $crs4 = "
    <li>Curso: ".$c4[1]."</li>
    <p>Nível: ".$c4[0]."</p>                
    <p>Instituição: ".$c4[2]." Conclusão: ".$c4[3]."</p>
    ";
}
if (!empty($c5[1])){
    $crs5 = "
    <li>Curso: ".$c5[1]."</li>
    <p>Nível: ".$c5[0]."</p>                
    <p>Instituição: ".$c5[2]." Conclusão: ".$c5[3]."</p>
    
    ";
}
if (!empty($c6[1])){
    $crs6 = "
    <li>Curso: ".$c6[1]."</li>
    <p>Nível: ".$c6[0]."</p>                
    <p>Instituição: ".$c6[2]." Conclusão: ".$c6[3]."</p>
    ";
    
}
echo "</ul>";

$bootstrap = "public_html/jacenir/bootstrap/css/bootstrap.min.css";

$doc = 
'
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href=".$bootstrap."
        
    </head>
    <body>
        <div class="container">
            <h2>Currículo '. $nome.' '.$sobrenome.'</h2>
            <br>
            <h1>CPF: '.$cpf.'</h1>
            <h4>Dados Pessoais</h4>
            <p>Nome: '.$nome.' '.$sobrenome.'</p>
            <p>Sexo: '.$sexo.'</p>
            <p>Data de Nascimento: '.$nascimento.'</p>
            <p>Nacionalidade: '.$nacionalidade.'</p>
            <p>Estado Civil: '.$estadocivil.'</p>
            <br>
            <h4>Contato</h4>
            <p>Telefone: '.$telefone.'</p>
            <p>E-mail: '.$email.'</p>
            <br>
            <h4>Endereço</h4>
            <p>Rua: '.$logradouro.' Nº '.$numero.' - Bairro: '.$bairro.'</p>
            <p>CEP: '.$cep.' - Cidade: '.$cidade.' - Estado: '.$uf.'</p>
            <hr>
            <h4>Escolaridade</h4>
            <p>Escolaridade: '.$escolaridade.'</p>
            <p>Instituição de Ensino: '.$instituicao_esc.' Conclusão: '.$conclusao_esc.'</p>
            <br>
            
            '.$crs1.'
            '.$crs2.'          
            '.$crs3.'
            '.$crs4.'
            '.$crs5.'
            '.$crs6.'            
            
            <br>
            <h4>Experiência Profissional</h4>
            <br>
            <p>Último Emprego</p>
            <p>Empresa: '.$ultimo_empresa.'</p>
            <p>Cargo: '.$ultimo_cargo.' - De: '.$ultimo_de.' - Até: '.$ultimo_ate.'</p>
            <p>Atividades</p>
            <p>'.$ultimo_atividades.'</p>
            <hr>
            <p>Penúltimo Emprego</p>
            <p>Empresa: '.$penultimo_empresa.'</p>
            <p>Cargo: '.$penultimo_cargo.' - De: '.$penultimo_de.' - Até: '.$penultimo_ate.'</p>
            <p>Atividades</p>
            <p>'.$penultimo_atividades.'</p>
            <hr>
            <p>Antepenúltimo Emprego</p>
            <p>Empresa: '.$antepenultimo_empresa.'</p>
            <p>Cargo: '.$antepenultimo_cargo.' - De: '.$antepenultimo_de.' - Até: '.$antepenultimo_ate.'</p>
            <p>Atividades</p>
            <p>'.$antepenultimo_atividades.'</p>
            <hr>
            <br>
            <h4>Sobre Mim</h4>
            <p>'.$sobre_mim.'</p>
        </div>    
    </body>
</html>'
;
 
$options = new Options();
$options->set('isRemoteEnabled', TRUE);
$dompdf = new Dompdf($options);
$dompdf->set_option('defaultFont', 'Courier');

// Carrega seu HTML
$dompdf->load_html($doc);

//Renderizar o html
$dompdf->render();

//Exibir a página
$dompdf->stream(
"Currículo ".$nome.".pdf", 
array(
"Attachment" => false //Para realizar o download somente alterar para true
)
);



?>



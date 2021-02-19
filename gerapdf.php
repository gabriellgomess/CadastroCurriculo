<?php

include 'conexao.php';

$cpf = $_POST['cpf_t'];

$connect = mysqli_connect($host , $user , $passwd , $dbase);
                       
$sql = "SELECT * FROM `curriculos` WHERE `cpf` = '$cpf'";

$response = mysqli_query($connect, $sql);


mysqli_close($connect);

$doc = 
'
<html>
   
    <body>
        <div class="container">
            <h1>Em breve seu currículo aparecerá aqui...</h1>
            <p>CPF cadastrado: '.$cpf.'</p>
        </div>    
    </body>
</html>'
;

//referenciar o DomPDF com namespace
use Dompdf\Dompdf;
use Dompdf\Options;
// include autoloader
require_once("dompdf/dompdf/autoload.inc.php");
//Criando a Instancia
$dompdf = new Dompdf();
 
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

// <h2>Currículo '. $nome.' '.$sobrenome.'</h2>
//             <br>
//             <h1>CPF: '.$cpf.'</h1>
//             <h4>Dados Pessoais</h4>
//             <p>Nome: '.$nome.' '.$sobrenome.'</p>
//             <p>Sexo: '.$sexo.'</p>
//             <p>Data de Nascimento: '.$nascimento.'</p>
//             <p>Nacionalidade: '.$nacionalidade.'</p>
//             <p>Estado Civil: '.$estadocivil.'</p>
//             <br>
//             <h4>Contato</h4>
//             <p>Telefone: '.$telefone.'</p>
//             <p>E-mail: '.$email.'</p>
//             <br>
//             <h4>Endereço</h4>
//             <p>Rua: '.$logradouro.' Nº '.$numero.' - Bairro: '.$bairro.'</p>
//             <p>CEP: '.$cep.' - Cidade: '.$cidade.' - Estado: '.$uf.'</p>
//             <hr>
//             <h4>Escolaridade</h4>
//             <p>Escolaridade: '.$escolaridade.'</p>
//             <p>Instituição de Ensino: '.$instituicao_esc.' Conclusão: '.$conclusao_esc.'</p>
//             <br>
            
//             '.$crs1.'
//             '.$crs2.'          
//             '.$crs3.'
//             '.$crs4.'
//             '.$crs5.'
//             '.$crs6.'            
            
//             <br>
//             <h4>Experiência Profissional</h4>
//             <br>
//             <p>Último Emprego</p>
//             <p>Empresa: '.$ultimo_empresa.'</p>
//             <p>Cargo: '.$ultimo_cargo.' - De: '.$ultimo_de.' - Até: '.$ultimo_ate.'</p>
//             <p>Atividades</p>
//             <p>'.$ultimo_atividades.'</p>
//             <hr>
//             <p>Penúltimo Emprego</p>
//             <p>Empresa: '.$penultimo_empresa.'</p>
//             <p>Cargo: '.$penultimo_cargo.' - De: '.$penultimo_de.' - Até: '.$penultimo_ate.'</p>
//             <p>Atividades</p>
//             <p>'.$penultimo_atividades.'</p>
//             <hr>
//             <p>Antepenúltimo Emprego</p>
//             <p>Empresa: '.$antepenultimo_empresa.'</p>
//             <p>Cargo: '.$antepenultimo_cargo.' - De: '.$antepenultimo_de.' - Até: '.$antepenultimo_ate.'</p>
//             <p>Atividades</p>
//             <p>'.$antepenultimo_atividades.'</p>
//             <hr>
//             <br>
//             <h4>Sobre Mim</h4>
//             <p>'.$sobre_mim.'</p>


?>



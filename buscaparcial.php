<?php
include "conexao.php";

            // AREAS DE INTERESSE ===========================================================
            if (empty($_POST['comercial'])){$comercial = 'vazio';}else{$comercial = $_POST['comercial'];};
            if (empty($_POST['construcao'])){$construcao = 'vazio';}else{$construcao = $_POST['construcao'];};
            if (empty($_POST['departamentopessoal'])){$departamentopessoal = 'vazio';}else{$departamentopessoal = $_POST['departamentopessoal'];};
            if (empty($_POST['educacao'])){$educacao = 'vazio';}else{$educacao = $_POST['educacao'];};
            if (empty($_POST['engenharia'])){$engenharia = 'vazio';}else{$engenharia = $_POST['engenharia'];};           
            if (empty($_POST['financas'])){$financas = 'vazio';}else{$financas = $_POST['financas'];};             
            if (empty($_POST['geral'])){$geral = 'vazio';}else{$geral = $_POST['geral'];};                
            if (empty($_POST['juridico'])){$juridico = 'vazio';}else{$juridico  = $_POST['juridico'];};            
            if (empty($_POST['logistica'])){$logistica = 'vazio';}else{$logistica  = $_POST['logistica'];};           
            if (empty($_POST['marketing'])){$marketing = 'vazio';}else{$marketing  = $_POST['marketing'];};           
            if (empty($_POST['producao'])){$producao = 'vazio';}else{$producao   = $_POST['producao'];};           
            if (empty($_POST['recursoshumanos'])){$recursoshumanos = 'vazio';}else{$recursoshumanos  = $_POST['recursoshumanos'];};     
            if (empty($_POST['saude'])){$saude = 'vazio';}else{$saude   = $_POST['saude'];};              
            if (empty($_POST['servicosgerais'])){$servicosgerais = 'vazio';}else{$servicosgerais  = $_POST['servicosgerais'];};      
            if (empty($_POST['tecnologia'])){$tecnologia = 'vazio';}else{$tecnologia = $_POST['tecnologia'];};           
            // PESQUISA ======================================================================
            // if (empty($_POST['pesquisa'])){$pesquisa = 'vazio';}else{$pesquisa = $_POST['pesquisa'];};
            $usuarios = filter_input(INPUT_POST, 'palavra', FILTER_SANITIZE_STRING);
                        
                       
            $connect = mysqli_connect($host , $user , $passwd , $dbase);
                       
            $sql = "SELECT * FROM `curriculos` WHERE ((area_interesse  LIKE '%$comercial%') OR (area_interesse LIKE '%$construcao%')     OR (area_interesse LIKE '%$departamentopessoal%') 
                                                   OR (area_interesse  LIKE '%$educacao%')  OR (area_interesse LIKE '%$engenharia%')     OR (area_interesse LIKE '%$financas%') 
                                                   OR (area_interesse  LIKE '%$geral%')     OR (area_interesse LIKE '%$juridico%')       OR (area_interesse LIKE '%$logistica%') 
                                                   OR (area_interesse  LIKE '%$marketing%') OR (area_interesse LIKE '%$producao%')       OR (area_interesse LIKE '%$recursoshumanos%') 
                                                   OR (area_interesse  LIKE '%$saude%')     OR (area_interesse LIKE '%$servicosgerais%') OR (area_interesse LIKE '%$tecnologia%') 
                                                   OR (cpf             LIKE '%$pesquisa%')  OR (nome           LIKE '%$pesquisa%')       OR (sobrenome      LIKE '%$pesquisa%'))";

            $response = mysqli_query($connect, $sql);

            $sqlfull = "SELECT * FROM `currículos`";

            $responsefull = mysqli_query($connect, $sqlfull);

            echo "<h1 style='color: white;'>Informações dos cadastros</h1>";
            echo "
                  <table class='table table-striped table-dark'>
                    <thead>
                      <tr>
                        <th scope='col'>CPF</th>
                        <th scope='col'>NOME</th>
                        <th scope='col'>ÁREA DE INTERESSE</th>
                        <th scope='col'>GERAR PDF</th>
                      </tr>";
            while ($row_busca = mysqli_fetch_assoc($response)){                                           
                      echo  
                        "</thead>
                          <tbody>
                            <tr>
                              <th name='indice'>".$row_busca['cpf']."</th>
                              <th>".$row_busca['nome']."</th>                              
                              <th>".$row_busca['area_interesse']."</th>
                              <th>
                                <form method='POST' action='gerapdf.php'>
                                  <input type='hidden' name='cpf_t' value=".$row_busca['cpf'].">
                                  <button class='btn btn-sm btn-success' type='submit'>Gerar</button>
                                </form>
                              </th>
                            </tr>";
                          }
                          echo "</tbody>  
                              </table>
                            ";
          
                mysqli_close($connect);
            ?>
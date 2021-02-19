<?php

include_once "conexao.php";
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilo.css">
    
    
    <title>Busca de Currículo</title>
  
</head>
<body>    
<nav class="navbar navbar-expand-lg fixed-top navbar-light">
        <a class="navbar-brand" href="#" style="color: #cbb2ab">Busca de Currículo</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#textoNavbar" aria-controls="textoNavbar" aria-expanded="false" aria-label="Alterna navegação">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="textoNavbar">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" id="link" href="index.php">Cadastro de Currículos</a>
            </li>           
          </ul>          
        </div>
      </nav>
      <div class="container">
        <form action="busca.php" method="post">
      <h4 id="areainteresse">ÁREAS DE INTERESSE</h4>
      <small id="helpId" class="form-text text-muted">Selecione as áreas para as quais deseja obter os currículos ou digite o nome ou cpf para a busca</small>        
      <div id="ckeck-box" class="form-row">              
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="comercial" value="comercial">
                <label class="form-check-label" for="inlineCheckbox1">Comercial</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="construcao" value="construcao">
                <label class="form-check-label" for="inlineCheckbox1">Construção Civil</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="departamentopessoal" value="departamentopessoal">
                <label class="form-check-label" for="inlineCheckbox1">Departamento Pessoal</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="educacao" value="educacao">
                <label class="form-check-label" for="inlineCheckbox1">Educação</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="engenharia" value="engenharia">
                <label class="form-check-label" for="inlineCheckbox1">Engenharia</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="financas" value="financas">
                <label class="form-check-label" for="inlineCheckbox1">Finanças</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="geral" value="geral">
                <label class="form-check-label" for="inlineCheckbox1">Geral</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="juridico" value="juridico">
                <label class="form-check-label" for="inlineCheckbox1">Jurídico</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="logistica" value="logistica">
                <label class="form-check-label" for="inlineCheckbox1">Logística</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="marketing" value="marketing">
                <label class="form-check-label" for="inlineCheckbox1">Marketing</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="producao" value="producao">
                <label class="form-check-label" for="inlineCheckbox1">Produção</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="recursoshumanos" value="recursoshumanos">
                <label class="form-check-label" for="inlineCheckbox1">Recursos Humanos</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="saude" value="saude">
                <label class="form-check-label" for="inlineCheckbox1">Saúde</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="servicosgerais" value="servicosgerais">
                <label class="form-check-label" for="inlineCheckbox1">Serviços Gerais</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="tecnologia" value="tecnologia">
                <label class="form-check-label" for="inlineCheckbox1">Tecnologia</label>
              </div>
            </div>
            <div class="row">
                <div class="col-6">            
                    <div class="form-group">
                    <label for="nome">Pesquisa</label>
                    <input type="text" class="form-control" name="pesquisa" id="pesquisa" aria-describedby="helpId" placeholder="Digite o Nome ou CPF">              
                    </div>
                </div>                
            </div>       
            <button id="loader_form" type="submit" class="btn btn-warning" >BUSCAR</button>
            </form>
            <button id="loader" type="button" class="btn btn-success">Load</button>
            
            <?php
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
            if (empty($_POST['pesquisa'])){$pesquisa = 'vazio';}else{$pesquisa = $_POST['pesquisa'];};
                                  
            $connect = mysqli_connect($host , $user , $passwd , $dbase);
                       
            $sql = "SELECT * FROM `curriculos` WHERE ((area_interesse  LIKE '%$comercial%') OR (area_interesse LIKE '%$construcao%')     OR (area_interesse LIKE '%$departamentopessoal%') 
                                                   OR (area_interesse  LIKE '%$educacao%')  OR (area_interesse LIKE '%$engenharia%')     OR (area_interesse LIKE '%$financas%') 
                                                   OR (area_interesse  LIKE '%$geral%')     OR (area_interesse LIKE '%$juridico%')       OR (area_interesse LIKE '%$logistica%') 
                                                   OR (area_interesse  LIKE '%$marketing%') OR (area_interesse LIKE '%$producao%')       OR (area_interesse LIKE '%$recursoshumanos%') 
                                                   OR (area_interesse  LIKE '%$saude%')     OR (area_interesse LIKE '%$servicosgerais%') OR (area_interesse LIKE '%$tecnologia%') 
                                                   OR (cpf             LIKE '%$pesquisa%')  OR (nome           LIKE '%$pesquisa%')       OR (sobrenome      LIKE '%$pesquisa%'))";

            $response = mysqli_query($connect, $sql);

            $rowcount = mysqli_num_rows($response);

            if ($rowcount < 1){
              $vazio = "<h3 style='color: white;'>Sua pesquisa aparecerá aqui...</h3>";
            }else{
            echo "<h1 style='color: white;'>Currículos Filtrados</h1>";
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
                            ";}
          
                mysqli_close($connect);
            ?>
       <div id="loaded"><?php echo $vazio; ?></div>  
      </div>
          
    

      <script src="js/jquery-3.5.1.min.js"></script>
      <script src="js/script.js"></script>
           
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
      <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>    
</body>
</html>
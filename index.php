<?php
  session_start(); 
  ?>
<html>  
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilo.css">
    
    <title>Cadastro de Currículo</title>
  
</head>
<body>    
    <nav class="navbar navbar-expand-lg fixed-top navbar-light">
        <a class="navbar-brand" href="#" style="color: #cbb2ab">Cadastro de Currículo</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#textoNavbar" aria-controls="textoNavbar" aria-expanded="false" aria-label="Alterna navegação">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="textoNavbar">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" id="link" href="#areainteresse">Áreas de Interesse</a>
            </li>           
            <li class="nav-item">
              <a class="nav-link" id="link" href="#dados_pessoais">Dados Pessoais</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="link" href="#escolaridade">Escolaridade</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="link" href="#cursos">Cursos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="link" href="#experiencia">Experiência Profissional</a>
            </li>
          </ul>          
        </div>
      </nav>
     
      <div class="container" style="margin-top: 60px">
        <form action="insere.php" method="POST">
          <h4 id="areainteresse">ÁREAS DE INTERESSE</h4>         
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
           
            <div id="dados_pessoais"> <!-- Dados Pessoais - inicio -->
            <h4>DADOS PESSOAIS</h4>            
            <div class="form-row">
            <div class="col-md-4 mb-3">
                  <label id="result-teste" for="validationDefault04">CPF</label>
                  <input type="text" class="form-control form-control-sm" id="cpf" name="cpf" autocomplete="off" maxlength="14" placeholder="Digite seu CPF" onkeyup="mascara_cpf()" onblur="iscpf();">
                </div>
              <div class="col-md-4 mb-3">
                <label for="validationDefault01">Primeiro nome</label>
                <input type="text" class="form-control form-control-sm" id="nome" name="nome" placeholder="Nome">
              </div>
              <div class="col-md-4 mb-3">
                <label for="validationDefault02">Sobrenome</label>
                <input type="text" class="form-control form-control-sm" id="sobrenome" name="sobrenome" placeholder="Sobrenome">
              </div>
              
            </div>
            <div class="form-row">
              <div class="col-md-4 mb-3">
                <label for="validationDefault01">Telefone</label>
                <input type="text" class="form-control form-control-sm" id="telefone" name="telefone" placeholder="Telefone">
              </div>
              <div class="col-md-4 mb-3">
                <label for="validationDefault02">E-mail</label>
                <input type="email" class="form-control form-control-sm" id="email" name="email" placeholder="E-mail">
              </div>
              <div class="col-md-4 mb-3">
                <label for="validationDefault03">Data de Nascimento</label>
                <input type="date" class="form-control form-control-sm" id="nascimento" name="nascimento" placeholder="Cidade">
              </div>
            </div>
            <div class="form-row">
                
                <div class="col-md-4 mb-3">
                  <label for="validationDefault04">Nacionalidade</label>
                  <input type="text" class="form-control form-control-sm" id="nacionalidade" name="nacionalidade" placeholder="País de Nascimento">
                </div>
                <div class="col-md-4 mb-3">
                  <label for="validationDefault05">Estado Civil</label>
                  <select class="form-control form-control-sm" id="estadocivil" name="estadocivil">
                    <option value="">Selecione</option>
                    <option value="casado">Casado(a)</option>
                    <option value="solteiro">Solteiro(a)</option>
                    <option value="separado">Separado(a)</option>
                    <option value="viuvo">Viúvo(a)</option>                 
                  </select>
                </div>
                <div class="col-md-4 mb-3">
                <label for="exampleFormControlSelect0">Sexo</label>
                <div class="input-group">
                    <select class="form-control form-control-sm" id="sexo" name="sexo">
                        <option value="">Selecione</option>
                        <option value="masculino">Masculino</option>
                        <option value="feminino">Feminino</option>
                        <option value="naodeclarado">Não declarado</option>                 
                      </select>                  
                </div>
              </div>
              </div>
            <div class="form-row">
              <div class="col-md-3 mb-3">
                <label for="validationDefault05">CEP</label>
                <input name="cep" type="text" class="form-control form-control-sm" id="cep" placeholder="CEP" size="10" maxlength="9" onblur="pesquisacep(this.value);">
              </div>
              <div class="col-md-6 mb-3">
                <label for="validationDefault03">Cidade</label>
                <input name="cidade" type="text" class="form-control form-control-sm" id="cidade" placeholder="Cidade">
              </div>
              <div class="col-md-3 mb-3">
                <label for="validationDefault04">Estado</label>
                <input name="uf" type="text" class="form-control form-control-sm" id="uf" placeholder="Estado">
              </div>              
            </div>
            <div class="form-row">
              <div class="col-md-6 mb-3">
                <label for="validationDefault03">Rua/Avenida</label>
                <input name="rua" type="text" class="form-control form-control-sm" id="rua" placeholder="Logradouro">
              </div>
              <div class="col-md-3 mb-3">
                <label for="validationDefault04">Número</label>
                <input name="numero" type="text" class="form-control form-control-sm" id="numero" placeholder="Número">
              </div>
              <div class="col-md-3 mb-3">
                <label for="validationDefault05">Bairro</label>
                <input name="bairro" type="text" class="form-control form-control-sm" id="bairro" placeholder="Bairro">
              </div>
            </div>
        </div> <!-- Dados Pessoais - fim -->
        
        <div id="escolaridade"> <!-- Escolaridade - início -->
            <h4>ESCOLARIDADE</h4>
            <div class="form-row">
                <div class="col-md-4 mb-3">
                    <label for="validationDefault05">Nível de Escolaridade</label>
                    <select class="form-control form-control-sm" id="escolaridade" name="escolaridade">
                      <option value="">Selecione</option>
                      <option value="Fundamental Incompleto">Fundamental Incompleto</option>
                      <option value="Fundamental Completo">Fundamental Completo</option>
                      <option value="Médio Incompleto">Médio Incompleto</option>
                      <option value="Médio Completo">Médio Completo</option>
                      <option value="Superior Incompleto">Superior Incompleto</option>
                      <option value="Superior Completo">Superior Completo</option>                    
                    </select>
                  </div>
                <div class="col-md-4 mb-3">
                  <label for="validationDefault03">Nome da Instituição</label>
                  <input type="text" class="form-control form-control-sm" id="instituicao_esc" name="instituicao_esc" placeholder="Instituição">
                </div>
                <div class="col-md-4 mb-3">
                  <label for="validationDefault04">Conclusão</label>
                  <input type="text" class="form-control form-control-sm" id="conclusao_esc" name="conclusao_esc" placeholder="mm/aaaa">
                </div>                
              </div>
        </div> <!-- Escolaridade - fim -->
        <div id="cursos"> <!-- Cursos - início -->
            <h4>CURSOS</h4>            
              <div class="form-row">
                <div class="col-md-3 mb-3">
                    <label for="validationDefault05">Nível</label>
                    <select class="form-control form-control-sm" id="nivel-1" name="nivel-1">
                      <option value="">Selecione</option>
                      <option value="Nível Técnico">Nível Técnico</option>
                      <option value="Nível Superior">Nível Superior</option>
                      <option value="Nível Profissionalizante">Nível Profissionalizante</option>
                      <option value="Nível de Aperfeiçoamento">Nível Aperfeiçoamento</option>                                      
                    </select>
                  </div>
                  <div class="col-md-3 mb-3">
                    <label for="validationDefault03">Nome do Curso</label>
                    <input type="text" class="form-control form-control-sm" id="curso-1" name="curso-1" placeholder="Nome do Curso">
                  </div>
                  <div class="col-md-3 mb-3">
                    <label for="validationDefault03">Nome da Instituição</label>
                    <input type="text" class="form-control form-control-sm" id="instituicao-1" name="instituicao-1" placeholder="Instituição">
                  </div>
                  <div class="col-md-3 mb-3">
                    <label for="validationDefault04">Conclusão</label>
                    <input type="text" class="form-control form-control-sm" id="conclusao-1" name="conclusao-1" placeholder="mm/aaaa">
                </div>               
              </div>
              <div class="form-row">
                <div class="col-md-3 mb-3">
                    <label for="validationDefault05">Nível</label>
                    <select class="form-control form-control-sm" id="nivel-2" name="nivel-2">
                      <option value="">Selecione</option>
                      <option value="Nível Técnico">Nível Técnico</option>
                      <option value="Nível Superior">Nível Superior</option>
                      <option value="Nível Profissionalizante">Nível Profissionalizante</option>
                      <option value="Nível de Aperfeiçoamento">Nível Aperfeiçoamento</option>                                      
                    </select>
                  </div>
                  <div class="col-md-3 mb-3">
                    <label for="validationDefault03">Nome do Curso</label>
                    <input type="text" class="form-control form-control-sm" id="curso-2" name="curso-2" placeholder="Nome do Curso">
                  </div>
                  <div class="col-md-3 mb-3">
                    <label for="validationDefault03">Nome da Instituição</label>
                    <input type="text" class="form-control form-control-sm" id="instituicao-2" name="instituicao-2" placeholder="Instituição">
                  </div>
                  <div class="col-md-3 mb-3">
                    <label for="validationDefault04">Conclusão</label>
                    <input type="text" class="form-control form-control-sm" id="conclusao-2" name="conclusao-2" placeholder="mm/aaaa">
                </div>               
              </div>
              <div class="form-row">
                <div class="col-md-3 mb-3">
                    <label for="validationDefault05">Nível</label>
                    <select class="form-control form-control-sm" id="nivel-3" name="nivel-3">
                      <option value="">Selecione</option>
                      <option value="Nível Técnico">Nível Técnico</option>
                      <option value="Nível Superior">Nível Superior</option>
                      <option value="Nível Profissionalizante">Nível Profissionalizante</option>
                      <option value="Nível de Aperfeiçoamento">Nível Aperfeiçoamento</option>                                      
                    </select>
                  </div>
                  <div class="col-md-3 mb-3">
                    <label for="validationDefault03">Nome do Curso</label>
                    <input type="text" class="form-control form-control-sm" id="curso-3" name="curso-3" placeholder="Nome do Curso">
                  </div>
                  <div class="col-md-3 mb-3">
                    <label for="validationDefault03">Nome da Instituição</label>
                    <input type="text" class="form-control form-control-sm" id="instituicao-3" name="instituicao-3" placeholder="Instituição">
                  </div>
                  <div class="col-md-3 mb-3">
                    <label for="validationDefault04">Conclusão</label>
                    <input type="text" class="form-control form-control-sm" id="conclusao-3" placeholder="mm/aaaa">
                </div>               
              </div>
              <div class="form-row">
                <div class="col-md-3 mb-3">
                    <label for="validationDefault05">Nível</label>
                    <select class="form-control form-control-sm" id="nivel-4" name="nivel-4">
                      <option value="">Selecione</option>
                      <option value="Nível Técnico">Nível Técnico</option>
                      <option value="Nível Superior">Nível Superior</option>
                      <option value="Nível Profissionalizante">Nível Profissionalizante</option>
                      <option value="Nível de Aperfeiçoamento">Nível Aperfeiçoamento</option>                                      
                    </select>
                  </div>
                  <div class="col-md-3 mb-3">
                    <label for="validationDefault03">Nome do Curso</label>
                    <input type="text" class="form-control form-control-sm" id="curso-4" name="curso-4" placeholder="Nome do Curso">
                  </div>
                  <div class="col-md-3 mb-3">
                    <label for="validationDefault03">Nome da Instituição</label>
                    <input type="text" class="form-control form-control-sm" id="instituicao-4" name="instituicao-4" placeholder="Instituição">
                  </div>
                  <div class="col-md-3 mb-3">
                    <label for="validationDefault04">Conclusão</label>
                    <input type="text" class="form-control form-control-sm" id="conclusao-4" name="conclusao-4" placeholder="mm/aaaa">
                </div>               
              </div>
              <div class="form-row">
                <div class="col-md-3 mb-3">
                    <label for="validationDefault05">Nível</label>
                    <select class="form-control form-control-sm" id="nivel-5" name="nivel-5">
                      <option value="">Selecione</option>
                      <option value="Nível Técnico">Nível Técnico</option>
                      <option value="Nível Superior">Nível Superior</option>
                      <option value="Nível Profissionalizante">Nível Profissionalizante</option>
                      <option value="Nível de Aperfeiçoamento">Nível Aperfeiçoamento</option>                                      
                    </select>
                  </div>
                  <div class="col-md-3 mb-3">
                    <label for="validationDefault03">Nome do Curso</label>
                    <input type="text" class="form-control form-control-sm" id="curso-5" name="curso-5" placeholder="Nome do Curso">
                  </div>
                  <div class="col-md-3 mb-3">
                    <label for="validationDefault03">Nome da Instituição</label>
                    <input type="text" class="form-control form-control-sm" id="instituicao-5" name="instituicao-5" placeholder="Instituição">
                  </div>
                  <div class="col-md-3 mb-3">
                    <label for="validationDefault04">Conclusão</label>
                    <input type="text" class="form-control form-control-sm" id="conclusao-5" name="conclusao-5" placeholder="mm/aaaa">
                </div>               
              </div>
              <div class="form-row">
                <div class="col-md-3 mb-3">
                    <label for="validationDefault05">Nível</label>
                    <select class="form-control form-control-sm" id="nivel-6" name="nivel-6">
                      <option value="">Selecione</option>
                      <option value="Nível Técnico">Nível Técnico</option>
                      <option value="Nível Superior">Nível Superior</option>
                      <option value="Nível Profissional">Nível Profissionalizante</option>
                      <option value="Nível de Aperfeiçoamento">Nível Aperfeiçoamento</option>                                      
                    </select>
                  </div>
                  <div class="col-md-3 mb-3">
                    <label for="validationDefault03">Nome do Curso</label>
                    <input type="text" class="form-control form-control-sm" id="curso-6" name="nivel-6" placeholder="Nome do Curso">
                  </div>
                  <div class="col-md-3 mb-3">
                    <label for="validationDefault03">Nome da Instituição</label>
                    <input type="text" class="form-control form-control-sm" id="instituicao-6" name="instituicao-6" placeholder="Instituição">
                  </div>
                  <div class="col-md-3 mb-3">
                    <label for="validationDefault04">Conclusão</label>
                    <input type="text" class="form-control form-control-sm" id="conclusao-6" name="conclusao-6" placeholder="mm/aaaa">
                </div>               
              </div>
              <div id="experiencia"> <!-- Escolaridade - início -->
                <h4>EXPERIÊNCIA PROFISSIONAL</h4>
                <h5>Última Empresa</h5>
                <div class="form-row">
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="atualmente" value="checked">
                    <label class="form-check-label" for="exampleCheck1">Trabalhando atualmente</label>
                  </div>
                </div>
                <div class="form-row">
                    <div class="col-md-4 mb-3">
                        <label for="validationDefault05">Nome da empresa</label>
                        <input type="text" class="form-control form-control-sm" id="nome-empresa-1" name="nome-empresa-1" placeholder="Nome da Empresa">
                      </div>
                    <div class="col-md-4 mb-3">
                      <label for="validationDefault03">Cargo</label>
                      <input type="text" class="form-control form-control-sm" id="cargo-1" name="cargo-1" placeholder="Cargo">
                    </div>
                    <div class="col-md-2 mb-3">
                      <label for="validationDefault04">De</label>
                      <input type="date" class="form-control form-control-sm" id="de-1" name="de-1" placeholder="Mês">
                    </div>
                    <div class="col-md-2 mb-3">
                      <label for="validationDefault04">Até</label>
                      <input type="date" class="form-control form-control-sm" id="ate-1" name="ate-1" placeholder="Ano">
                    </div>              
                </div>
                <div class="form-row">
                  <div class="col-md-12 mb-3">
                      <label for="validationDefault05">Descreva suas atividades</label>
                      <textarea class="form-control form-control-sm" id="atividades-1" name="atividades-1" rows="3"></textarea>
                    </div>                           
              </div>
              <h5>Penúltima Empresa</h5>
              <div class="form-row">
                <div class="col-md-4 mb-3">
                    <label for="validationDefault05">Nome da empresa</label>
                    <input type="text" class="form-control form-control-sm" id="nome-empresa-2" name="nome-empresa-2" placeholder="Nome da Empresa">
                  </div>
                <div class="col-md-4 mb-3">
                  <label for="validationDefault03">Cargo</label>
                  <input type="text" class="form-control form-control-sm" id="cargo-2" name="cargo-2" placeholder="Cargo">
                </div>
                <div class="col-md-2 mb-3">
                  <label for="validationDefault04">De</label>
                  <input type="date" class="form-control form-control-sm" id="de-2" name="de-2" placeholder="Mês">
                </div>
                <div class="col-md-2 mb-3">
                  <label for="validationDefault04">Até</label>
                  <input type="date" class="form-control form-control-sm" id="ate-2" name="ate-2" placeholder="Ano">
                </div>              
            </div>
            <div class="form-row">
              <div class="col-md-12 mb-3">
                  <label for="validationDefault05">Descreva suas atividades</label>
                  <textarea class="form-control form-control-sm" id="atividades-2" name="atividades-2" rows="3"></textarea>
                </div>                           
          </div>
          <h5>Antepenúltima Empresa</h5>
          <div class="form-row">
            <div class="col-md-4 mb-3">
                <label for="validationDefault05">Nome da empresa</label>
                <input type="text" class="form-control form-control-sm" id="nome-empresa-3" name="nome-empresa-3" placeholder="Nome da Empresa">
              </div>
            <div class="col-md-4 mb-3">
              <label for="validationDefault03">Cargo</label>
              <input type="text" class="form-control form-control-sm" id="cargo-3" name="cargo-3" placeholder="Cargo">
            </div>
            <div class="col-md-2 mb-3">
              <label for="validationDefault04">De</label>
              <input type="date" class="form-control form-control-sm" id="de-3" name="de-3" placeholder="Mês">
            </div>
            <div class="col-md-2 mb-3">
              <label for="validationDefault04">Até</label>
              <input type="date" class="form-control form-control-sm" id="ate-3" name="ate-3" placeholder="Ano">
            </div>              
        </div>
        <div class="form-row">
          <div class="col-md-12 mb-3">
              <label for="validationDefault05">Descreva suas atividades</label>
              <textarea class="form-control form-control-sm" id="atividades-3" name="atividades-3" rows="3"></textarea>
            </div>                           
        </div>
        <h4>SOBRE MIM</h4>
        <div class="form-row">
          <div class="col-md-12 mb-3">
              <label for="validationDefault05">Escreva um pouco sobre você</label>
              <textarea class="form-control form-control-sm" id="sobremim" name="sobremim" rows="4" placeholder="Escreva sobre suas principais qualidades, sobre o que precisa melhorar, qual sua perspectiva profissional e pessoal..."></textarea>
            </div>                           
        </div>
            </div>
            <button id="enviar" name="enviar" class="btn btn-warning">CADASTRAR</button>            
          </form>
      </div>

      
      <script src="js/script.js"></script>     
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>    
</body>
</html>
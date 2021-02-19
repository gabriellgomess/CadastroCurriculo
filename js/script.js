// INÍCIO DO VALIDA CPF ========================================================================================
function iscpf(){      
    var cpf = document.getElementById('cpf').value,
        cpfnum =  cpf.replace('.', '').replace('.', '').replace('-', ''),
        novePrimeiros = cpfnum.substr(0, 9),
        dezPrimeiros = cpfnum.substr(0, 10),
        somaNovePrimeirosNum = 0,
        somaDezPrimeirosNum = 0,
        multiplicador = 10;
    
    var result_teste = document.getElementById('result-teste');

    for(var i = 0; i < novePrimeiros.length; i++ ){
      var numero = novePrimeiros.substr(i, 1);
      somaNovePrimeirosNum += numero * multiplicador;
      multiplicador--;
    }
    multiplicador = 11;
    for(var i = 0; i < dezPrimeiros.length; i++ ){
      var numero = dezPrimeiros.substr(i, 1);
      somaDezPrimeirosNum += numero * multiplicador;
      multiplicador--;
    }
    var resultadoModulo1 = (somaNovePrimeirosNum * 10) % 11;
    var resultadoModulo2 = (somaDezPrimeirosNum * 10) % 11;

    if((resultadoModulo1.toString() + resultadoModulo2.toString()) == cpfnum.substr(9, 2)){
      document.getElementById('enviar').type = 'submit';
      result_teste.innerHTML = '<p id="rescpf" style="color: green; margin: 0">CPF VÁLIDO</p>';
    }else{
      result_teste.innerHTML = '<p id="rescpf" style="color: red; margin: 0">CPF INVÁLIDO</p>';
      document.getElementById('enviar').type = 'button';
      alert('Digite um CPF válido');
    }

  }

//   FIM DO VALIDA CPF ====================================================================================
// *****************************************************************************************
// INICIO DO BUSCA ENDEREÇO ===============================================================================

  function limpa_formulário_cep() {
    //Limpa valores do formulário de cep.
    document.getElementById('rua').value=("");
    document.getElementById('bairro').value=("");
    document.getElementById('cidade').value=("");
    document.getElementById('uf').value=("");              
}

function meu_callback(conteudo) {
if (!("erro" in conteudo)) {
    //Atualiza os campos com os valores.
    document.getElementById('rua').value=(conteudo.logradouro);
    document.getElementById('bairro').value=(conteudo.bairro);
    document.getElementById('cidade').value=(conteudo.localidade);
    document.getElementById('uf').value=(conteudo.uf);
    
} //end if.
else {
    //CEP não Encontrado.
    limpa_formulário_cep();
    alert("CEP não encontrado.");
}
}

function pesquisacep(valor) {

//Nova variável "cep" somente com dígitos.
var cep = valor.replace(/\D/g, '');

//Verifica se campo cep possui valor informado.
if (cep != "") {

    //Expressão regular para validar o CEP.
    var validacep = /^[0-9]{8}$/;

    //Valida o formato do CEP.
    if(validacep.test(cep)) {

        //Preenche os campos com "..." enquanto consulta webservice.
        document.getElementById('rua').value="...";
        document.getElementById('bairro').value="...";
        document.getElementById('cidade').value="...";
        document.getElementById('uf').value="...";
        

        //Cria um elemento javascript.
        var script = document.createElement('script');

        //Sincroniza com o callback.
        script.src = 'https://viacep.com.br/ws/'+ cep + '/json/?callback=meu_callback';

        //Insere script no documento e carrega o conteúdo.
        document.body.appendChild(script);

    } //end if.
    else {
        //cep é inválido.
        limpa_formulário_cep();
        alert("Formato de CEP inválido.");
    }
} //end if.
else {
    //cep sem valor, limpa formulário.
    limpa_formulário_cep();
}
};

// FIM DO BUSCA ENDEREÇO =================================================================================

// MASCARA DO CPF 000.000.000-00 =========================================================================
function mascara_cpf(){
  var cpf = document.getElementById('cpf')
  if(cpf.value.length == 3 || cpf.value.length == 7){
    cpf.value += "."
  } else if(cpf.value.length == 11){
    cpf.value += "-"
  };
};
// FIM MASCARA DO CPF =====================================================================================

// AJAX ===================================================================================================

$(function(){
  $("#loader").on("click", function(){    
      $.ajax({
        url: "/jacenir/buscatotal.php",
        success: function(result){
          $("#loaded").html(result);
        },
        error: function(){
          $("#loaded").html("Error");
        }
      });
  });
});


$(document).ready(function () {
    $('#cep').on('blur', function () {
        var cep = $(this).val().replace(/\D/g, '');
        if (cep != "") {
            var url = "https://viacep.com.br/ws/" + cep + "/json/";
            let $;
            $.getJSON(url, function (data) {
                if ("erro" in data) {
                    alert("CEP não encontrado.");
                } else {
                    var cidadeEstado = data.localidade + " - " + data.uf;
                    $('#cidade').val(cidadeEstado);
                    $('#logradouro').val(data.logradouro);
                    $('#bairro').val(data.bairro);
                    $('#complemento').focus();

                    // Desabilitar os campos e adicionar estilo visual
                    $('#cidade').prop('disabled', true).addClass('disabled');
                    $('#logradouro').prop('disabled', true).addClass('disabled');
                    $('#bairro').prop('disabled', true).addClass('disabled');

                    // Desabilitar os rótulos vinculados aos campos desativados
                    $('label[for="cidade"]').addClass('disabledLabel');
                    $('label[for="logradouro"]').addClass('disabledLabel');
                    $('label[for="bairro"]').addClass('disabledLabel');

                    // Remover o foco dos campos desabilitados
                    $('#cidade').blur();
                    $('#logradouro').blur();
                    $('#bairro').blur();
                    $('#complemento').blur();
                }
            });
        }
    });
});


/* VALIDAR CEP */
$(document).ready(function () {
    $('#cep').on('input', function () {
        var cep = $(this).val().replace(/\D/g, '');
        if (cep.length === 8) {
            cep = cep.replace(/(\d{5})(\d{3})/, '$1-$2');
        }
        $(this).val(cep);
    });
});


/* VALIDAR CPF */
$(document).ready(function () {
    $('#cpf').on('input', function () {
        var cpf = $(this).val().replace(/\D/g, '');
        if (cpf.length > 11) {
            cpf = cpf.slice(0, 11);
        }
        cpf = cpf.replace(/(\d{3})(\d{3})(\d{3})(\d{2})/, '$1.$2.$3-$4');
        $(this).val(cpf);
    });
});


/* VALIDAR NOME */
$(document).ready(function () {
    $('#nome').on('input', function () {
        var nome = $(this).val().replace(/[^a-zA-Z\s]/g, ''); // Remove caracteres não alfabéticos e espaços extras
        nome = nome.replace(/\s{2,}/g, ' '); // Remove espaços extras
        nome = nome.toUpperCase(); // Coloca a primeira letra de cada palavra em maiúsculo
        $(this).val(nome);
    });
});


/* VALIDAR SOBRENOME */
$(document).ready(function () {
    $('#sobrenome').on('input', function () {
        var sobrenome = $(this).val().replace(/[^a-zA-Z\s]/g, ''); // Remove caracteres não alfabéticos e espaços extras
        sobrenome = sobrenome.replace(/\s{2,}/g, ' '); // Remove espaços extras
        sobrenome = sobrenome.toUpperCase(); // Converte todas as letras para maiúsculas
        $(this).val(sobrenome);
    });
});


/* VALIDAR TELEFONE  */
$(document).ready(function() {
    $('#telefone').on('input', function() {
      var telefone = $(this).val().replace(/\D/g, ''); // Remove caracteres não numéricos
      
      // Formatação enquanto digita
      var formattedTelefone = formatarTelefone(telefone);
      
      $(this).val(formattedTelefone);
    });
  });
  
  function formatarTelefone(telefone) {
    var formattedTelefone = telefone;
    
    // Remove código de país (caso exista)
    if (formattedTelefone.length > 11) {
      formattedTelefone = formattedTelefone.slice(-11);
    }
    
    // Formatação: (XX) XXXXX-XXXX ou (XX) XXXX-XXXX
    if (formattedTelefone.length === 11) {
      formattedTelefone = formattedTelefone.replace(/(\d{2})(\d{5})(\d{4})/, '($1) $2-$3');
    } else if (formattedTelefone.length === 10) {
      formattedTelefone = formattedTelefone.replace(/(\d{2})(\d{4})(\d{4})/, '($1) $2-$3');
    }
    
    return formattedTelefone;
  }
  


/* VALIDAR CELULAR  */
$(document).ready(function() {
    $('#celular').on('input', function() {
      var Celular = $(this).val().replace(/\D/g, ''); // Remove caracteres não numéricos
      
      // Formatação enquanto digita
      var formattedCelular = formatarCelular(Celular);
      
      $(this).val(formattedCelular);
    });
  });
  
  function formatarCelular(Celular) {
    var formattedCelular = Celular;
    
    // Remove código de país (caso exista)
    if (formattedCelular.length > 11) {
      formattedCelular = formattedCelular.slice(-11);
    }
    
    // Formatação: (XX) XXXXX-XXXX ou (XX) XXXX-XXXX
    if (formattedCelular.length === 11) {
      formattedCelular = formattedCelular.replace(/(\d{2})(\d{5})(\d{4})/, '($1) $2-$3');
    } else if (formattedCelular.length === 10) {
      formattedCelular = formattedCelular.replace(/(\d{2})(\d{4})(\d{4})/, '($1) $2-$3');
    }
    
    return formattedCelular;
  }
  

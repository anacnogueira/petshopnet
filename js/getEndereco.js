$(document).ready(function(){
  $("#getEndereco").click(function(){
   getEndereco($("#cep").val());
   });
  });

function getEndereco(cep) {
    if($.trim(cep) != ""){
        $("#loadingCep").html('Pesquisando...');
        $.getScript("http://cep.republicavirtual.com.br/web_cep.php?formato=javascript&cep="+cep, function(){
            if (resultadoCEP["resultado"] != 0) {
                $("#cidade").val(unescape(resultadoCEP["cidade"]));
                $("#estado").val(unescape(resultadoCEP["uf"]));
            }else{
                $("#loadingCep").html(unescape(resultadoCEP["resultado_txt"]));
            }
        });
    }
    else{
        $("#loadingCep").html('Informe o CEP');
    }
}

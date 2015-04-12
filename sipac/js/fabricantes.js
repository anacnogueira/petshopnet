/**-----------------------------------------------------------|*
*|  SIPAC - Sistema Integrado de Painel de Controle V 2.0     |*
*|  Descrição: Funções - Fabricantes				                  |*
*|  Criado:     11/09/2007 | Por: Ana Claudia                 |*
*|  Modificado: __/__/____ | Por:                             |*
*|  Pagina: js/fabricante.js                                  |*
*|------------------------------------------------------------|*/
$(document).ready(function() {
 $("#frm_fornecedor").submit(function(){
  var erro = "";

  if(empty($("[name = fornecedores_nome]").val()))
    erro += "Insira o nome do fabricante.";
    
  if(!empty(erro))
  {
    $("div.erro").remove();
    $("<div class='erro'>" + erro + "</div>").insertAfter(".titulo");
    return false;
  }

 });
});

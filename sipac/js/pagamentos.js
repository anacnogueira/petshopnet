/**-----------------------------------------------------------|*
*|  SIPAC - Sistema Integrado de Painel de Controle V 2.0     |*
*|  Descrição: Funções - Pagamentos		                        |*
*|  Criado:     20/10/2007 | Por: Ana Claudia                 |*
*|  Modificado: __/__/____ | Por:                             |*
*|  Pagina: js/pagamentos.js                                  |*
*|------------------------------------------------------------|*/
jQuery(document).ready(function() {
 jQuery("#frm_pagamento").submit(function(){
  var erro = "";

  if(empty(jQuery("[name = formas_pagamento_desc]").val()))
    erro += "Insira a descrição da forma de pagamento<br />";
    
  if(empty(jQuery("[name=formas_pagamento_vezes]").val()))
    erro += "Insira o número de parcelas permitidas <br />";
    
   if(!empty(jQuery("[name=formas_pagamento_vezes]").val()) && (jQuery("[name=formas_pagamento_vezes_juros]").val() > jQuery("[name=formas_pagamento_vezes]").val()))
    erro += "O número de parcelas com juros é maior que o total de parcelas permitidas <br />"; 
    
  if(!empty(erro))
  {
    jQuery("div.erro").remove();
    jQuery("<div class='erro'>" + erro + "</div>").insertAfter(".titulo");
    return false;
  }
 });
});

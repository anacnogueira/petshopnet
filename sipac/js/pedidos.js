/**-----------------------------------------------------------|*
*|  SIPAC - Sistema Integrado de Painel de Controle V 2.0     |*
*|  Descrição: Funções - pedidos			                        |*
*|  Criado:     15/10/2009 | Por: Ana Claudia                 |*
*|  Modificado: __/__/____ | Por:                             |*
*|  Pagina: js/users.js                                       |*
*|------------------------------------------------------------|*/
jQuery(document).ready(function() {
 jQuery("#frm_pedido").submit(function(){
  var erro = "";

  
  if(!empty(erro))
  {
    jQuery("div.erro").remove();
    jQuery("<div class='erro'>" + erro + "</div>").insertAfter(".titulo");
    return false;
  }

 });
 });


/**-----------------------------------------------------------|*
*|  SIPAC - Sistema Integrado de Painel de Controle V 2.0     |*
*|  Descrição: Funções - Promocoes				                    |*
*| 	Criado:     21/12/2011 | Por: Ana Claudia Nogueira        |*
*|  Modificado: __/__/____ | Por:                             |*
*|  Pagina: js/fretes.js                                   |*
*|----------------------------------------------------------- |*/
jQuery(document).ready(function() {
 jQuery("#frm_frete").submit(function(){
  var erro = "";

  if(empty(jQuery("[name=regra]").val()))
   erro += "Insira o nome da regra<br />";

  if(empty(jQuery("[name=descricao]").val()))
   erro += "Insira a descricao da regra<br />";

  if(empty(jQuery("[name=prazo_entrega]").val()))
   erro += "Insira o prazo de entrega<br />";

  if(empty(jQuery("[name=valor]").val())){
    erro += "Insira o valor do frete<br />";
  }

  if(!empty(erro))
  {
    jQuery("div.erro").remove();
    jQuery("<div class='erro'>" + erro + "</div>").insertAfter(".titulo");
    return false;
  }
 });
});
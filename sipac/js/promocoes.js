/**-----------------------------------------------------------|*
*|  SIPAC - Sistema Integrado de Painel de Controle V 2.0     |*
*|  Descrição: Funções - Promocoes				                    |*
*| 	Criado:     06/09/2007 | Por: Ana Claudia Nogueira        |*
*|  Modificado: __/__/____ | Por:                             |*
*|  Pagina: js/promocoes.js                                   |*
*|----------------------------------------------------------- |*/
jQuery(document).ready(function() {
 jQuery("#frm_promocao").submit(function(){
  var erro = "";

  if(empty(jQuery("[name = produtos_codigo]").val()))
   erro += "Selecione o produto<br />";

  if(empty(jQuery("[name = promocoes_preco]").val()))
   erro += "Insira o preço promocional<br />";
   
  if(!empty(jQuery("[name=data_ini]").val()) && !IsValidDate(jQuery("[name=data_fin]").val())){
    erro += "Insira a data de início corretamente<br />";
  }
  
  if(!empty(jQuery("[name=data_fin]").val()) && !IsValidDate(jQuery("[name=data_fin]").val())){
    erro += "Insira a data de fim corretamente<br />";
  }
  
  if(!empty(erro))
  {
    jQuery("div.erro").remove();
    jQuery("<div class='erro'>" + erro + "</div>").insertAfter(".titulo");
    return false;
  }

 });
});

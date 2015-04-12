/**-----------------------------------------------------------|*
*|  SIPAC - Sistema Integrado de Painel de Controle V 2.0     |*
*|  Descrição: Funções - Autorizacoes				                  |*
*|  Criado:     07/09/2007 | Por: Ana Claudia                 |*
*|  Modificado: __/__/____ | Por:                             |*
*|  pagina: js/autoricacoes.js		                            |*
*|------------------------------------------------------------|*/
jQuery(document).ready(function(){
 jQuery(".checkAuth").click(function(){
   arraType = jQuery(this).attr("class").split(" ");
   if(jQuery(this).val() <= 1)
    jQuery("#" + arraType[2]).css("display","none");
   else
    jQuery("#" + arraType[2]).css("display","block");
 });
});







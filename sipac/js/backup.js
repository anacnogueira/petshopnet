/**-----------------------------------------------------------|*
*|  SIPAC - Sistema Integrado de Painel de Controle V 2.0     |*
*|  Descrição: Funções - Produtos    			                  	|*
*|  Criado:     21/12/2007 | Por: Ana Claudia                 |*
*|  Modificado: 16/10/2009 | Por:                             |*
*|  Pagina: js/backup.js                                      |*
*|------------------------------------------------------------|*/
jQuery(document).ready(function() {
 jQuery("#frm_backup").submit(function(){
  var erro = "";
  
  if(empty(jQuery("[name = arquivo]").val()))
    erro += "Selecione o arquivo";

  if(!empty(erro))
  {
    jQuery("div.erro").remove();
    jQuery("<div class='erro'>" + erro + "</div>").insertAfter(".titulo");
    return false;
  }
 });
});

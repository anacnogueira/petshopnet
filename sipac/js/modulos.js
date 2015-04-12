/**-------------------------------------------|*
*|     Sistema: Nokia                         |*
*|   Descrição: Funções - Users        				|*
*|      Criado: 02/05/2007 | Por: Ana Claudia |*
*|  Modificado: __/__/____ | Por:             |*
*|--------------------------------------------|*/
$(document).ready(function() {
 jQuery("#frm_modulo").submit(function(){

  var erro = "";

  if(empty(jQuery("[name = modulos_nome]").val()))
    erro += "Insira o nome do módulo<br />";

  if(empty(jQuery("[name = modulos_ordem]").val()))
    erro += "Insira a ordem do módulo<br />";

  if(!empty(erro))
  {
    jQuery("div.erro").remove();
    jQuery("<div class='erro'>" + erro + "</div>").insertAfter(".titulo");
    return false;
  }

 });
});

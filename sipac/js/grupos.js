/**-------------------------------------------|*
*|     Sistema: Nokia                         |*
*|   Descrição: Funções - Users        				|*
*|      Criado: 02/05/2007 | Por: Ana Claudia |*
*|  Modificado: __/__/____ | Por:             |*
*|--------------------------------------------|*/
jQuery(document).ready(function() {
 jQuery("#frm_grupo").submit(function(){
  var erro = "";

  if(empty(jQuery("[name = grupos_nome]").val()))
    erro += "Insira o nome do grupo<br />";
  if(empty(jQuery("[name = grupos_descricao]").val()))
    erro += "Insira a descrição do grupo<br />";
    
  if(!empty(erro))
  {
    jQuery("div.erro").remove();
    jQuery("<div class='erro'>" + erro + "</div>").insertAfter(".titulo");
    return false;
  }

 });
});



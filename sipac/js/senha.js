/**-------------------------------------------|*
*|     Sistema: Nokia                         |*
*|   Descrição: Funções - Users        				|*
*|      Criado: 02/05/2007 | Por: Ana Claudia |*
*|  Modificado: __/__/____ | Por:             |*
*|--------------------------------------------|*/
jQuery(document).ready(function() {
 jQuery("#frm_senha").submit(function(){
  var erro = "";
  if(empty(jQuery("[name = senha]").val()))
    erro += "Digite a nova senha <br />";
  if(empty(jQuery("[name = senha2]").val()))
    erro += "Digite a confirmação da nova senha <br />";
  if((!empty(jQuery("[name = senha]").val()) && !empty(jQuery("[name = senha2]").val())) && jQuery("[name = senha]").val() != jQuery("[name = senha2]").val())
    erro += "A senha não coincide com a confirmação <br />";

  if(!empty(erro))
  {
    jQuery("div.erro").remove();
    jQuery("<div class='erro'>" + erro + "</div>").insertAfter(".titulo");
    return false;
    
  }
 });
});



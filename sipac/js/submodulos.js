/**-------------------------------------------|*
*|     Sistema: Nokia                         |*
*|   Descrição: Funções - Users        				|*
*|      Criado: 02/05/2007 | Por: Ana Claudia |*
*|  Modificado: __/__/____ | Por:             |*
*|--------------------------------------------|*/
jQuery(document).ready(function() {
 jQuery("#frm_submodulo").submit(function(){

  var erro = "";

  if(empty(jQuery("[name = submodulos_nome]").val()))
    erro += "Insira o nome do submódulo<br />";
  if(empty(jQuery("[name = modulos_id]").val()))
    erro += "Selecione o módulo<br />";
  if(empty(jQuery("[name = submodulos_pagina]").val()))
    erro += "Insira o nome da página do submódulo<br />";
  if(empty(jQuery("[name = submodulos_ordem]").val()))
    erro += "Insira a ordem do submódulo<br />";

  if(!empty(erro))
  {
    jQuery("div.erro").remove();
    jQuery("<div class='erro'>" + erro + "</div>").insertAfter(".titulo");
    return false;
  }

 });
  jQuery("[name=modulos_id]").change(function(){
   jQuery.get(
    "load_ordem.php",
    {
     type: "submodulos",
     id: jQuery(this).val()
    },
    function(data) {

     jQuery("[name=submodulos_ordem]").val(data);
    }
   )
  });
});

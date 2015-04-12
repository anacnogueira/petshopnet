/**-------------------------------------------|*
*|     Sistema: Nokia                         |*
*|   Descrição: Funções - Users        				|*
*|      Criado: 02/05/2007 | Por: Ana Claudia |*
*|  Modificado: __/__/____ | Por:             |*
*|--------------------------------------------|*/
$(document).ready(function() {

 
 $('#frm_rotina').submit(function(){
   updateRTE('rotinas_descricao');
  var erro = "";

  if(empty($("[name = rotinas_nome]").val()))
    erro += "Insira o nome da rotina<br />";
  if(empty($("[name = modulos_id]").val()))
    erro += "Selecione o módulo<br />";
  if(empty($("[name = submodulos_id]").val()))
    erro += "Selecione o submódulo<br />";
  if(empty($("[name = rotinas_pagina]").val()))
    erro += "Insira a página da rotina<br />";

   alert($("[name = submodulos_id]:selected").text());

  if(!empty(erro))
  {
    $("div.erro").remove();
    $("<div class='erro'>" + erro + "</div>").insertAfter(".titulo");
    return false;
  }
 
 });

 $('#modulos_id').change(function(){
     submodulosDropdown();
 });
 
});

function submodulosDropdown(){

 var modValue  = $('#modulos_id').val();
 var dropdownSet = $('#submodulos_id');

 if((modValue.length == 0)){
  dropdownSet.attr("disabled",true);
  $(dropdownSet).emptySelect();
  } else {
   dropdownSet.attr("disabled",false);
   $.getJSON(
    'getSubmodulos.php',
    {modulos_id: modValue},
    function(data) { $(dropdownSet).loadSelect(data)}
   )
  }
 }



 //Usage: initRTE(imagesPath, includesPath, cssFile)
initRTE("editor/images/", "editor/", "");

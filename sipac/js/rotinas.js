/**-------------------------------------------|*
*|     Sistema: Nokia                         |*
*|   Descrição: Funções - Users        				|*
*|      Criado: 02/05/2007 | Por: Ana Claudia |*
*|  Modificado: __/__/____ | Por:             |*
*|--------------------------------------------|*/
jQuery(document).ready(function() {

 jQuery('#frm_rotina').submit(function(){
  var erro = "";
  var submodulos_id = "";
  
  jQuery("[name = submodulos_id] option:selected").each(function(){
     submodulos_id = jQuery(this).val();
   });
  
  if(empty(jQuery("[name = rotinas_nome]").val()))
    erro += "Insira o nome da rotina<br />";
  if(empty(jQuery("[name = modulos_id]").val()))
    erro += "Selecione o módulo<br />";
  if(empty(jQuery("[name=rotinas_ordem]").val()))
    erro += "Insira a ordem da rotina<br />";
  if(empty(submodulos_id))
    erro += "Selecione o submódulo<br />";
  if(empty(jQuery("[name = rotinas_pagina]").val()))
    erro += "Insira a página da rotina<br />";



  if(!empty(erro))
  {
    jQuery("div.erro").remove();
    jQuery("<div class='erro'>" + erro + "</div>").insertAfter(".titulo");
    return false;
  }
 
 });

 jQuery('#modulos_id').change(function(){
     submodulosDropdown();
 });
 
 jQuery("[name=submodulos_id]").change(function(){
   jQuery.get(
    "load_ordem.php",
    {
     type: "rotinas",
     id: jQuery(this).val()
    },
    function(data) {

     jQuery("[name=rotinas_ordem]").val(data);
    }
   )
  });


});

function submodulosDropdown(){

 var modValue  = jQuery('#modulos_id').val();
 var dropdownSet = jQuery('#submodulos_id');

 if((modValue == 0)){
  dropdownSet.attr("disabled",true);
  jQuery(dropdownSet).emptySelect();
  } else {
   dropdownSet.attr("disabled",false);
   jQuery.getJSON(
    'getSubmodulos.php',
    {modulos_id: modValue},
    function(data) {
     var options = '';
     for (var i = 0; i < data.length; i++)
        options += '<option value="' + data[i].value + '">' + data[i].caption + '</option>';


     jQuery(dropdownSet).html(options);
     }
   )
  }
 }

/**-------------------------------------------|*
*|     Sistema: Nokia                         |*
*|   Descrição: Funções - Users        				|*
*|      Criado: 02/05/2007 | Por: Ana Claudia |*
*|  Modificado: __/__/____ | Por:             |*
*|--------------------------------------------|*/
jQuery(document).ready(function() {

 //Mascara para data
 jQuery("[name=data_de]").mask("99/99/9999");
 jQuery("[name=data_ate]").mask("99/99/9999");

 jQuery('#frm_log').submit(function(){

  var erro = "";
  var submodulos_id = "";

  if(!empty(jQuery("[name=data_de]").val()) && !IsValidDate(jQuery("[name=data_de]").val()))
   erro += "Preencha a data inicial corretamente <br />";
   
  if(!empty(jQuery("[name=data_ate]").val()) && !IsValidDate(jQuery("[name=data_ate]").val()))
   erro += "Preencha a data final corretamente <br />";
   
  if((IsValidDate(jQuery("[name=data_de]").val()) && IsValidDate(jQuery("[name=data_ate]").val())) && jQuery("[name=data_ate]").val() < jQuery("[name=data_de]").val())
   erro += "A data final deve ser maior que a data inicial <br />";
   
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

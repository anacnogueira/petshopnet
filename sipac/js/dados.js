/**-------------------------------------------|*
*|     Sistema: Nokia                         |*
*|   Descrição: Funções - Users        				|*
*|      Criado: 02/05/2007 | Por: Ana Claudia |*
*|  Modificado: __/__/____ | Por:             |*
*|--------------------------------------------|*/
jQuery(document).ready(function() {
 jQuery("#frm_dados").submit(function(){
  var erro = "";
  if(empty(jQuery("[name = users_nome]").val()))
    erro += "Insira o nome <br />";
  if(!empty(jQuery("[name = users_CPF]").val()) && !IsCPF(jQuery("[name = users_CPF]").val()))
    erro += "CPF inválido <br />";
  if(!IsEmail(jQuery("[name = users_email]").val()))
    erro += "E-mail inválido ou vazio<br />";

  else if(IsEmail(jQuery("[name = users_email]").val()))
  {
   var text = jQuery.ajax({
      type: "POST",
      url: "valida_email.php",
      async: false,
      data: "email=" + jQuery("[name = users_email]").val()
       + (!empty(jQuery("[name=users_emailOld]").val()) ? "&emailOld=" + jQuery("[name=users_emailOld]").val() : "")

   }).responseText;

   if(text > 0)
    erro += "E-mail já cadastrado no banco de dados <br />";
  }
  if(isNaN(text))
   erro += text + "<br />";
   
  if(!empty(erro))
  {
    jQuery("div.erro").remove();
    jQuery("<div class='erro'>" + erro + "</div>").insertAfter(".titulo");
    return false;
  }
 });
});



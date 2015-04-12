/**-----------------------------------------------------------|*
*|  SIPAC - Sistema Integrado de Painel de Controle V 2.0     |*
*|  Descrição: Funções - users 				                        |*
*|  Criado:     12/09/2007 | Por: Ana Claudia                 |*
*|  Modificado: __/__/____ | Por:                             |*
*|  Pagina: js/users.js                                       |*
*|------------------------------------------------------------|*/
jQuery(document).ready(function() {
 jQuery("#frm_user").submit(function(){
  var erro = "";

  if(empty(jQuery("[name = users_nome]").val()))
    erro += "Insira o nome completo<br />";
  if(!empty(jQuery("[name=users_CPF]").val()) && !IsCPF(jQuery("[name=users_CPF]").val()))
    erro += "CPF inválido <br />";
  if(empty(jQuery("[name = grupos_id]").val()))
    erro += "Selecione o grupo <br />";
  if(empty(jQuery("[name = users_senha]").val()) && !empty(jQuery("[name=btn_salvar]").val()))
    erro += "Insira a senha <br />";

  if(!empty(jQuery("[name=users_senha]").val())  && empty(jQuery("[name=users_senha2]").val()))
    erro += "Insira a confirmação da senha <br />";
  else if(jQuery("[name=users_senha]").val() != jQuery("[name=users_senha2]").val())
    erro += "A senha não coincide com a confirmação <br />";

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
  if(isNaN(text) && text != undefined)
   erro += text + "<br />";

  if(!empty(erro))
  {
    jQuery("div.erro").remove();
    jQuery("<div class='erro'>" + erro + "</div>").insertAfter(".titulo");
    return false;
  }

 });
});

/**-----------------------------------------------------------|*
*|  SIPAC - Sistema Integrado de Painel de Controle V 2.0     |*
*|  Descrição: Funções - Lembrete de senha	                  |*
*|  Criado:     20/03/2009 | Por: Ana Claudia                 |*
*|  Modificado: __/__/____ | Por:                             |*
*|  Pagina: js/lembrete_senha.js                              |*
*|------------------------------------------------------------|*/
 jQuery(document).ready(function() {
  jQuery('#frm_senha').submit(function(){
   jQuery("#aviso").hide();
   if(jQuery("[name = email]").val() == "")
    jQuery("<div id='erro'><strong>ERRO: </strong>Informe o e-mail.</div>").insertAfter("#aviso");
   else
   {
     //Eviar e-mail via ajax
     jQuery.ajax({
      type:"GET",
      url: "enviar_senha.php",
      data: 'email=' + jQuery("[name = email]").val(),
      success: function(text) {
       // alert(text);
       if(text == 0)
       {
        if(jQuery("#erro") != undefined)
          jQuery("#erro").remove();

        jQuery("<div id='erro'><strong>ERRO: </strong>Seu e-mail não está cadastrado.</div>").insertAfter("#aviso");
       }
      else if(text == 1)
      {
       if(jQuery("#erro") != undefined)
          jQuery("#erro").remove();
          
       jQuery("#aviso").html("Uma nova senha foi enviada para o seu e-mail.").show();
      }
      else
        jQuery("<div id='erro'><strong>ERRO: </strong>" + text + "</div>").insertAfter("#aviso");
      }
     });
     
   }
   return false;
  });
 });

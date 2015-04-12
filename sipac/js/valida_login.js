/**-----------------------------------------------------------|*
*|  SIPAC - Sistema Integrado de Painel de Controle V 2.0     |*
*|  Descrição: Funções - Lembrete de senha	                  |*
*|  Criado:     20/03/2009 | Por: Ana Claudia                 |*
*|  Modificado: __/__/____ | Por:                             |*
*|  Pagina: js/lembrete_senha.js                              |*
*|------------------------------------------------------------|*/
 jQuery(document).ready(function() {
  jQuery('#frm_login').submit(function(){
   var erro = "";
   jQuery("#aviso").hide();
   if(jQuery("[name = email]").val() == "" && jQuery("[name = senha]").val() == "")
    erro = "Prencha login/e-mail e senha.";
   else if(jQuery("[name = email]").val() != "" && jQuery("[name = senha]").val() == "")
     erro = "Preencha a senha";
   else if(jQuery("[name = email]").val() == "" && jQuery("[name = senha]").val() != "")
    erro = "Preencha o login/e-mail";
  else
   {
    jQuery.ajax({
      type:"POST",
      url: "valida_login.php",
      data: 'email=' + jQuery("[name = email]").val()
      +  '&senha=' + jQuery("[name = senha]").val()
      + '&return=' + jQuery("[name = return]").val() ,
      success: function(text) {
      //alert(text);
       arraErro = text.split(",");
       erro = arraErro[0];
       url  = arraErro[1];
       if(url != "")
        window.location = url;
       else if(erro != "")
       {
        jQuery("#erro").remove();
        jQuery("<div id='erro'><strong>ERRO: " + erro + "</div>").insertAfter("#sipac");

      }

     }
    });
   }

  if(erro != "")
  {
     jQuery("#erro").remove();
     jQuery("<div id='erro'><strong>ERRO: " + erro + "</div>").insertAfter("#sipac");

  }
  return false;
 });
});

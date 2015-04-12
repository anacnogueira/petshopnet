/**-----------------------------------------------------------|*
*|  SIPAC - Sistema Integrado de Painel de Controle V 2.0     |*
*|  Descrição: Funções - email_enviar                         |*
*|  Criado:     12/09/2007 | Por: Ana Claudia                 |*
*|  Modificado: 16/10/2009 | Por:                             |*
*|  Pagina: js/email.js                                       |*
*|------------------------------------------------------------|*/
jQuery(document).ready(function() {
 jQuery("#frm_mail").submit(function(){
  var erro = "";
  if(empty(jQuery("[name = clientes_id]").val()))
    erro += "Selecione os clientes<br />";
    
  if(empty(jQuery("[name = subject]").val()))
    erro += "Preencha o assunto do e-mail<br />";
    
  if(empty(jQuery("[name = msg]").val()))
    erro += "Insira o texto do e-mail.<br />";  

if(!empty(erro))
  {
    jQuery("div.erro").remove();
    jQuery("<div class='erro'>" + erro + "</div>").insertAfter(".titulo");
    return false;
  }

 });
});

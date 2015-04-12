jQuery(document).ready(function() {
   jQuery("#frm_contato").submit(function(){
   jQuery("span.erro").remove();
   
    jQuery("[name=nome_completo]").map(function () {
     if(empty(jQuery(this).val()))
      jQuery(this).after("<span class='erro'><br />Preencha seu nome completo</span>");
   });

   jQuery("[name=email]").map(function () {
     if(!IsEmail(jQuery(this).val()))
      jQuery(this).after("<span class='erro'><br />Preencha seu e-mail corretamente</span>");
   });

   jQuery("[name=assunto]").map(function () {
     if(!(jQuery(this).val()))
      jQuery(this).after("<span class='erro'><br />Preencha o assunto da mensagem</span>");
   });
   
   jQuery("[name=mensagem]").map(function () {
     if(empty(jQuery(this).val()))
      jQuery(this).after("<span class='erro'><br />Preencha a mensagem</span>");
   });
   
    if(jQuery("span.erro").html() != null)
 	    return false;

 });
});

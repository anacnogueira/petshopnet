jQuery(document).ready(function() {
 jQuery("#frm_senha").submit(function(){
  jQuery("span.erro").remove();

 jQuery("[name=senha_atual]").map(function () {
   if(empty(jQuery(this).val()))
     jQuery(this).closest("span").append("<span class='erro'> Insira sua senha atual</span>");
    else
	{
		var text = jQuery.ajax({
         type: "POST",
         url: "lib/act_validar.php",
         async: false,
         data: "passo=senha&senha_atual=" + jQuery(this).val()
        }).responseText;

		if(text <= 0)
     jQuery(this).closest("span").append("<span class='erro'> A senha informada não confere com a senha cadastrada</span>");
    else if(isNaN(text) && text != undefined)
     jQuery(this).closest("span").append("<span class='erro'> " + text + "</span>");
	}
  });

  jQuery("[name=clientes_senha]").map(function () {
     if(empty(jQuery(this).val()))
       jQuery(this).closest("span").append("<span class='erro'> Insira a nova senha</span>");
	  else if(jQuery(this).val().length < 6)
	   jQuery(this).closest("span").append("<span class='erro'> A senha deve deve conter 6 ou mais caracteres</span>");
   });

   jQuery("[name=clientes_senha2]").map(function () {
     if(empty(jQuery(this).val()) && !empty(jQuery("[name=clientes_senha]").val()))
       jQuery(this).closest("span").append("<span class='erro'> Insira a confirmação da nova senha</span>");
	  else if(jQuery(this).val() != jQuery("[name=clientes_senha]").val())
	   jQuery(this).closest("span").append("<span class='erro'> A confirmação da nova senha não confere com a nova senha</span>");
   });


  if(jQuery("span.erro").html() != null)
 	return false;
 });
});

jQuery(document).ready(function() {
 jQuery("#frm_cadastro").submit(function(){
 jQuery("span.erro").remove();

   //1. Dados Pessoais
   jQuery("[name=clientes_nome]").map(function () {
     if(empty(jQuery(this).val()))
       jQuery(this).closest("span").append(" <span class='erro'>Preencha seu primeiro nome</span>");

   });

   jQuery("[name=clientes_sobrenome]").map(function () {
     if(empty(jQuery(this).val()))
       jQuery(this).closest("span").append(" <span class='erro'>Preencha seu sobrenome</span>");

   });

   jQuery("[name=clientes_cpf]").map(function () {
     if(!IsCPF(jQuery(this).val()))
       jQuery(this).closest("span").append(" <span class='erro'>Preencha o CPF corretamente</span>");

	 else if (jQuery("[name=conf_cpf]").val() == 0) //Validado pela primeira vez
     {
	   var text = jQuery.ajax({
        type: "POST",
        url: "lib/act_validar.php",
        async: false,
        data: "passo=cpf&clientes_cpf=" + jQuery(this).val()
        + (!empty(jQuery("[name=cpfOld]").val()) ? "&cpfOld=" + jQuery("[name=cpfOld]").val() : "")

        }).responseText;


	   if(text > 0)
	    jQuery(this).closest("span").append(" <span class='erro'>CPF já cadastrado</span>");
       else if(isNaN(text) && text != undefined)
         jQuery(this).closest("span").append(" <span class='erro'>" + text + "</span>");
        else
         jQuery("[name=conf_cpf]").val(1);
	 }
   });

   jQuery("[name=clientes_data_nascimento]").map(function () {
     if(!IsValidDate(jQuery(this).val()))
       jQuery(this).closest("span").append(" <span class='erro'>Preencha a data de nascimento corretamente</span>");
   });


   //2. Identificação
   jQuery("[name=clientes_email]").map(function () {
     if(!IsEmail(jQuery(this).val()))
       jQuery(this).closest("span").append(" <span class='erro'>Preencha seu e-mail corretamente</span>");

     else if( IsEmail(jQuery(this).val()) && jQuery("[name=conf_email]").val() == 0) //Validar pela primeira vez
	 {
	 	var text2 = jQuery.ajax({
        type: "POST",
        url: "lib/act_validar.php",
        async: false,
        data: "passo=email&clientes_email=" + jQuery(this).val()
        + (!empty(jQuery("[name=emailOld]").val()) ? "&emailOld=" + jQuery("[name=emailOld]").val() : "")

        }).responseText;

	 	if(text2 > 0)
	    jQuery(this).closest("span").append(" <span class='erro'>E-mail já cadastrado</span>");
       else if(isNaN(text2) && text2 != undefined)
         jQuery(this).closest("span").append(" <span class='erro'>" + text + "</span>");
        else
         jQuery("[name=conf_email]").val(1);
	 }
   });


   jQuery("[name=clientes_senha]").map(function () {
     if(empty(jQuery(this).val()))
       jQuery(this).closest("span").append(" <span class='erro'>Insira uma senha</span>");

     else if(jQuery(this).val().length < 6 && jQuery(this).val().length > 15)
	  jQuery(this).closest("span").append(" <span class='erro'>A senha deve deve conter entre 6 e 15 caracteres</span>");
   });

   jQuery("[name=clientes_senha2]").map(function () {
   	  if(empty(jQuery(this).val()))
   	   jQuery(this).closest("span").append(" <span class='erro'>Insira a confirmação da senha</span>");

   	  else if(jQuery(this).val() != jQuery("[name=clientes_senha]").val())
	   jQuery(this).closest("span").append(" <span class='erro'>A confirmação da senha não confere com a senha</span>");
   	});


   	//3. Contato
   	jQuery("[name=clientes_telefone]").map(function(){
   	  if(empty(jQuery(this).val()))
		jQuery(this).closest("span").append(" <span class='erro'>Preencha o telefone de contato</span>");
   	});


    //4. Endereço
     jQuery("[name=clientes_end_nome]").map(function(){
   	  if(empty(jQuery(this).val()))
		jQuery(this).closest("span").append(" <span class='erro'>Preencha o nome</span>");
   	});

     jQuery("[name=clientes_numero]").map(function(){
   	  if(empty(jQuery(this).val()))
		jQuery(this).closest("span").append(" <span class='erro'>Informe o número do endereço</span>");
   	});

	 jQuery("[name=clientes_logradouro]").map(function(){
   	  if(empty(jQuery(this).val()))
		jQuery(this).closest("span").append(" <span class='erro'><br />Preencha o endereço</span>");
   	});


   	 jQuery("[name=clientes_bairro]").map(function(){
   	  if(empty(jQuery(this).val()))
		jQuery(this).closest("span").append(" <span class='erro'>Informe seu bairro</span>");
   	});

   	 jQuery("[name=clientes_cep]").map(function(){
   	  if(empty(jQuery(this).val()) || jQuery(this).val().length < 8)
		jQuery(this).closest("span").append(" <span class='erro'>Preencha seu CEP corretamente</span>");
   	});


   	 jQuery("[name=clientes_cidade]").map(function(){
   	  if(empty(jQuery(this).val()))
		jQuery(this).closest("span").append(" <span class='erro'>Informe sua cidade</span>");
   	});

   	 jQuery("[name=clientes_uf]").map(function(){
   	  if(empty(jQuery(this).val()))
		jQuery(this).closest("span").append(" <span class='erro'>Selecione o estado</span>");
   	});


 if(jQuery("span.erro").html() != null)
 	 return false;
 });
});

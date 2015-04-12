/**-----------------------------------------------------------|*
*|  SIPAC - Sistema Integrado de Painel de Controle V 2.0     |*
*|  Descrição: Funções - clientes 		                        |*
*|  Criado:     12/09/2007 | Por: Ana Claudia                 |*
*|  Modificado: __/__/____ | Por:                             |*
*|  Pagina: js/clientes.js                                    |*
*|------------------------------------------------------------|*/
jQuery(document).ready(function() {
 jQuery("#frm_cliente").submit(function(){
  var erro = "";

  dia = jQuery("[name=clientes_dia]").val();
  mes = jQuery("[name=clientes_mes]").val();
  ano = jQuery("[name=clientes_ano]").val();
  dataCompleta = dia + "/" + mes + "/" + ano;
  
  if(empty(jQuery("[name = clientes_nome]").val()))
    erro += "Preencha seu primeiro nome<br />";
    
  if(empty(jQuery("[name = clientes_sobrenome]").val()))
    erro += "Preencha seu sobrenome<br />";
	   
  if(!IsCPF(jQuery("[name = clientes_cpf]").val()))
    erro += "Preencha o CPF corretamente<br />";
  else
  {
  	var text = jQuery.ajax({
  	  type: "POST",
  	  url: "lib/act_validar.php",
  	  async: false,
  	  data: "passo=cpf&clientes_cpf=" + jQuery("[name=clientes_cpf]").val()
  	  + (!empty(jQuery("[name=cpfOld]").val()) ? "&cpfOld=" + jQuery("[name=cpfOld]").val() : "")
  	}).responseText;
  	
	if(text > 0)
     erro += "CPF já cadastrado <br />";
     
    if(isNaN(text) && text != undefined)
     erro += text + "<br />"; 
  }  
  
  if(!IsValidDate(jQuery("[name=clientes_data_nascimento]").val()))
    erro += "Preencha a data de nascimento corretamente<br />";	
  
  if(!IsEmail(jQuery("[name=clientes_email]").val()))
    erro += "Preencha seu e-mail corretamente<br />";
  else
  {
  	var text2 = jQuery.ajax({
  	 type:"POST",
	 url: "lib/act_validar.php",
  	 async: false,
  	 data: "passo=email&clientes_email=" + jQuery("[name = clientes_email]").val() 	
  	 + (!empty(jQuery("[name=emailOld]").val()) ? "&emailOld=" + jQuery("[name=emailOld]").val() : "")
  	}).responseText;
  	
  	if(text2 > 0)
     erro += "E-mail já cadastrado <br />";
     
    if(isNaN(text2) && text2 != undefined)
     erro += text + "<br />"; 
     
  }

  if(jQuery("[name=altera]").val() == undefined)
  {
  	if( empty(jQuery("[name=clientes_senha]").val()) )
  	 erro += "Insira uma senha<br />";
  	 
  	if( !empty(jQuery("[name=clientes_senha]").val()) &&  jQuery("[name=clientes_senha]").val().length < 6)
	 erro = "A senha deve conter 6 ou mais caracteres<br />";
	
	if( empty(jQuery("[name=clientes_senha2]").val()) &&  !empty(jQuery("[name=clientes_senha]").val()) )
	 erro += "Insira a confirmação da senha<br />";

	if( (!empty(jQuery("[name=clientes_senha2]").val()) &&  !empty(jQuery("[name=clientes_senha]").val())) && (jQuery("[name=clientes_senha]").val() != jQuery("[name=clientes_senha2]").val()) )  
   erro += "A confirmação da senha não confere com a senha<br />";

  }
  else
  {
  	if( !empty(jQuery("[name=clientes_senha]").val()) && jQuery("[name=clientes_senha]").val().length < 6)
  	 erro += "A senha deve conter 6 ou mais caracteres<br />";
    
	 if( empty(jQuery("[name=clientes_senha2]").val()) && !empty(jQuery("[name=clientes_senha]").val()))
	  erro += "Insira a confirmação da senha<br />" 
  
   if(!empty(jQuery("[name=clientes_senha2]").val()) &&  !empty(jQuery("[name=clientes_senha]").val()) && jQuery("[name=clientes_senha]").val() != jQuery("[name=clientes_senha2]").val())
    erro += "A confirmação da senha não confere com a senha<br />"

  }	

  if( empty(jQuery("[name=clientes_telefone]").val()) )
   erro += "Preencha o telefone de contato<br />";
   
  if( empty(jQuery("[name=clientes_logradouro]").val()) )
	erro +=	"Preencha seu endereço<br />";
  	
  if( empty(jQuery("[name=clientes_numero]").val()) )
	erro +=	"Preencha o número da casa<br />";
		
  if( empty(jQuery("[name=clientes_bairro]").val()) )
   erro += "Informe seu bairro<br />";	 
  
  if( empty(jQuery("[name=clientes_cep]").val()) )
   erro += "Preencha seu CEP<br />";
    	  
  if( empty(jQuery("[name=clientes_cidade]").val()) )
    erro += "Informe sua cidade<br />";

  if( empty(jQuery("[name=clientes_uf]").val()) )	
    erro += "Selecione o estado <br />";
	 	  
  if(!empty(erro))
  {
    jQuery("div.erro").remove();
    jQuery("<div class='erro'>" + erro + "</div>").insertAfter(".titulo");
    return false;
  }

 });
 
 jQuery("#frm_email").submit(function(){
  var erro = "";
  
  if( empty(jQuery("[name=subject]").val()) )
   erro += "Preencha o assunto do e-mail<br />";
   
  if( empty(jQuery("[name=msg]").val()) ) 
   erro += "Insira o texto do e-mail";
    
  if(!empty(erro))
  {
    jQuery("div.erro").remove();
    jQuery("<div class='erro'>" + erro + "</div>").insertAfter(".titulo");
    return false;
  }

 });
});

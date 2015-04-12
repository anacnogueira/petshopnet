/**-----------------------------------------------------------|*
*| 	Criado:     05/05/2008 | Por: Ana Claudia Nogueira        |*
*|  Modificado: __/__/____ | Por:                             |*
*|  Pagina: js/clientes.js                                   |*
*|------------------------------------------------------------|*/

function checkform(form)
{

 var objeXMLHTTP = new XMLHTTP();
 var resposta;

 dia =  form.clientes_dia.value;
 mes =  form.clientes_mes.value;
 ano =  form.clientes_ano.value;
 dataCompleta = dia + "/" + mes + "/" + ano;

 if(form.clientes_nome.value ==""){
    alert("Preencha seu primeiro nome.")
		form.clientes_nome.focus();
		return false;
 }
	if(form.clientes_sobrenome.value =="") {
		alert("Preencha seu sobrenome.")
		form.clientes_sobrenome.focus();
		return false;
 }
 if(!IsCPF(form.clientes_cpf.value)) {
		alert("Preencha o CPF corretamente.")
		form.clientes_cpf.focus();
		return false;
	}
	else if(form.conf_cpf.value == 0) { //Validado pela primeira vez

  //Validar CPF através de XMLHTTP
  objeXMLHTTP.parametros.Adicionar(new Parametro('clientes_cpf', form.clientes_cpf.value));
	if(form.cpfOld != undefined)
  objeXMLHTTP.parametros.Adicionar(new Parametro('cpfOld', form.cpfOld.value));
  objeXMLHTTP.parametros.Adicionar(new Parametro('passo','cpf'));
  objeXMLHTTP.url = 'lib/act_validar.php';
	objeXMLHTTP.metodo = 'POST';
	objeXMLHTTP.Enviar();

	resposta = objeXMLHTTP.getText;

  if(objeXMLHTTP.status.numero!=200) {
    alert(objeXMLHTTP.status.mensagem);
		return false;
	}
  if(resposta == 0)  {
   alert("CPF já cadastrado.");
   form.clientes_cpf.focus();
   return false;
  }
  else
		 form.conf_cpf.value = 1;
 }
 if(form.clientes_dia.value == "") {
		alert("Preencha o dia de nascimento.")
		form.clientes_dia.focus();
		return false;
 }
 if(form.clientes_mes.value =="") {
		alert("Preencha o mês de nascimento.")
		form.clientes_mes.focus();
		return false;
	}
	if(form.clientes_ano.value =="") {
		alert("Preencha o ano de nascimento.")
		form.clientes_ano.focus();
		return false;
	}
 if(!IsValidDate(dataCompleta)) {
	alert("Preencha a data corretamente.")
  return false;
 }
 if(!IsEmail(form.clientes_email.value)) {
	alert("Preencha seu e-mail corretamente.")
	form.clientes_email.focus();
	return false;
 }
 if(form.clientes_email.value != "" && form.conf_email.value == 0) {//Validado pela primeira vez
   //Validar e-mail  através de XMLHTTP
   objeXMLHTTP.parametros.Adicionar(new Parametro('clientes_email', form.clientes_email.value));
   if(form.emailOld != undefined)
    objeXMLHTTP.parametros.Adicionar(new Parametro('emailOld', form.emailOld.value));

   objeXMLHTTP.parametros.Adicionar(new Parametro('passo','email'));
	 objeXMLHTTP.url = 'lib/act_validar.php';
	 objeXMLHTTP.metodo = 'POST';
	 objeXMLHTTP.Enviar();

	 resposta = objeXMLHTTP.getText;
   if(objeXMLHTTP.status.numero!=200) {
      alert(objeXMLHTTP.status.mensagem);
		  return false;
	  }
    if(resposta == 0) {
      alert("E-mail já cadastrado.");
      form.clientes_email.focus();
      return false;
    }
    else
		 form.conf_email.value = 1;
  }
 if(form.clientes_senha.value == ""){
		alert("Insira uma senha.")
		form.clientes_senha.focus();
		return false;
	}
	if(form.clientes_senha.value.length < 6) {
		alert("A senha deve deve conter 6 ou mais caracteres.")
		form.clientes_senha.focus();
		return false;
	}
	if(form.clientes_senha2.value =="" && form.clientes_senha.value != "") {
		alert("Insira a confirmação da senha.")
		form.clientes_senha2.focus();
		return false;
	}
 	if(form.clientes_senha.value != form.clientes_senha2.value ) {
		alert("A confirmação da senha não confere com a senha.")
		form.clientes_senha2.focus();
		return false;
	}
 if(form.clientes_senha.value !="" && form.clientes_senha.value.length < 6) {

		alert("A senha deve deve conter 6 ou mais caracteres.")
		form.clientes_senha.focus();
		return false;
 }
 if(form.clientes_senha2.value == "" && form.clientes_senha.value != "")
 {
		alert("Insira a confirmação da senha.");
		form.clientes_senha2.focus();
		return false;
 }
 if(form.clientes_senha.value != form.clientes_senha2.value)
 {
		alert("A confirmação da senha não confere com a senha.")
		form.clientes_senha.focus();
		return false;
 }
 if(form.clientes_telefone.value =="") {
	alert("Preencha o telefone de contato.")
	form.clientes_telefone.focus();
	return false;
 }
 if(form.clientes_logradouro.value =="")	{
		alert("Preencha seu endereço.")
		form.clientes_logradouro.focus();
		return false;
 }
 if(form.clientes_numero.value =="") {
 	alert("Informe o número do endereço.")
	form.clientes_numero.focus();
	return false;
 }
 if(form.clientes_bairro.value =="") {
 	alert("Informe seu bairro.")
	form.clientes_bairro.focus();
	return false;
 }
 if(form.clientes_cep.value =="") {
	alert("Preencha seu CEP.")
	form.clientes_cep.focus();
	return false;
 }
 if(form.clientes_cidade.value =="") {
	alert("Informe sua cidade.")
	form.clientes_cidade.focus();
	return false;
 }
 if(form.clientes_uf.value =="0") {
	alert("Selecione o estado.")
	form.clientes_uf.focus();
	return false;
 }
}
//function visualizar_boleto(id,mod,ambiente,valor,numdoc,datadoc,vencto)
function visualizar_boleto(form)
{
 objForm = document.getElementById(form);
 /*window.open("https://comercio.locaweb.com.br/comercio.comp?identificacao=" + id +
 "&modulo=" + mod + "&ambiente=" + ambiente + "&valor=" + valor +
 "&numdoc=" + numdoc + "&datadoc=" + datadoc + "&vencto=" + vencto);*/
 objForm.target="_blank";
 objForm.submit();
}

function imprimir_recibo() {
 this.print();
}

function go_home() {
 window.location = "index.php";
}


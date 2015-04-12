function checkform(form)
{

 var objeXMLHTTP = new XMLHTTP();
 var resposta;

 dia =  form.clientes_dia.value;
 mes =  form.clientes_mes.value;
 ano =  form.clientes_ano.value;
 dataCompleta = dia + "/" + mes + "/" + ano;

 if(form.clientes_nome.value =="")
 {
    alert("Preencha seu primeiro nome.")
		form.clientes_nome.focus();
		return false;
 }
	if(form.clientes_sobrenome.value =="")
 {
		alert("Preencha seu sobrenome.")
		form.clientes_sobrenome.focus();
		return false;
 }

 	if(!IsCPF(form.clientes_cpf.value))
 {
		alert("Preencha o CPF corretamente.")
		form.clientes_cpf.focus();
		return false;
	}
	else
	{
  //Validar CPF através de XMLHTTP
  objeXMLHTTP.parametros.Adicionar(new Parametro('clientes_cpf', form.clientes_cpf.value));
	if(form.cpfOld != undefined)
  objeXMLHTTP.parametros.Adicionar(new Parametro('cpfOld', form.cpfOld.value));
  objeXMLHTTP.parametros.Adicionar(new Parametro('passo','cpf'));


  objeXMLHTTP.url = 'lib/act_validar.php';
	objeXMLHTTP.metodo = 'POST';
	objeXMLHTTP.Enviar();

	resposta = objeXMLHTTP.getText;

  if(objeXMLHTTP.status.numero!=200)
  {
    alert(objeXMLHTTP.status.mensagem);
		return false;
	}
  if(resposta == 0)
  {
   alert("CPF já cadastrado.");
   form.clientes_cpf.focus();
   return false;
  }
 }
	
	if(form.clientes_dia.value =="")
 {
		alert("Preencha o dia de nascimento.")
		form.clientes_dia.focus();
		return false;
	}
	if(form.clientes_mes.value =="")
 {
		alert("Preencha o mês de nascimento.")
		form.clientes_mes.focus();
		return false;
	}
	if(form.clientes_ano.value =="")
 {
		alert("Preencha o ano de nascimento.")
		form.clientes_ano.focus();
		return false;
	}
if(!IsValidDate(dataCompleta))
 {
		alert("Preencha a data corretamente.")
  	return false;
	}
	if(!IsEmail(form.clientes_email.value))
 {
		alert("Preencha seu e-mail corretamente.")
		form.clientes_email.focus();
		return false;
	}

	if(form.clientes_email.value != "")
	{
   //Validar e-mail  através de XMLHTTP
   objeXMLHTTP.parametros.Adicionar(new Parametro('clientes_email', form.clientes_email.value));
   if(form.emailOld != undefined)
    objeXMLHTTP.parametros.Adicionar(new Parametro('emailOld', form.emailOld.value));

   objeXMLHTTP.parametros.Adicionar(new Parametro('passo','email'));
	 objeXMLHTTP.url = 'lib/act_validar.php';
	 objeXMLHTTP.metodo = 'POST';
	 objeXMLHTTP.Enviar();

	 resposta = objeXMLHTTP.getText;
    if(objeXMLHTTP.status.numero!=200)
    {
      alert(objeXMLHTTP.status.mensagem);
		  return false;
	  }
    if(resposta == 0)
    {
      alert("E-mail já cadastrado.");
      form.clientes_email.focus();
      return false;
    }
  }
	if(form.clientes_telefone.value =="")
  {
		alert("Preencha o telefone de contato.")
		form.clientes_telefone.focus();
		return false;
	}
}

function checkform(form)
{
  if(form. clientes_end_nome.value == "")
	{
		alert("Preencha o nome.")
		form. clientes_end_nome.focus();
		return false;
	}
	if(form.clientes_logradouro.value =="")
	{
		alert("Preencha seu endereço.")
		form.clientes_logradouro.focus();
		return false;
	}
	if(form.clientes_numero.value =="")
	{
		alert("Informe o número do endereço.")
		form.clientes_numero.focus();
		return false;
	}
	if(form.clientes_bairro.value =="")
	{
		alert("Informe seu bairro.")
		form.clientes_bairro.focus();
		return false;
	}
	if(form.clientes_cep.value =="")
	{
		alert("Preencha seu CEP.")
		form.clientes_cep.focus();
		return false;
	}
	if(form.clientes_cidade.value =="")
	{
		alert("Informe sua cidade.")
		form.clientes_cidade.focus();
		return false;
	}
	if(form.clientes_uf.value =="0")
	{
		alert("Selecione o estado.")
		form.clientes_uf.focus();
		return false;
	}
}

function calcula_frete(form,id,cepDestino)
{
  var objAjax;
	objAjax = new Ajax();
	//objAjax.url = "https://ssl899.websiteseguro.com/asp/calculaFrete_xml.asp?cepOrigem=" + form.cepOrigem.value + "&cepDestino=" + cepDestino + "&pesoFrete=" + form.pesoFrete.value + "&codigoFrete=" + form.codigoFrete.value;
  objAjax.url = "asp/calculaFrete_xml.asp?cepOrigem=" + form.cepOrigem.value + "&cepDestino=" + cepDestino + "&pesoFrete=" + form.pesoFrete.value + "&codigoFrete=" + form.codigoFrete.value;
  //objAjax.Loading = "imgLoading";
	objAjax.Enviar();

	if (objAjax.VerificarStatus() == 4)
	{
	 form.valorFrete.value = objAjax.getText;
   form.action = "fechar_pedido_pagto.php?clientes_end_id=" + id;
   form.submit();
  }
  else
   return false;

}








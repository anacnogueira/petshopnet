function calc_total(valor, form)
{
 form.vlTotal.value = valor;
}

function checkform(form)
{
	if(QtdChecked(form.formas_pagamento_id) == 0)
	{
	  alert("Selecione a forma de pagamento ( Boleto ou cartão)");
	  return false;
	}
	 if((Check_Unico(form.formas_pagamento_id) == 1 || Check_Unico(form.formas_pagamento_id) == 2) && QtdChecked(form.parcela) == 0)
	{
	  alert("Selecione a forma de pagamento (à vista ou parcelado)");
     return false;
	}
}

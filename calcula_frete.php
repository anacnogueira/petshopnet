<?
  $cepDestino = $_REQUEST["cepDestino"];
?>
<script type="text/javascript" src="ASP/ajax.js"></script>
<script type="text/javascript">
function calcula_frete(form)
{
  var objAjax;
	objAjax = new Ajax();
	objAjax.url = "ASP/calculaFrete_xml.asp?cepOrigem=" + form.cepOrigem.value + "&cepDestino=" + form.cepDestino.value + "&pesoFrete=" + form.pesoFrete.value + "&codigoFrete=" + form.codigoFrete.value;
    objAjax.Loading = "imgLoading";
	objAjax.Enviar();

	if (objAjax.VerificarStatus() == 4)
	{
	 form.valorFrete.value = objAjax.getText;
   return false;
  }
  else
    form.valorFrete.value = "";
}

</script>
<form action="calcula_frete.php" method="post" onsubmit="return calcula_frete(this)">
 <input name="cepOrigem" type="hidden" value="12309000" />
 <input name="pesoFrete" type="hidden" value="1,00" />
 <input name="codigoFrete" type="hidden" value="40096" />
 Insira o CEP: <input name="cepDestino" type="text" value="<?=$cepDestino ?>" /><br />
 Valor do frete: <input name="valorFrete" type="text" value="" /><br />
 <input name="btn_frete" type="submit" value="Calcular" />
</form>
 <div id="imgLoading" style='display:none'>Aguarde...</div>
  


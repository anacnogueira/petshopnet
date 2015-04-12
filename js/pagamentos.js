jQuery(document).ready(function(){
 jQuery("#frm_pedido").submit(function(){

  if( jQuery("[name=formas_pagamento_id]:checked").length == 0 )
 	{
 	 alert("Selecione a forma de pagamento");
 	 return false;
 	} 
 	
 	if( jQuery("[name=parcela]:checked").length == 0 )
 	{
 	  alert("Selecione o número de parcelas");
 	  return false;
 	}  	 
 }); 
 
  jQuery("[name=formas_pagamento_id]").click(function(){
  	 jQuery("div#parcelas").empty();

 	var text = $.ajax({
 	  type: "POST",
       url: "lib/parcelamento.php",
       async: false,
       data:({formas_pagamento_id: jQuery(this).val(),vlTotal: jQuery("[name=vlTotal]").val()}),
 	}).responseText;
	
	
	if(!empty(text))
	 jQuery(text).appendTo("div#parcelas");   
	 	
 }); 
 
 jQuery(".print").click(function(){
 	imprimir_recibo();
 	
 });

 jQuery("#visualizar_boleto").click( function () {
   form = jQuery("#frm_pagto_final");
   form.target="_blank";
   form.submit();
  });
});	




function calc_total(valor)
{
 jQuery("[name=vlTotal]").val(valor.toFixed(2).toString().replace(".",","));
}

function imprimir_recibo() {
 this.print();
}
 	

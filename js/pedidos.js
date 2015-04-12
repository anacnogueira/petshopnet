jQuery(document).ready(function() {
 jQuery(":input").not(jQuery(":radio")).focus(function() {
   jQuery(this).siblings("form :radio").attr("checked","checked");
 });
 
 jQuery("#frm_pedidos").submit(function() {

    if(jQuery("[name=ped_tipo]:checked").val() ==  3 && empty(jQuery("[name=pedidos_numero]").val()))
    {
      alert("Insira o número do pedido.");
      return false
    }
   if(jQuery("[name=ped_tipo]:checked").val() ==  4)
   {
     data_ini = jQuery("[name=ano_ini]").val() + jQuery("[name=mes_ini]").val();
     data_fin = jQuery("[name=ano_fim]").val() + jQuery("[name=mes_fim]").val();
     
     if(data_ini > data_fin)
     {
      alert("A data inicial deve ser maior que a data final");
      return false;
     }

  }
 })
});

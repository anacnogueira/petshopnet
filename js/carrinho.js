// Carrinho de compras
jQuery(document).ready(function() {
  var form_1 = jQuery('form')[1];
  var form_2 = jQuery('form')[2];

  jQuery(form_1).submit(function(){
    if( empty(jQuery("[name=cep_destino]").val()) || jQuery("[name=cep_destino]").val().length < 9)
    {
       alert("Inisra o CEP corretamente.");
       jQuery("[name=cep_destino]").focus();
       return false;
    }
  });

  jQuery(form_2).submit(function(event){
   if(jQuery("#frete").text() == ""){
    alert("Faça o cálculo do frete antes de finalizar a compra");
    return false;
   }

   jQuery.ajax({
     type: "POST",
      url: "lib/limpa_carrinho.php",
     success: function(text){
       
     }/*,
      error: function (XMLHttpRequest, textStatus, errorThrown) {
          alert("Erro: " + errorThrown);
      } */
    });

   //event.preventDefault();
  });

  jQuery("[class^=excluir]").click(function(){
    qtde_registros = jQuery(this).attr("class") == "excluir_um" ? "o produto selecionado" : "todos os produtos";
    if(!confirm("Tem certeza que deseja excluir " + qtde_registros + " do carrinho?"))
      return false;
  });
});




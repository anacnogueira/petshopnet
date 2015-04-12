/**-----------------------------------------------------------|*
*|  SIPAC - Sistema Integrado de Painel de Controle V 2.0     |*
*|  Descrição: Funções - Produtos    			                  	|*
*|  Criado:     11/09/2007 | Por: Ana Claudia                 |*
*|  Modificado: __/__/____ | Por:                             |*
*|  Pagina: js/produtos.js                                    |*
*|------------------------------------------------------------|*/
jQuery(document).ready(function() {
 jQuery("#frm_produto").submit(function(){
  var erro = "";

  if( empty(jQuery("[name = produtos_data_disponivel]").val()) || !IsValidDate(jQuery("[name = produtos_data_disponivel]").val()) )
    erro += "Insira a data corretamente<br />";

  if(empty(jQuery("[name=produtos_nome]").val()))
    erro += "Insira o nome do produto <br />";
    
  if(empty(jQuery("[name=fornecedores_id]").val()) && (empty(jQuery("[name=fornecedores_nome]").val()) ||  jQuery("[name=fornecedores_nome]").val() == "Cadastrar novo..."))
    erro += "Selecione/Insira o fabricante <br />";

   if(empty(jQuery("[name=produtos_preco]").val()))
    erro += "Insira o valor do produto <br />";

   //if(jQuery("[name=produtos_descricao]").val() == "")
   // erro += "Insira a descrição do produto <br />";

   if(empty(jQuery("[name=produtos_quantidade]").val()))
    erro += "Informe a quantidade do produto <br />";

   if(empty(jQuery("[name=produtos_codigo]").val()))
     erro += "Informe o código do produto <br />";

   //Verificar se o código do produto já se encontra cadastrado
  else
   {
   	  var text = jQuery.ajax({
   	    type: "POST",
		url:  "lib/act_validar.php",
		async: false,
		data: "passo=codigo&produtos_codigo=" + jQuery("[name=produtos_codigo]").val()
		+ (!empty(jQuery("[name=produtos_codigoOld]").val()) ? "&produtos_codigoOld=" + jQuery("[name=produtos_codigoOld]").val() : "")
   	  }).responseText;
   	  //alert(text);

   	  if(text > 0)
        erro += "Código do produto já cadastrado <br />";

      if(isNaN(text) && text != undefined)
       erro += text + "<br />";
   	}

   if(empty(jQuery("[name=produtos_peso]").val()))
     erro += "Insira o peso do produto <br />";

  if($("[name=categorias_id[]]:checked").length == 0)
    erro +="Selecione a(s) categoria(s)<br />";

  if(!empty(erro))
  {
    jQuery("div.erro").remove();
    jQuery("<div class='erro'>" + erro + "</div>").insertAfter(".titulo");
    return false;
  }

 });
 
  //Fornecedor
  jQuery("input[name=fornecedores_nome]").click(function(){
   if(jQuery(this).val() == "Cadastrar novo...")
      jQuery(this).val("");
  });
});




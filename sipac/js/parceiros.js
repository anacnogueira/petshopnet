/**-----------------------------------------------------------|*
*|  SIPAC - Sistema Integrado de Painel de Controle V 2.0     |*
*|  Descrição: Funções - Produtos    			                  	|*
*|  Criado:     15/02/2008 | Por: Ana Claudia                 |*
*|  Modificado: 15/10/2009 | Por: Ana Claduia                 |*
*|  Pagina: js/parceiros.js                                   |*
*|------------------------------------------------------------|*/
 jQuery(document).ready(function() {
  jQuery("#frm_parceiro").submit(function(){
    var erro = "";
    
    if( empty(jQuery("[name=parceiros_razao_social]").val()) )
     erro +=  "Insira a razão social <br />";
     
    if( empty(jQuery("[name=parceiros_valor]").val()))
     erro += "Insira o valor da parceria <br />";

    if( empty(jQuery("[name=parceiros_imagem]").val()) &&  jQuery("[name=alterar]").val() == undefined)
   	 erro += "Insira a imagem <br />";

    if( empty(jQuery("[name=parceiros_nome_responsavel]").val()) )
     erro += "Insira o nome do responsável <br />";

    if( !IsEmail(jQuery("[name=parceiros_email_responsavel]").val()) )
     erro += "Insira o e-mail do responsável corretamente <br/>";

    if( empty(jQuery("[name=parceiros_tel_responsavel]").val()) )
     erro += "Insira o telefone do responsável <br />";

     if(!empty(erro))
     {
      jQuery("div.erro").remove();
      jQuery("<div class='erro'>" + erro + "</div>").insertAfter(".titulo");
      return false;
     }
     
   });
 });

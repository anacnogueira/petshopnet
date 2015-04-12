/**-----------------------------------------------------------|*
*|  SIPAC - Sistema Integrado de Painel de Controle V 2.0     |*
*|  Descri��o: Fun��es - Produtos    			                  	|*
*|  Criado:     15/02/2008 | Por: Ana Claudia                 |*
*|  Modificado: 15/10/2009 | Por: Ana Claduia                 |*
*|  Pagina: js/parceiros.js                                   |*
*|------------------------------------------------------------|*/
 jQuery(document).ready(function() {
  jQuery("#frm_parceiro").submit(function(){
    var erro = "";
    
    if( empty(jQuery("[name=parceiros_razao_social]").val()) )
     erro +=  "Insira a raz�o social <br />";
     
    if( empty(jQuery("[name=parceiros_valor]").val()))
     erro += "Insira o valor da parceria <br />";

    if( empty(jQuery("[name=parceiros_imagem]").val()) &&  jQuery("[name=alterar]").val() == undefined)
   	 erro += "Insira a imagem <br />";

    if( empty(jQuery("[name=parceiros_nome_responsavel]").val()) )
     erro += "Insira o nome do respons�vel <br />";

    if( !IsEmail(jQuery("[name=parceiros_email_responsavel]").val()) )
     erro += "Insira o e-mail do respons�vel corretamente <br/>";

    if( empty(jQuery("[name=parceiros_tel_responsavel]").val()) )
     erro += "Insira o telefone do respons�vel <br />";

     if(!empty(erro))
     {
      jQuery("div.erro").remove();
      jQuery("<div class='erro'>" + erro + "</div>").insertAfter(".titulo");
      return false;
     }
     
   });
 });

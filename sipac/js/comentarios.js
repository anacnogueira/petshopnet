/**-----------------------------------------------------------|*
*|  SIPAC - Sistema Integrado de Painel de Controle V 2.0     |*
*|  Descrição: Funções - Comentarios 				                  |*
*|  Criado:     14/10/2009 | Por: Ana Claudia                 |*
*|  Modificado: __/__/____ | Por:                             |*
*|  Pagina: js/comentarios.js                                 |*
*|------------------------------------------------------------|*/
jQuery(document).ready(function() {
 jQuery("#frm_comentario").submit(function(){
  var erro = "";	

  if( empty(jQuery("[name=produtos_id]").val()) )
   erro += "Selecione o produto<br />";	
  
 if( jQuery("[name=comentarios_nota]:checked").length <= 0)
   erro += "Selecione a nota<br />";	
   
  if( empty(jQuery("[name=comentarios_nome]").val()) ) 
   erro +="Insira o nome <br />";
   
   if( empty(jQuery("[name=comentarios_email]").val()) ) 
    erro += "Insira o e-mail <br />";
    
   if( empty(jQuery("[name=comentarios_cidade]").val()) )
     erro += "Insira a cidade <br />";
	 
	if( empty(jQuery("[name=comentarios_estado]").val()) ) 
	 erro += "Insira o estado <br />";
	 
	if( empty(jQuery("[name=comentarios_titulo]").val()) ) 
	 erro += "Insira o título do comentário<br />";
	 
	if( empty(jQuery("[name=comentarios_texto]").val()) )
	 erro += "Insira o comentario do texto";  
	 
	if(!empty(erro))
    {
       jQuery("div.erro").remove();
       jQuery("<div class='erro'>" + erro + "</div>").insertAfter(".titulo");
       return false;
   }
 });  
});	

/**-----------------------------------------------------------|*
*|  SIPAC - Sistema Integrado de Painel de Controle V 2.0     |*
*|  Descrição: Funções - Newsletters   				                |*
*|  Criado:     02/05/2007 | Por: Ana Claudia                 |*
*|  Modificado: 16/10/2009 | Por:                             |*
*|  Pagina: js/newsletters.js                                 |*
*|------------------------------------------------------------|*/
jQuery(document).ready(function() {
 jQuery("#frm_news").submit(function(){
 var erro = "";
 
 if( jQuery("[name=newsletters_titulo]").val() != undefined && empty(jQuery("[name = newsletters_titulo]").val()))
    erro += "Insira o título da newsletter<br />";    
 
 //if( jQuery("[name=newsletters_conteudo]").val() != undefined && empty(jQuery("[name = newsletters_conteudo]").val()))
   // erro += "Insira o conteúdo da newsletter<br />";

 if(jQuery("select[name=produtos_selected[]] option").length > 0)
 {
 	 jQuery.each(jQuery("[name=produtos_selected[]] option"),function(){
	    jQuery(this).attr("selected","true");
    });
 }
  	   
 if(!empty(erro))
 {
    jQuery("div.erro").remove();
    jQuery("<div class='erro'>" + erro + "</div>").insertAfter(".titulo");
    return false;
 } 
});
   
 jQuery("[name=btn_enviar]").click(function(){
    if(jQuery("select[name=produtos_selected[]] option").length == 0)
    {
      jQuery("div.erro").remove();
     jQuery("<div class='erro'>Selecione os produtos.</div>").insertAfter(".titulo");
    return false;
    }
  });
  
  jQuery("input.mover").click(function(){
 	acao = jQuery(this).val()
  	mover(acao);  	
  });
  
});
 
function mover(acao)
{
  if(acao == 'Adicionar')
  {
    if(jQuery("select[name=produtos] option:selected").length == 0)
      alert("Selecione um item para adicionar");
                    
    jQuery("select[name=produtos] option:selected").each(function() {
      selected = jQuery(this).val();
      option = "<option value='" + jQuery(this).val()+ "'>"+ jQuery(this).text() + "</option>";
      jQuery("[name=produtos_selected[]]").append(option);
      jQuery(this).remove();    
    });            
  }  
            
  else if(acao == 'Remover')
  {
    if(jQuery("select[name=produtos_selected[]] option:selected").length == 0)
      alert("Selecione um item para remover");
           
    jQuery("select[name=produtos_selected[]] option:selected").each(function() {
      selected = jQuery(this).val();
      option = "<option value='" + jQuery(this).val()+ "'>"+ jQuery(this).text() + "</option>";
      jQuery("[name=produtos]").append(option);
      jQuery(this).remove();    
    });       
   }  
 }  
 
 
function cancelar(link)
{
  window.location = link;
}

jQuery(document).ready(function() {
 jQuery("#frm_banner").submit(function(){
  var erro = "";

  if(empty(jQuery("[name = banners_nome]").val()))
    erro += "Insira o título do banner<br />";
  if(!empty($("[name=banners_imagemOld").val()){  
    if( empty(jQuery("[name = banners_imagem]").val()) &&  empty(jQuery("[name = banners_texto_html]").val()) )
      erro += "Selecione uma imagem ou texto para o  banner<br />";  
  }
  
  if( !empty(jQuery("[name=data_agendada]").val()) && !IsValidDate(jQuery("[name=data_agendada]").val()) )
    erro += "Insira a data de programação corretamente<br />";

   if( !empty(jQuery("[name=expira_data]").val()) && !IsValidDate(jQuery("[name=expira_data]").val()) )
    erro += "Insira a data de expiração corretamente<br />";
    
  if(!empty(erro))
  {
    jQuery("div.erro").remove();
    jQuery("<div class='erro'>" + erro + "</div>").insertAfter(".titulo");
    return false;
  }

 });
});

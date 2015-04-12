jQuery(document).ready(function(){

  jQuery('#div_prazo').Draggable({ 
      zIndex:    20, 
      ghosting:false, 
      opacity: 0.7, 
      handle:    '#prazo_handle' 
     }); 
    
    jQuery("#div_prazo").hide();
 	
 	
 	jQuery('#btn_prazo').click(function() { 
      jQuery("#div_prazo").show(); 
   });
   
   jQuery('#div_prazo .close').click(function() { 
     jQuery("#div_prazo").hide();
   });
   
    jQuery('#frm_prazo').ajaxForm({
      beforeSubmit: validate_prazo,
      clearForm: true,   
      resetForm: true,
      success: function(text) {

        jQuery('#div_prazo').html(text);
      }
	});
});


function validate_prazo(formData, jqForm, options)
{ 

  jQuery("span.erro").remove();
  
  var cep_destino = formData[0];

  if(cep_destino.value.length < 8){

    jQuery("#cep_destino").closest("span").append("<span class='erro'> Preencha o CEP corretamente</span>");
  }

  
    
  if(jQuery("span.erro").html() != null)
 	 return false;
}
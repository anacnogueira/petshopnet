jQuery(document).ready(function(){

  jQuery('#div_comentario').Draggable({ 
      zIndex:    20, 
      ghosting:false, 
      opacity: 0.7, 
      handle:    '#comentario_handle' 
     }); 
    
    jQuery("#div_comentario").hide(); 
 	
 	
 	jQuery('#btn_comentario').click(function() { 
      jQuery("#div_comentario").show(); 
   });
   
   jQuery('.close').click(function() { 
     jQuery("#div_comentario").hide();
   });
   
    jQuery('#frm_comentario').ajaxForm({ 
      beforeSubmit: validate_coment,
      clearForm: true,   
      resetForm: true,
      success: function(text) {
        jQuery("#reply").empty();
        jQuery("#reply").append("Comentário Enviado - Aguardando Aprovação"); 
        jQuery("#div_comentario").hide();
      }
	}); 
});	 	


function validate_coment(formData, jqForm, options) 
{ 
  jQuery("span.erro").remove();
  
  var comentarios_nome   = jQuery('input[name=comentarios_nome]');
  var comentarios_email  = jQuery('input[name=comentarios_email]');
  var comentarios_cidade = jQuery('input[name=comentarios_cidade]');
  var comentarios_estado = jQuery('select[name=comentarios_estado]');
  var comentarios_texto  = jQuery('textarea[name=comentarios_texto]');

  
  if(empty(comentarios_nome.fieldValue())){
    comentarios_nome.closest("span").append("<span class='erro'> Preencha o nome</span>");
  }
  
  if(empty(comentarios_email.fieldValue())){
    comentarios_email.closest("span").append("<span class='erro'> Preencha o e-mail corretamente</span>");
  }
  
 if(empty(comentarios_cidade.fieldValue())){
    comentarios_cidade.closest("span").append("<span class='erro'> Preencha a cidade</span>");
  }
  
  if(empty(comentarios_estado.fieldValue())){
    comentarios_estado.closest("span").append("<span class='erro'> Selecione o estado</span>");
  }
  
  if(empty(comentarios_texto.fieldValue())){
    comentarios_texto.closest("span").append("<span class='erro'><br />Preencha o coment&aacute;rio</span>");
  }
    
  if(jQuery("span.erro").html() != null)
 	 return false;
}
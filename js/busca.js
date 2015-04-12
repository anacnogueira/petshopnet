jQuery(document).ready(function(){
  jQuery("#frm_busca").submit( function() {
    
    
    if( empty(jQuery("[name=keyWord]").val()) )
	  {
		  alert(jQuery("[name=keyWord]").attr("title"));
		  jQuery("[name=keyWord]").focus();
		  return false;
	  }
  });
});  

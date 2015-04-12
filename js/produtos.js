jQuery(document).ready(function(){

 jQuery(".star").not(".no_ajax").click(function(){
 if(jQuery("[name=comentarios_nota]:checked").attr("disabled") == false)
 {
 	var text = jQuery.ajax({
        type: "POST",
        url: "lib/computar_voto.php",
        async: false,
        data: "produtos_codigo=" + jQuery("[name=produtos_codigo]").val() + "&comentarios_nota=" + jQuery("[name=comentarios_nota]:checked").val(),
    }).responseText;

    jQuery("span.voto").remove();
    jQuery("<span class='voto'> " + text + "</span>").insertAfter(jQuery(this));
 }  
 }); 
});	

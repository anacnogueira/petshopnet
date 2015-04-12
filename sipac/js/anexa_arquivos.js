/**-----------------------------------------------------------|*
*|  SIPAC - Sistema Integrado de Painel de Controle V 2.0     |*
*|  Descrição: Funções - Produtos Imagens	                  	|*
*|  Criado:     26/05/2010 | Por: Ana Claudia                 |*
*|  Modificado: __/__/____ | Por:                             |*
*|  Pagina: js/anexa_arquivos.js                              |*
*|------------------------------------------------------------|*/
jQuery(document).ready(function(){
   //Anexar Multiplas imagens
  if(!empty(jQuery("#image"))){
    new AjaxUpload('image', {
			action: 'lib/manager_files.php',
			name: 'myfile',
      data:{acao:'upload',produtos_codigo: jQuery("[name=produtos_codigo]").val()},
			onComplete : function(file,response){
        //alert(response);
        arrImage = response.split(",");
				image = "<img src='../banco_imagens/produtos/" + arrImage[1] + "' alt='' /><br />";
        hidden = "<input name='produtos_imagem[]' type='hidden' value='" + arrImage[0] + "' />";
        button = "<input type='button' class='submit' value='Excluir' onclick='delete_image(this)'/>";
        jQuery('<div>' + image + hidden +  button + '</div>').appendTo(jQuery('div#list_images'));
			}	
		});
  }  
});	

function delete_image(obj){
	file = jQuery(obj).prev(0).val();
	linha   = jQuery(obj).parent();
	 
  linha.hide('slow');
	linha.remove();
		  
	jQuery.ajax({
    type: "POST",
    url: 'lib/manager_files.php',
    async: false,
    data: { acao: 'exclui', arquivo: file }
	})
}
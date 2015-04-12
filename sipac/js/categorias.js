/**-----------------------------------------------------------|*
*|  SIPAC - Sistema Integrado de Painel de Controle V 2.0     |*
*|  Descrição: Funções - Categorias 				                  |*
*|  Criado:     12/09/2007 | Por: Ana Claudia                 |*
*|  Modificado: __/__/____ | Por:                             |*
*|  Pagina: js/categorias.js                                  |*
*|------------------------------------------------------------|*/
jQuery(document).ready(function() {
 jQuery("#frm_user").submit(function(){
  var erro = "";

  if(empty(jQuery("[name = categorias_descricao]").val()))
    erro += "Insira o nome da categoria<br />";

   if(!empty(erro))
   {
     jQuery("div.erro").remove();
     jQuery("<div class='erro'>" + erro + "</div>").insertAfter(".titulo");
    return false;
  }

 });

   jQuery("[name=parent_id]").change(function(){

   jQuery.get(
    "load_ordem.php",
    {
     type: "categorias",
     id: jQuery(this).val()
    },
    function(data) {
     jQuery("[name=categorias_ordem]").val(data);
    }
   )
  });
});

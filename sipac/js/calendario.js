/**-----------------------------------------------------------|*
*|  SIPAC - Sistema Integrado de Painel de Controle V 2.0     |*
*|  Descrição: Funções 	                                      |*
*|  Criado:     29/03/2009 | Por: Ana Claudia                 |*
*|  Modificado: __/__/____ | Por:                             |*
*|  Pagina: js/calendario.js                                  |*
*|------------------------------------------------------------|*/
$(document).ready(function() {
 $('.submit').change( function() {
   $('form:first').submit();
  });;

  $('.returnData').click(function(){
   fct_ReturnData(this.id);
  });
});
function fct_ReturnData(objData)
{
 data = objData.replace("d","").replace(/-/g,"/");
 var object = $("[name = object]").val();
 opener.$("[name = " + object +"]").val(data);
 top.close();
}

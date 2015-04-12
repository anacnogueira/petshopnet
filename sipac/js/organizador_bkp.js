/**-------------------------------------------|*
*|     Sistema: Nokia                         |*
*|   Descrição: Funções - Organizador  				|*
*|      Criado: 03/04/2009 | Por: Ana Claudia |*
*|  Modificado: __/__/____ | Por:             |*
*|--------------------------------------------|*/
$(document).ready(function() {
 $("li:not(ul)").draggable({
  axis: 'y',
  opacity: 0.35,
  scope: 'organizador'
 });

});


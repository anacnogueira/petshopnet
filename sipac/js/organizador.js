/**-------------------------------------------|*
*|     Sistema: Nokia                         |*
*|   Descri��o: Fun��es - Organizador  				|*
*|      Criado: 03/04/2009 | Por: Ana Claudia |*
*|  Modificado: __/__/____ | Por:             |*
*|--------------------------------------------|*/
$(document).ready(function() {
 $("li").draggable({
  axis: 'y',
  opacity: 0.35,
  containment: 'ol#parent'
 });

});


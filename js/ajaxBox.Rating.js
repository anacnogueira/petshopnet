ajaxBox.Rating = function( _Elemento, options )
{	
	/*____________________________________________________________________
	*/		
	this.options = Object.extend(
						 {
							'img-on' :'',
							'img-off':'',
							
							'voto-ini':1,
							'voto-fim':5
						 }
					 , options || {}
					 );

	/*____________________________________________________________________
	*/		
	var _Conteudo = '';
	var _Elemento;
	
	$( _Elemento).innerHTML = '';
	for ( Star = this.options['voto-fim']; Star > this.options['voto-ini']; Star --)
	{
		_Conteudo = '<img '+
					'id="imagem-'+Star+'"'+
					'onmouseover="ajaxBox[\'Start\']( '+ Star +' )"'+
					'onclick="ajaxBox[\'Votar\']( '+ Star +' )"'+
					'style="cursor:pointer;"'+
					'src="'+ this.options['img-off'] +'" border="0" />' + _Conteudo;
				
		 
	}
	
	$( _Elemento).innerHTML = _Conteudo;
		
	this.Start = function( a)
	{

		for ( Star = ajaxBox['options']['voto-ini']; Star < a; Star ++)
		{
			_Star = Star + 1;
			$( 'imagem-'+_Star).src = ajaxBox['options']['img-on']		
		}
		for ( Star = a; Star < ajaxBox['options']['voto-fim']; Star ++)
		{
			_Star = Star + 1;
			$( 'imagem-'+_Star).src = ajaxBox['options']['img-off']		
		}		
	}
	
	_ElementoResposta = this.options['resposta'];
	
	var Retorno = function( R) { $( _ElementoResposta).innerHTML = R.responseText; }
			
	this.Votar = function( a)
	{

		for ( Star = ajaxBox['options']['voto-ini']; Star < a; Star ++)
		{
			_Star = Star + 1;
			$( 'imagem-'+_Star).src = ajaxBox['options']['img-on']		
		}
		for ( Star = a; Star < ajaxBox['options']['voto-fim']; Star ++)
		{
			_Star = Star + 1;
			$( 'imagem-'+_Star).src = ajaxBox['options']['img-off']		
		}
		
		new Ajax.Request( this.options['url'], 
							{ 
								method:'post', parameters:encodeURI( this.options['parametro']+'='+a ),onSuccess:Retorno

                } 
							);
	}				


}

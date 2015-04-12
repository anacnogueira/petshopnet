tag2script = function( texto ){
	var ini = 0;

	while ( ini!=-1 ){
		ini = texto.indexOf( '<script', ini );

		if ( ini >=0 ){

			ini = texto.indexOf( '>', ini ) + 1;
			var fim = texto.indexOf( '<\/script>', ini );
			codigo = texto.substring( ini, fim );

			eval( codigo );
		}
	}
}
var ajaxBox = function(){
	
	this.DisparaFormulario = function( elementJson ){
		
		elementJson      = eval( elementJson );	
		this.elementJson = elementJson;
		
		/* Definindo variaveis */
		this.a = eval('document.'+elementJson.NomeForm);
		this.b = elementJson.methodoForm;
		this.c = elementJson.urlRequest;
		this.e = elementJson.divCarregando;
		this.f = elementJson.msgCarregando;
		this.g = elementJson.divResposta;
		this.h = elementJson.Elementos;
		this.i = elementJson.classeRequerido;
		this.j = elementJson.classeNormal;
		this.y = elementJson.classeMsgRequerido;
		this.k = elementJson.Debug;
		this.l = elementJson.functionExecutaDepois;
		
		/* Validando campos */
		for ( o = 0; o < this.h.length; o++){

			if( typeof( this.a.elements[ this.h[o].id] ) != 'undefined' ){
				
				if( this.a.elements[ this.h[o].id].id == this.h[o].id ){
					
					this.cleanElement( this.h[o].id);
					
					/* Validação de campo Requerido - CHECKBOX */
					if( this.h[o]['Requerido'] && !this.a.elements[ this.h[o].id].checked && this.a.elements[ this.h[o].id].type == 'checkbox' ) return this.valida( this.h[o], 'Requerido');
					
					/* Validação de campo Requerido - RADIO */
					if( this.h[o]['Requerido'] && !this.a.elements[ this.h[o].id].checked && this.a.elements[ this.h[o].id].type == 'radio' ) return this.valida( this.h[o], 'Requerido');
					
					/* Validação de campo Requerido - TEXT, TEXTAREA, PASSWORD, HIDDEN, SELECT-ONE, SELECT-MULTIPLE */
					if( !this.h[o]['tinyMCE'])
					{
						if( this.h[o]['Requerido'] && this.a.elements[ this.h[o].id].value == '' ) return this.valida( this.h[o], 'Requerido'); 
					}
					else{
						
						if( this.h[o]['Requerido'] && tinyMCE.getInstanceById( this.h[o].id).value == '' ) return this.valida( this.h[o], 'Requerido');
					}
					/* Validação do tamanho do campo e tipo[ texto, numero ]*/
					if( this.a.elements[this.h[o].id].type == 'text'       || 
						this.a.elements[this.h[o].id].type == 'textarea'   || 
						this.a.elements[this.h[o].id].type == 'password'   || 
						this.a.elements[this.h[o].id].type == 'hidden'
						){
					
						/* Validação quantidade minima de caracteres */
						if ( this.h[o]['Minimo']) if( parseInt( this.a.elements[ this.h[o].id].value.length ) < parseInt( this.h[o]['Minimo'][0] ) ) return this.valida( this.h[o], 'Minimo'); 
						
						/* Validação quantidade máxima de caracteres */
						if ( this.h[o]['Maximo']) if( parseInt( this.a.elements[ this.h[o].id].value.length ) > parseInt( this.h[o]['Maximo'][0] ) ) return this.valida( this.h[o], 'Maximo');
										
						/* Validação somente letras */
						if( this.h[o]['Somente'] == 'Letra'  && !(/^[a-zA-z]+$/.test( this.a.elements[ this.h[o].id].value )) ) return this.valida( this.h[o], 'Letra');
		
						/* Validação somente número */
						if( this.h[o]['Somente'] == 'Numero' && !(/^[0-9]+$/.test( this.a.elements[ this.h[o].id].value )) ) return this.valida( this.h[o], 'Numero');
					}
				}
			}
		}
		
		this.setValueRequest();
		
		// Debug;
		if ( typeof( this.k) != 'undefined') if( this.k[0] ) this.pre( this.h );
				
		return false;
	}
	
	this.criaElemento = function( base, elementBase, id, mensagen ){ 
	
		switch( base ){
		
			case 'Antes':
				if ( typeof( $( id)) != 'undefined') Element.remove( id);
				
					new Insertion.Before( this.a.elements[elementBase], '<div id="'+ id +'">'+ mensagen +'<\/div>' );
				
				$( elementBase).addClassName( this.i); 
				return false;
			break;
			
			case 'Depois':				
				if ( typeof( $( id)) != 'undefined') Element.remove( id);

					new Insertion.After( this.a.elements[elementBase], '<div id="'+ id +'">'+ mensagen +'<\/div>' ); 
				
				$( elementBase).addClassName( this.i);

				if ( typeof( this.y ) != 'undefined') $( id).addClassName( this.y);
				return false;
			break;	
		
		}		
		return false
	}
	this.cleanElement = function( e ){

		if ( typeof( $( 'R_'+e)) != 'undefined') Element.remove( 'R_'+e);  Element.removeClassName( $( e), this.i); 

	}

	this.setValueRequest = function(){
	
		var populaValor = 'Rand='+ this.r();
		var e = this.h;
		
		for ( i = 0; i < e.length; i++){
			if( typeof( $( e[ i].id).value ) == 'undefined' ){
			
				populaValor = e[ i].id + '='+ escape( $( e[ i].id).innerHTML ) +'&'+ populaValor;
			}
			else{

				if ( typeof( this.a.elements[ e[ i].id].type) == 'undefined'){
	
					for ( R = 0; R < this.a.elements[ e[ i].id].length; R++){
												
						if( this.a.elements[ e[ i].id][ R].checked){

							populaValor = this.a.elements[ e[ i].id][ R].id + '='+ escape( this.a.elements[ e[ i].id][ R].value ) +'&'+ populaValor;
						}
					}
				}
				
				else{
					if( !this.h[i]['tinyMCE'])
					{
						
						populaValor = e[ i].id + '='+ escape( this.a.elements[ e[ i].id].value ) +'&'+ populaValor;
					}
					else{
						var this_valor = tinyMCE.getInstanceById( e[ i].id); // this_valor.getHTML()	
						populaValor = e[ i].id + '='+ escape( this_valor.getHTML()) +'&'+ populaValor;
					}
				}
			}	
		}
		this.aa = populaValor;
		
		this.ajaxSend( this.b[1]);
		
	}
	
	this.valida = function( e, tipo ){
		var e;
	
		switch( tipo){
		
			case 'Requerido':
				
				/* =============================================================================== */
				switch( e['MensagemResposta'][0] ){
				
					case 'Antes':
						if( e['MensagemResposta'][1] == 'Escreve' ){

						
							this.criaElemento( 'Antes', e.id, 'R_'+e.id, e['MensagemResposta'][2]);
						}
						else{
							alert( e['MensagemResposta'][2]);
							$( e.id).addClassName( this.i);
						}
						return false;
					break;	
					case 'Depois':
						if( e['MensagemResposta'][1] == 'Escreve' ){
						
							this.criaElemento( 'Depois', e.id, 'R_'+e.id, e['MensagemResposta'][2]);
						}
						else{
							alert( e['MensagemResposta'][2]);
							$( e.id).addClassName( this.i);
						}
						return false;
					break;
				}
				/* =============================================================================== */
			
			break;
				
			case 'Minimo':
			
				switch( e['Minimo'][1] ){
				
					case 'Antes':
						if( e['Minimo'][2] == 'Escreve' ){
						
							this.criaElemento( 'Antes', e.id, 'R_'+e.id, e['Minimo'][3]);
						}
						else{
							alert( e['Minimo'][3]);
							$( e.id).addClassName( this.i);
						}
						return false;
					break;	
					case 'Depois':
						if( e['Minimo'][2] == 'Escreve' ){
						
							this.criaElemento( 'Depois', e.id, 'R_'+e.id, e['Minimo'][3]);
						}
						else{
							alert( e['Minimo'][3]);
							$( e.id).addClassName( this.i);
						}
						return false;
					break;
				}
				
			break;

			case 'Maximo':
			
				switch( e['Maximo'][1] ){
				
					case 'Antes':
						if( e['Maximo'][2] == 'Escreve' ){
						
							this.criaElemento( 'Antes', e.id, 'R_'+e.id, e['Maximo'][3]);
						}
						else{
							alert( e['Maximo'][3]);
							$( e.id).addClassName( this.i);
						}
						return false;
					break;	
					case 'Depois':
						if( e['Maximo'][2] == 'Escreve' ){
						
							this.criaElemento( 'Depois', e.id, 'R_'+e.id, e['Maximo'][3]);
						}
						else{
							alert( e['Maximo'][3]);
							$( e.id).addClassName( this.i);
						}
						return false;
					break;
				}
						
			break;
			
			case 'Letra':

				switch( e['MensagemResposta'][0] ){
				
					case 'Antes':
					
						if (!(/^[a-zA-z]+$/.test( $( e.id ).value ))){
							
							if( e['MensagemResposta'][1] == 'Escreve' ){
							
								this.criaElemento( 'Depois', e.id, 'R_'+e.id, e['MensagemResposta'][2] );
							}
							else{
								alert( e['MensagemResposta'][2]);
								$( e.id).addClassName( this.i);
							}
							return false;				
						}
						
					break;	
					case 'Depois':

						if (!(/^[a-zA-z]+$/.test( $( e.id ).value ))){
							
							if( e['MensagemResposta'][1] == 'Escreve' ){
							
								this.criaElemento( 'Depois', e.id, 'R_'+e.id, e['MensagemResposta'][2] );
							}
							else{
								alert( e['MensagemResposta'][2]);
								$( e.id).addClassName( this.i);
							}
							return false;				
						}
						
						
					break;
				}
			
			break;
			
			case 'Numero':

				switch( e['MensagemResposta'][0] ){
				
					case 'Antes':
					
						if (!(/^[0-9]+$/.test( $( e.id ).value ))){
							
							if( e['MensagemResposta'][1] == 'Escreve' ){
							
								this.criaElemento( 'Depois', e.id, 'R_'+e.id, e['MensagemResposta'][2] );
							}
							else{
								alert( e['MensagemResposta'][2]);
								$( e.id).addClassName( this.i);
							}
							return false;				
						}
						
					break;	
					case 'Depois':

						if (!(/^[0-9]+$/.test( $( e.id ).value ))){
							
							if( e['MensagemResposta'][1] == 'Escreve' ){
							
								this.criaElemento( 'Depois', e.id, 'R_'+e.id, e['MensagemResposta'][2] );
							}
							else{
								alert( e['MensagemResposta'][2]);
								$( e.id).addClassName( this.i);
							}
							return false;				
						}
						
						
					break;
				}
			
			break;
		}
	}
	
	this.pre = function( e ){
		
		var populaValor = 'Rand - '+ this.r();
		var e;
		
		for ( i = 0; i < e.length; i++){
			if( typeof( $( e[ i].id).value ) == 'undefined' ){
			
				populaValor = e[ i].id + ' - '+ 
					
					$( e[ i].id).innerHTML +'<br />'+ populaValor;
			}
			else{
			
				populaValor = e[ i].id + ' - '+ 
					
					$( e[ i].id).value     +'<br />'+ populaValor;
			}	
		}
		
		$( this.k[ 1] ).innerHTML = populaValor;
		
	}
	
	this.r = function(){
	
		return Math.floor( Math.random() * 10 );
	}
	
	this.ShowLoad = function(){
		
		this.e = this.elementJson.divCarregando;
		
		if( typeof( this.e ) != 'undefined'  ){
		
			if ( typeof( $( this.e[0] ) ) != 'undefined' ){

				$( this.e[0] ).style.display == '' || $( this.e[0] ).style.display == 'none' ? $( this.e[0] ).style.display = 'block' : $( this.e[0] ).style.display = 'none';	
				$( this.e[0] ).innerHTML = this.e[2];
			}
		}
	}
	
	/* Criando a estância de request */	
	this.callAjax = function(){
		try{
			y = new XMLHttpRequest();
		}catch(ee){
			try{
				y = new ActiveXObject("Msxml2.XMLHTTP");
			}catch(e){
				try{
					this.x = new ActiveXObject("Microsoft.XMLHTTP");
				}catch(E){
					y = false;
				}
			}
		}
	}	
	
	this.ajaxSend = function( RequestType ){

		switch ( RequestType ){

			case 'post':
			
			/* Mostramos Div de 'Carregando' e inserimos um texto de pré carregamento */
			this.ShowLoad();
			if ( typeof( this.f) != 'undefined') this.g[0].innerHTML = this.f;
			/* Mostramos Div de 'Carregando' e inserimos um texto de pré carregamento */
			
			this.callAjax();
			
			y.abort()
			
			y.open('POST', this.c, true);
			
			y.setRequestHeader("Content-Type", "application/x-www-form-urlencoded; iso-8859-1");
			y.setRequestHeader("CharSet", "iso-8859-1")
			y.setRequestHeader("Cache-Control", "no-store, no-cache, must-revalidate");
			y.setRequestHeader("Cache-Control", "post-check=0, pre-check=0");
			y.setRequestHeader("Pragma", "no-cache");
			
			y.send( this.aa );
			
			var arrayResposta = this.g;

			y.onreadystatechange = function(){
				
				if ( y.readyState == 4){
	
					var Retorno   =y.responseText;

						tag2script( Retorno );
						
						for ( i = 0; i < arrayResposta.length; i++){

							$( arrayResposta[ i]).innerHTML =  Retorno;
							
						}					
					
				}
				
			}
			if ( typeof( this.l) != 'undefined') this.l();
			
			this.ShowLoad();

			break;

			case 'get':
			
			/* Mostramos Div de 'Carregando' e inserimos um texto de pré carregamento */
			this.ShowLoad();
			if ( typeof( this.f) != 'undefined') this.g[0].innerHTML = this.f;
			/* Mostramos Div de 'Carregando' e inserimos um texto de pré carregamento */
										
			this.callAjax();
			y.abort()

			y.open('GET', this.c+"?"+this.aa,true);
			
			y.setRequestHeader("Content-Type", "text/html; charset=iso-8859-1");
			
			var arrayResposta = this.g;

			y.onreadystatechange = function(){
				
				if ( y.readyState == 4){
	
					var Retorno   = y.responseText;

						tag2script( Retorno );
						
						for ( i = 0; i < arrayResposta.length; i++){

							$( arrayResposta[ i]).innerHTML =  Retorno;
							
						}					
					
				}
				
			}
			y.send( null )
			
			this.ShowLoad();
													
			break;
		}		
	
	}
		
	this.get = function( elementJson ){
		
		elementJson      = eval( elementJson );
		this.elementJson = elementJson;
		
		this.a = elementJson.parametros;
		this.c = elementJson.url;
		this.g = elementJson.Resposta;
		this.d = elementJson.methodo;
		this.f = elementJson.query2ajax;
		
		this.o = elementJson.Confirmar;
		
		if ( typeof( this.o) != 'undefined'){	
			if ( this.o[0]){
				if ( confirm(this.o[1])){
		
					if (this.f) if ( this.f[0]) window.location.href = this.f[2]+'#'+this.f[1]+'&'+this.a;
					
					this.aa = encodeURI( this.a );
					
					this.ajaxSend( this.d);
				}
			}

		}
		else{
				if (this.f) if ( this.f[0]) window.location.href = this.f[2]+'#'+this.f[1]+'&'+this.a;
				
				this.aa = encodeURI( this.a );
				
				this.ajaxSend( this.d);				
			
		}		
	}
	
	this.getUrlFromAjax = function( elementJson ){
	
		elementJson      = eval( elementJson );
		this.elementJson = elementJson;
		
		this.url = window.location.href;
		
		this.g = elementJson.Resposta;
		this.c = elementJson.url;
		this.n = elementJson.Condicional;
		this.d = elementJson.methodo;
		
		if ( this.url.match('#') != null ){

			this.query       = this.url.split('#');
			this.Condicional = this.query[1].split('&');
			
			this.aa = encodeURI( this.Condicional[1] );
			if ( this.n == this.Condicional[0]) this.ajaxSend( this.d);
		}
	}
	
	this.onfly = function( elemento, options ){
		this.a = elemento;
		
		this.options = Object.extend(
									 	 {
											'methodo':'post',
											'botaoCancelar':['Cancelar!', ''],
											'botaoEnviar':  [ 'Enviar!', ''],
											'Resposta':[elemento]
										 }
									 , options || {}
									 );
		var pp = this.options.parametros;
		var uu = this.options.url;
		var mm = this.options.methodo;
		var aa = this.options.botaoCancelar;
		var bb = this.options.botaoEnviar;
		var rr = this.options.Resposta;
		
		var a = this.options.classMouseOver;
		var b = this.options.classEditando;
		var c = this.options.classDepois;
		this.$ = (
					{
						'over':function(){

									if( typeof( originalClass) == 'undefined' )originalClass = $( elemento).classNames()

									
									Element.show( elemento );
									$( elemento).addClassName( a);
									
						}
					,
						'out':function(){
								Element.removeClassName( $( elemento), a);
								Element.removeClassName( $( elemento), b);
								Element.removeClassName( $( elemento), c);
								$( elemento).addClassName( originalClass);
								
						}
					,
						'click':function(){
								this.cancelarOnfly = function(){

									Element.removeClassName( $( elemento), a);
									Element.removeClassName( $( elemento), b);
									Element.removeClassName( $( elemento), c);
									$( elemento).addClassName( originalClass);
									
									Element.remove( elemento+'_c_onfly');
									Element.remove( elemento+'_e_onfly');
									
									if ( typeof(X) != 'undefined')$( elemento).innerHTML = X;
									
									Element.show(elemento)
									Element.hide(elemento +'_onfly');
								}
								this.enviarOnfly = function(){
									var Retorno = function(R) {

										$( rr+'_onfly').value = $( elemento+'_onfly').value;
										X = R.responseText;
										
										Element.removeClassName( $( elemento), a);
										Element.removeClassName( $( elemento), b);
										Element.removeClassName( $( elemento), c);
										$( elemento).addClassName( originalClass);
										
										Element.remove( elemento+'_c_onfly');
										Element.remove( elemento+'_e_onfly');
										
										if ( typeof(X) != 'undefined')$( elemento).innerHTML = $( elemento+'_onfly').value;
										
										Element.show(elemento)
										Element.remove(elemento +'_onfly');									
									}
									
									if ( pp.length > 1 ) {

										ParamentroPassado = pp[0]+'='+$( elemento+'_onfly').value+'&'+pp[1];

									}
									
									new Ajax.Request( uu, { method:mm, parameters:encodeURI( ParamentroPassado ),onSuccess:Retorno } );
									
								}
								Element.hide(elemento);
								
								new Insertion.After( elemento, 
														'<textarea id="'+ elemento +'_onfly' +'">'+ $( elemento).innerHTML +'<\/textarea>' 
													);
								new Insertion.After( elemento+'_onfly', 
														'<input id="'+elemento+'_c_onfly'+'" type="button" class="'+aa[1]+'" value="'+aa[0]+'">' 
												    );
									Event.observe( elemento+'_c_onfly', 
												  	'click', this.cancelarOnfly 
												  );
									
								new Insertion.After( elemento+'_onfly', 
														'<input id="'+elemento+'_e_onfly'+'" type="button" class="'+bb[1]+'" value="'+bb[0]+'">' 
												    );
									Event.observe( elemento+'_e_onfly', 
												  	'click', this.enviarOnfly 
												  );
									
								$( elemento +'_onfly' ).addClassName( b);
								$( elemento +'_onfly' ).focus();
									
						}
					}
					
				  );

		Event.observe( this.a, 'click',     this.$.click);
		Event.observe( this.a, 'mouseout',  this.$.out);
		Event.observe( this.a, 'mouseover', this.$.over);
	
	}

}
var ajaxBox = new ajaxBox();
ajaxBox.me = function( e){

	$( e).style.display == ''      || 
	$( e).style.display == 'none'  ? 
	$( e).style.display =  'block' : 
	$( e).style.display =  'none';

}


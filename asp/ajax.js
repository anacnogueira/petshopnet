/*
|------------------------------------------------------------------------------------------|
|  Classe:    Ajax                                                                      |
|  Versão:    2.0                                                                          |
|  Descrição: Classe para trabalhar com AJAX, funcionando no Mozilla e no IE.              |
|------------------------------------------------------------------------------------------|
*/

/*
|-------------------------------------|
|          Classe: Parametro          |
|-------------------------------------|
*/
 function Parametro(n,v)
 {
	//Variáveis e objetos da classe
	this.nome		= n;
	this.valor	= v;
 }

/*
|----------------------------------------------|
|          Classe: Parametros_Colecao          |
|----------------------------------------------|
*/
 function Parametros_Colecao()
 {
	//Variáveis e objetos da classe
	this.parametro_colecao = new Array();
	
	//##### Método: Adicionar #####
	this.Adicionar = function(param)
	{
		this.parametro_colecao.push(param);
	}
	
	//##### Método: Limpar #####
	this.Limpar = function()
	{
		this.parametro_colecao = new Array();
	}
	
	//##### Método: getItem #####
	this.getItem = function(index)
	{
		return this.parametro_colecao[index];
	}
	
	//##### Método: setItem #####
	this.setItem = function(index, parametro)
	{
		this.parametro_colecao[index] = parametro;
	}
	
	//##### Método: length #####
	this.length = function()
	{
		return this.parametro_colecao.length;
	}
 }

/*
|--------------------------------------|
|          Classe: AjaxStatus          |
|--------------------------------------|
*/
 function AjaxStatus()
 {
	//Variáveis e objetos da classe
	this.numero		="";
	this.mensagem	="";
 }

/*
|--------------------------------|
|          Classe: Ajax          |
|--------------------------------|
*/
 function Ajax()
 {
  //Variáveis e objetos da classe
	this.oParametros	= new Parametros_Colecao();
	this.oStatus			= new AjaxStatus();
	this.oAjax				= null;
	this.metodo				= "post"
	this.url					= "";
	this.getText			= "";
	this.getXml				= "";
	this.callBack			= "";
	this.Loading			= "";
	this.basePath			= "http://"+ window.location.host ;

	var oThis					= this;
    //alert("oi: "+this.basePath);
	//##### Método: CriarObjeto #####
	this.CriarObjeto = function()
	{
		//Criando o objeto XMLHTTP
		if (window.ActiveXObject)
		{
			try
			{
				this.oAjax	= new ActiveXObject("Msxml2.XMLHTTP.3.0");
			}
			catch(e)
			{
				try
				{
					this.oAjax	= new ActiveXObject("Microsoft.XMLHTTP");
				}
				catch(e)
				{
					throw "Não foi possível criar o objeto XMLHTTP";
				}
			}
		}
		else if(window.XMLHttpRequest)
		{
			try
			{
				this.oAjax	= new XMLHttpRequest();
			}
			catch(e)
			{
				throw "Não foi possível criar o objeto XMLHTTP";
			}
		}
		if (this.callBack != "")
		{
			var oThis = this;
			
			if (typeof(this.callBack) == "string")
			{
				this.callBack = this.callBack.substring(0,this.callBack.length-1) +", oThis)";
				this.oAjax.onreadystatechange = function(){ eval(oThis.callBack) }
			}
			else
			{
				this.oAjax.onreadystatechange = function(){ oThis.callBack(oThis) }
			}
		}
	}
	
		
	//##### Método: Enviar #####
	this.Enviar = function()
	{
		//Variáveis e objetos do método
		var urlTmp	= ""
		var indx		= 0;
		var bitAsync;
		
		if (this.url == "") throw "A url para envio não foi especificada.";
		
		bitAsync	= (this.callBack != "") ? true : false;
		
		//Cria o objeto XMLHTTP
		this.CriarObjeto();
		
		//Abrindo a Div de Loading
		this.AbrirLoading()
		
		if (this.metodo.toUpperCase() == "POST")
		{
			this.oAjax.open(this.metodo.toUpperCase(), this.url, bitAsync);
			this.oAjax.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
			
			for (indx = 0; indx < this.oParametros.length(); indx++)
			{
				urlTmp += (indx == 0) ? "" : "&";
				urlTmp += this.oParametros.getItem(indx).nome +"="+ escape(this.oParametros.getItem(indx).valor);
			}
			this.oAjax.send(urlTmp);
		}
		else
		{
			for (indx = 0; indx < this.oParametros.length(); indx++)
			{
				urlTmp += (indx == 0) ? "?" : "&";
				urlTmp += this.oParametros.getItem(indx).nome +"="+ escape(this.oParametros.getItem(indx).valor);
			}
			this.oAjax.open(this.metodo.toUpperCase(), this.url + urlTmp, bitAsync);
			this.oAjax.send(null);
		}
		//alert(this.basePath);
		//alert(this.url +"/?"+ urlTmp);
		//window.open(this.url +"/?"+ urlTmp);

		//Limpando o vetor de parâmetros
		this.oParametros.Limpar();
	}
	
	//##### Método: VerificarStatus #####
	this.VerificarStatus = function()
	{
		if (this.oAjax.readyState == 4 || this.oAjax.readyState == "complete")
		{
			this.oStatus.numero		= this.oAjax.status;
			this.oStatus.mensagem	= this.oAjax.statusText;
			
			if (this.oStatus.numero == 200)
			{
				if (window.ActiveXObject)
				{
					var xmlDOM = new ActiveXObject("Msxml2.DOMDocument.3.0")
					xmlDOM.loadXML(url_decode(this.oAjax.responseText));
					
					this.getText	= url_decode(this.oAjax.responseText);
					this.getXml		= xmlDOM;
				}
				else
				{
					this.getText	= this.oAjax.responseText;
					this.getXml		= this.oAjax.responseXML;
				}
			}
			else
			{
				alert('Número do erro:'+ this.oStatus.numero +'\nDescição: '+ this.oStatus.mensagem);
			}
			this.FecharLoading();
		}
		return this.oAjax.readyState;
	}
	
	//##### Método: AbrirLoading #####
	this.AbrirLoading = function()
	{

		if (this.Loading != "")
			var objeDivLoading	= document.getElementById(this.Loading);
		else
		{
			var objeDivLoading	= document.getElementById('divAjaxLoading');
			var inteDivWidth		= 83;
			var inteDivHeight		= 20;

			if (objeDivLoading == null)
			{
				//Criando a IDV 'divAjaxLoading' e configurando o objeto
				objeDivLoading	= document.createElement("div");
				objeDivLoading.id											= 'divAjaxLoading';
				objeDivLoading.style.width						= '83px';
				objeDivLoading.style.height						= '20px';
				objeDivLoading.style.backgroundColor	= '#999999';
				//objeDivLoading.style.border						= '1px solid #878D31';
				objeDivLoading.style.color						= '#FFFFFF';
				objeDivLoading.style.textAlign				= 'left';
				objeDivLoading.style.verticalAlign		= 'middle';
				objeDivLoading.style.font							= '10px Verdana';
				if (window.ActiveXObject)
					objeDivLoading.style.position				= 'absolute';
				else if(window.XMLHttpRequest)
					objeDivLoading.style.position				= 'fixed';
				objeDivLoading.style.top						= '0px';
				objeDivLoading.style.right							= '0px';
				objeDivLoading.style.paddingTop				= '2px';
				objeDivLoading.style.paddingBottom		= '2px';
				
				objeDivLoading.innerHTML	= '<img src="'+ this.basePath +'/estilo/img/loading.gif" width="20" height="20" alt="Loading" id="imgAjaxLoading" /> Aguarde...';

				document.body.appendChild(objeDivLoading);
			}
		}
		objeDivLoading.style.display = 'block';

	}
	
	//##### Método: FecharLoading #####
	this.FecharLoading = function()
	{
		if (this.Loading != "")
			var objeDivLoading	= document.getElementById(this.Loading);
		else
			var objeDivLoading	= document.getElementById('divAjaxLoading');
		
		objeDivLoading.style.display = 'none';
	}
 }
 
 function url_encode(str)
 {
    var hex_chars = "0123456789ABCDEF";
    var noEncode = /^([a-zA-Z0-9\_\-\.])$/;
    var n, strCode, hex1, hex2, strEncode = "";

    for(n = 0; n < str.length; n++)
    {
      if (noEncode.test(str.charAt(n)))
        strEncode += str.charAt(n);
      else
      {
        strCode = str.charCodeAt(n);
        hex1 = hex_chars.charAt(Math.floor(strCode / 16));
        hex2 = hex_chars.charAt(strCode % 16);
        strEncode += "%" + (hex1 + hex2);
      }
    }
    return strEncode;
 }

 // url_decode version 1.0
 function url_decode(str)
 {
   var n, strCode, strDecode = "";

   for (n = 0; n < str.length; n++)
   {
    if (str.charAt(n) == "%")
    {
      strCode = str.charAt(n + 1) + str.charAt(n + 2);
      strDecode += String.fromCharCode(parseInt(strCode, 16));
      n += 2;
    }
    else
      strDecode += str.charAt(n);
   }
   return strDecode;
 }

/**************************************/
/*          OBJETO PARAMETRO          */
/**************************************/
function Parametro(n,v){
	this.nome = n;
	this.valor = v;
}

/**************************************************/
/*          OBJETO COLECAO DE PARAMETROS          */
/**************************************************/
function Parametros_Colecao(){
	this.parametro_colecao = new Array();
}
// Metodo para adicionar na coleção //
Parametros_Colecao.prototype.Adicionar = ParamCol_Adicionar;
function ParamCol_Adicionar(param){
	this.parametro_colecao.push(param);
}
// Metodo para limpar a coleção de parâmetros //
Parametros_Colecao.prototype.Limpar = ParamCol_Limpar;
function ParamCol_Limpar(){
	this.parametro_colecao = new Array();
}
// Metodo que recupera o parametro da posicao informada //
Parametros_Colecao.prototype.getItem = ParamCol_getItem;
function ParamCol_getItem(index){
	return this.parametro_colecao[index];
}
// Metodo que altera o parametro da posicao informada //
Parametros_Colecao.prototype.setItem = ParamCol_setItem;
function ParamCol_setItem(index, parametro){
	this.parametro_colecao[index] = parametro;
}
// Metodo que retorna a quantidade de itens na coleção //
Parametros_Colecao.prototype.length = ParamCol_length;
function ParamCol_length(){
	return this.parametro_colecao.length;
}

/******************************************/
/*          OBJETO XMLHTTPStatus          */
/******************************************/
function XMLHTTPStatus(){
	this.numero="";
	this.mensagem="";
}

/************************************/
/*          OBJETO XMLHTTP          */
/************************************/
function XMLHTTP(){
	this.objeHttp = null;
	this.metodo = "post"
	this.parametros = new Parametros_Colecao();
	this.url = "";
	this.status = new XMLHTTPStatus();
	this.getText = "";
	this.getXml = "";

	if (window.ActiveXObject){
		try{
			this.objeHttp	= new ActiveXObject("Msxml2.XMLHTTP.3.0");
		}catch(e){
			try{
				this.objeHttp	= new ActiveXObject("Microsoft.XMLHTTP");
			}catch(e){
				throw "Não foi possível criar o objeto XMLHTTP";
			}
		}
	}else if(window.XMLHttpRequest){
		try {
			this.objeHttp	= new XMLHttpRequest();
		}catch(e) {
			throw "Não foi possível criar o objeto XMLHTTP";
		}
	}
	//this.onreadystatechange = this.objeHttp.onreadystatechange;
}
// Metodo que envia as informações para a URL defininida na propriedade url //
XMLHTTP.prototype.Enviar = xml_http_send
function xml_http_send(){
	if (this.url == "") throw "A url para envio não foi especificada.";

	if(this.metodo.toUpperCase() == "POST"){
		var urlTmp="",indx=0;

		this.objeHttp.open(this.metodo.toUpperCase(),this.url,false);
		this.objeHttp.setRequestHeader('Content-Type','application/x-www-form-urlencoded');

		for(indx = 0;indx< this.parametros.length();indx++){
			if(indx != 0) urlTmp += "&";
				urlTmp += this.parametros.getItem(indx).nome +"="+ escape(this.parametros.getItem(indx).valor);
		}
		this.objeHttp.send(urlTmp);

	//alert(this.url +'?'+ urlTmp);
	}
	else{
		var urlTmp="",indx=0;
		for(indx = 0;indx< this.parametros.length();indx++){
			urlTmp += (indx == 0)?"?":"&";
			urlTmp += this.parametros.getItem(indx).nome +"="+ escape(this.parametros.getItem(indx).valor);
		}
		this.objeHttp.open(this.metodo.toUpperCase(),this.url + urlTmp, false);
		this.objeHttp.send(null);
	}

	if(this.objeHttp.readyState == 4){
		this.status.numero = this.objeHttp.status;
		this.status.mensagem = this.objeHttp.statusText;
		if(this.objeHttp.status == 200){
			if(window.ActiveXObject){
				var xmlDOM = new ActiveXObject("Msxml2.DOMDocument.3.0");
				xmlDOM.loadXML(this.objeHttp.responseText);
				this.getText = this.objeHttp.responseText;
				this.getXml = xmlDOM;
			}else{
				this.getText = this.objeHttp.responseText;
				this.getXml = this.objeHttp.responseXML;
			}
		}else{
			this.getText = '';
			this.getXml = null;
		}
	}

	this.parametros.Limpar();
}
// Metodo que abre uma PopUp com as informações defininidas na propriedade url //
XMLHTTP.prototype.Abrir = xml_http_open
function xml_http_open(){
	if (this.url == "") throw "A url para envio não foi especificada.";

	var urlTmp="",indx=0;
	for(indx = 0;indx< this.parametros.length();indx++){
		urlTmp += (indx == 0)?"?":"&";
		urlTmp += this.parametros.getItem(indx).nome +"="+ escape(this.parametros.getItem(indx).valor);
	}
	window.open(this.url + urlTmp,'xmlhttp_teste');
}

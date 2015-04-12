/**-----------------------------------------------------------|*
*|  SIPAC - Sistema Integrado de Painel de Controle V 2.0     |*
*|  Descrição: Funções 	                  |*
*|  Criado:     20/03/2009 | Por: Ana Claudia                 |*
*|  Modificado: __/__/____ | Por:                             |*
*|  Pagina: js/funcoes.js                              |*
*|------------------------------------------------------------|*/
jQuery(document).ready(function() {

  //Botão Fechar
  fechar();

  //Abrir novas janelas em popup
  popup();

  //Somente Numeros
 if(jQuery("input.onlyNumbers").val() != undefined || jQuery("input.onlyNumbers").val() != null)
    jQuery("input.onlyNumbers").numeric();

  //Cor da linha selecionada
  formataLista();

  //Selecionar todos os checkboxs
  jQuery("[type=checkbox].Todos").click(function(){
   fct_SelecionaTodos(jQuery("[name=" + this.name + "]"));
  });

  //Ordenar lista
  jQuery('.ordenarLista').click(function(){
   form = jQuery(this).parents('form:first')[0]
   id   = jQuery(this).attr("id").replace("i","");
   fctOrdenarLista(id,form);
  });

  //Checkar
  jQuery('.checkar').click(function(event){
  return checkar(this);
  });

  //Executar rotinas;
  jQuery('.executaRotina').click(function(){
   return executa_rotina(this);
  });

  //Abrir Calendário
  openCalendar();

  //Formatar campo de data
  inputData();

  //Formatar campo valor
  inputValor();


  //Formatar campo telefone
  inputTelefone();


  //Função auto completar
  auto_complete();
});


function inputData()
{
   if( jQuery("input.data").val() != undefined ||  jQuery("input.data").val() != null)
      jQuery("input.data").mask("99/99/9999");

}

 function inputTelefone()
 {
   if( jQuery("input.telefone").val() != undefined || jQuery("input.telefone").val() != null)
      jQuery("input.telefone").mask("(99) 9999-9999");

 }

 function inputValor()
 {
   if(jQuery("input.valor").val() != undefined || jQuery("input.valor").val() != null)
   {
      jQuery("input.valor").priceFormat({
       prefix: '',
       centsSeparator: ',',
       thousandsSeparator: '',
       limit: jQuery(this).attr("maxlength"),
       centsLimit: 2
     });

   }
 }

 function fechar()
 {
  jQuery('.fechar').click(function(){
   jQuery(this).parents("div").fadeOut(500, function(){
     jQuery(this).remove();
   });
  });
 }


function empty(valor)
{
 if(valor == "" || valor == 0 || valor == null || valor == undefined)
  return true;
 else
  return false;

}

/*------------------------------------------------
'					   			 IsEmail                       '
------------------------------------------------*/
function IsEmail(valor)
{

  if(valor.match("@") == null) return false;

  var Indx, Atual, Temp
	var Array = valor.split('@', 3);

	// Se tiver mais ou menos que 1 Arroba ou nao tiver nada antes ou apos o Arroba
	if(Array.length != 2 || Array[0] == '' || Array[1] == '')
		return false;

	Temp = Array[0];
	// Se contiver caracteres especiais antes do Arroba
	for(Indx=0; Indx < Temp.length ;Indx++)
	{
		Atual =  Temp.charAt(Indx);
		//alert(Atual);
  if( (Atual < '0' || Atual > '9') && (Atual < 'A' || Atual > 'Z') && (Atual < 'a' || Atual > 'z') && (Atual != '-' && Atual != '.' && Atual != '_'))
  {
   return false;
  }
  if(Atual == '_')
    return true;
}

	Tmp = Array[1];
	// Se contiver caracteres especiais depois do Arroba
	for(Indx=0;Indx< Temp.length ;Indx++)
		{
		Atual =  Temp.charAt(Indx);
		if( (Atual < '0' || Atual > '9') && (Atual < 'A' || Atual > 'Z') && (Atual < 'a' || Atual > 'z') && Atual != '.' && Atual != '-')
   {
   return false; }
		}

	Temp = Tmp.split('.',4);
	// Se depois do arroba existir menos de 2 ou mais de 3 pontos
	if( Temp.length != 2 && Temp.length != 3 )
		return false;

	// Se depois do arroba existir menos de 2 ou mais de 3 pontos
	if(Temp.length == 2 && (Temp[0] == '' || Temp[1] == ''))
  return false;

	// Se depois do arroba existir menos de 2 ou mais de 3 pontos
	if(Temp.length == 3 && (Temp[0] == '' || Temp[1] == '' || Temp[2] == '') )
	return false;

	return true;
}

/*------------------------------------------------
'					    				IsCPF                      '
------------------------------------------------*/
function IsCPF(CPFcompleto)
{

 	var Indx
	var Soma, Result, Pos
	var DigCPF, Dig1, Dig2
  if(CPFcompleto.length != 11)
   return false;

  CPF       = CPFcompleto.substr(0,9);
  CONTROLE  = CPFcompleto.substr(9,2)
//	Verifica se o CPF esta no tamanho certo
	if( CPF.length != 9 )
	{
    //alert("Número Incorreto de caracteres  do cpf");
  	return false;
	}
//	Verifica se o Controle do CPF esta no tamanho certo
	if( CONTROLE.length != 2 )
	{
	  //alert("Número Incorreto de caracteres  do controle do cpf");
		return false;

  }
//	Calcula o Primeiro Digito do CPF
	Soma = 0
	for(Indx=0, Pos = 10; Indx<9 ;Indx++, Pos--)
		{
		DigCPF = CPF.substr(Indx,1);
		Result = DigCPF * Pos
		Soma = Soma + Result
		}
	Dig1 = Soma % 11;
	if (Dig1 < 2)
		Dig1 = 0;
	else
		Dig1 = 11 - Dig1;

//	Verifica se o Primeiro Digito Informado é Valido
	if( Dig1 != CONTROLE.substr(0,1) )
	{
    //alert("Primeiro digito incorreto.");
  	return false;
  }
//	Calcula o Segundo Digito do CPF
	Soma = 0
	for(Indx=0, Pos = 11; Indx<9 ;Indx++, Pos--)
		{
		DigCPF = CPF.substr(Indx,1);
		Result = DigCPF * Pos
		Soma = Soma + Result
		}
	Soma = Soma + (Dig1 * 2)
	Dig2 = Soma % 11;
	if (Dig2 < 2)
		Dig2 = 0;
	else
		Dig2 = 11 - Dig2;

//	Verifica se o Segundo Digito Informado é Valido
	if( Dig2 != CONTROLE.substr(1,1) )
	{
    //alert("Segundo Digito Incorreto");
    return false;
  }
  else
		return true;
}

/*------------------------------------------------
'					    		IsValidDate                    '
------------------------------------------------*/
function IsValidDate(valorData)
{

	var data = valorData.split('/');
	ano = parseFloat(data[2]);
	mes = parseFloat(data[1]);
	dia = parseFloat(data[0]);

	if(ano.toString().length < 4) return false;
	if(dia>31) return false;
	if(mes>12) return false;
	if(mes==2)
	{
		if(ano%4==0 && (ano%100!=0 || ano%400==0) && dia>29) return false;
		if(ano%4!=0 && (ano%100==0 || ano%400!=0) && dia>28) return false;
	}
	if((mes==4 || mes==6 || mes==9 || mes==11) && dia>30) return false;
	if((mes==1 || mes==3 || mes==5 || mes==7 || mes==8 || mes==10 || mes==12) && dia>31) return false;
	return true;
}


/*------------------------------------------------
'					    fct_SelecionaTodos                 '
------------------------------------------------*/
function fct_SelecionaTodos(e)
{
  var contSels = e.length;
  for(Indx=0;Indx<contSels;Indx++)
  {
      if(e[0].checked == true)
       e[Indx].checked=true;
      else
       e[Indx].checked=false;
  }
}

/*------------------------------------------------
'					  	  fctOrdenarLista                  '
------------------------------------------------*/
function fctOrdenarLista(indx,form)
{

  var campo	= jQuery("[name = ordenacaocampo]");
	var ordem	= jQuery("[name = order]");

  if (campo == null  || ordem == null)
	{
		alert('erro!');
		return;
	}

	if(ordem.val().toUpperCase() == 'ASC')
		ordem.val('Desc');
	else
	 ordem.val('Asc');

	campo.val(indx);
  form.submit();
}

function executa_rotina(obj)
{

  var form = jQuery(obj).parents('form:first')[0];

   var url = jQuery(obj).attr("href");
   var qtde = url.split("?")[1].split("=")[1];
   if(url.match("target"))
   {
     qtde = qtde.split("&")[0].split("=")[0];
    var janela  = url.split("&")[1].split("=")[1];
   }


  
   if((qtde == 1 ||  qtde == 2) && jQuery('input:checked').length < 1)
   {
     alert('Selecione um ' + (qtde == 1 ?' registro' : ' ou mais registros ') + ' para esta ação.');
     return false;
   }

   if(qtde == 2)
   {
      if(url.match("exclui"))
      {
        if(confirm('Você irá excluir os registros selecionados e todos os dados relacionados a ele(s).\nEssa é uma ação sem retorno.\n\nTem certeza que deseja continuar?'))
        {
          form.action = url;
	 	      form.submit();
        }
        return false;
      }
   }


   if(!empty(janela))
    form.target = janela;

   form.action = url;
   form.submit();

    janela = "";
    return false;
}

function checkar(obj)
{
  jQuery(obj).closest("tr").find(":checkbox").attr("checked","checked");
  //return executa_rotina(obj);
}

/*--------------------------------------------|*
*|  Função FormataLista	  				            |*
*|--------------------------------------------|*/
function formataLista()
{

  jQuery(".listaItem").mouseover(function(){

    jQuery(this).toggleClass('listaItem_Over')
    })

   jQuery(".listaItem").mouseout(function(){
    jQuery(this).toggleClass('listaItem_Over')
   })
}

/*--------------------------------------------|*
*|  Função popup									            |*
*|--------------------------------------------|*/
function popup()
{
  jQuery("a.popup").click(function(){
   window.open(this.href);
   return false;
  });
}

//---------------------------------------------------------------------------//
//  Function:       OpenCalendar()                                           //
//---------------------------------------------------------------------------//
function openCalendar(objeAtivo)
{
  jQuery('.calendar').click(function() {
    window.open("lib/calendario.php?object=" +  this.id + "&value=" + jQuery("[name=" +  this.id + "]").val(),'calendario','width=270,height=185');

  });
}

function auto_complete(){

  //Enviar via ajax a palavra digitada
  jQuery(".completar").keyup(function(){


   var text = jQuery.ajax({
    url: "lib/auto_completar.php",
    async: false,
    data: "keyword=" + jQuery(this).val() + "&campo=" + jQuery(this).attr("id")
 }).responseText;

  jQuery("div.found").remove();
  if(!empty(text)){
   jQuery("<div class='found'>" + text + "</div>").insertAfter(jQuery(this));
  }
 }).blur(function(){
  found();
 });
 
 
}

function found(campo,value){
  jQuery('#' + campo).val(value);
  setTimeout("$('div.found').hide();", 200);
}

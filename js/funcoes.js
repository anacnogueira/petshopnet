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

  //Checkar
  jQuery('.checkar').click(function(event){
  return checkar(this);
  });


  //Abrir Calendário
  openCalendar();

  //Máscara para data
  if(jQuery("input.data").val() != undefined || jQuery("input.data").val() != null )
    jQuery("input.data").mask("99/99/9999");

  //Máscara para data
  if(jQuery("input.telefone").val() != undefined)
    jQuery("input.telefone").mask("(99) 9999-9999");

   //Máscara para CEP
  if(jQuery("input.cep").val() != undefined)
    jQuery("input.cep").mask("99999-999");

  //Função Zebra
  jQuery("tr.stripe:even").toggleClass("stripe");

  //Exclusão com confirmação
  conf_excluir();

});

 function fechar()
 {
  jQuery('.fechar').click(function(){
   jQuery(this).parents("div").fadeOut(500, function(){
     jQuery(this).remove();
   });
  });


  jQuery(".envia_form").click(function(){
	 return modificar_form(this);
  });

 }
function modificar_form(obj)
{
  var form = jQuery(obj).parents('form:first')[0];
  var link = jQuery(obj).attr("href");
  form.action = link;
  form.submit();

  return false;
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

function checkar(obj)
{
  jQuery(obj).closest("tr").find(":checkbox").attr("checked","checked");
  //return executa_rotina(obj);
}

/*--------------------------------------------|*
*|  Função FormataLista	  			          |*
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
*|  Função popup					          |*
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


//---------------------------------------------------------------------------//
//  Function:       ultimoDiaMes(mes,ano)                                     //
//---------------------------------------------------------------------------//
function ultimoDiaMes(mes,ano)
{
 if (mes == 1 || mes == 3 || mes == 5 || mes == 7 || mes == 8 || mes == 10 || mes == 12)
    total = 31;
 if (mes == 4 || mes == 6 || mes == 9 || mes == 11)
    total = 30;
 if (id_mes == 2)
 {
	if(ano % 4 == 0 )
	 total = 29;
	else
	  total = 28;
 }
 return total;
}


function formatCurrency(num)
{
  num = num.toString().replace(/\$|\,/g,'');
  if(isNaN(num))
   num = "0";

  sign = (num == (num = Math.abs(num)));
  num = Math.floor(num*100+0.50000000001);
  cents = num%100;
  num = Math.floor(num/100).toString();

  if(cents<10)
   cents = "0" + cents;

  for (var i = 0; i < Math.floor((num.length-(1+i))/3); i++)
   num = num.substring(0,num.length-(4*i+3))+'.'+

  num.substring(num.length-(4*i+3));
  return (((sign)?'':'-') + num + ',' + cents);
}

function conf_excluir()
{
 jQuery("img[alt=Apagar]").click(function() {
   if(!confirm('Tem certeza que deseja excluir o endereço selecionado?'))
   return false;
 });
}

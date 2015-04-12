<?
/*--------------------------------------------------------'
   SIPAC - Sistema Integrado de Painel de Controle V 2.0  '
 	 Criado por Ana Claudia Nogueira                        '
   Criação 19/03/2007                                     '
   Última Modificação: 28/01/2009                         '
   Pagina: lib/funcoes.php                                '
---------------------------------------------------------*/

/*|--------------------------------------------------------------------------------|'
'|                               Função dia_semana                                 |'
'|--------------------------------------------------------------------------------|*/
function dia_semana($number)
{
 $diaSeamana = array("Domingo","Segunda-feira","Terça-Feira","Quarta-feira","Quinta-feira","Sexta-Feira","Sábado");
 return $diaSeamana[$number];
}
/*|--------------------------------------------------------------------------------|'
'|                               Função mesNome                                    |'
'|--------------------------------------------------------------------------------|*/
function mesNome($number)
{
 $mes = array("","Janeiro","Fevereiro","Março","Abril","Maio","Junho",
 "Julho","Agosto","Setembro","Outubro","Novembro","Dezembro");
  return $mes[$number];
}
/*|--------------------------------------------------------------------------------|'
'|                               Função data_hoje                                  |'
'|--------------------------------------------------------------------------------|*/
function data_hoje()
{
 $semana = dia_semana(date('w'));
 $dia = date('d');
 $mes = mesNome(date('n'));
 $ano = date('Y');
 echo $semana.", ". $dia ." de ". $mes ." de ". $ano;
}

/*|--------------------------------------------------------------------------------|*
*|          									subArray_MontarLista																 |*
*|--------------------------------------------------------------------------------|*/
function fct_Array_MontarLista($arraValores, $indxSel)
{
  if(!is_array($arraValores)) exit;
	//if(!is_numeric($IndxSel) or $IndxSel == "") $IndxSel = 0;

	foreach($arraValores as $indx => $valor)
  {
		if($indx == $indxSel)
			$list .= "<option value='". $indx ."' selected>". $valor ."</option>\r";
		else
		 $list .= "<option value='". $indx ."'>". $valor ."</option>\r";
  }
 return $list;
}
/*|--------------------------------------------------------------------------------|'
*|          									subArray2_MontarLista                                |*
'----------------------------------------------------------------------------------*/
function fct_Array2_MontarLista($arraValores,$sel){

 If(!is_array($arraValores)) exit;
	If(!is_numeric($sel) or $sel == "") $indxSel = 0;


	for($indx = 0;$indx < count($arraValores);$indx+=2){
		if($arraValores[$indx] == $sel)
			$list .= "<option value='". $arraValores[$indx] ."' selected>". $arraValores[$indx+1] ."</option>\r";
		else
			$list .= "<option value='". $arraValores[$indx] ."'>". $arraValores[$indx+1] ."</option>\r";
 }
 return $list;
}

/*|--------------------------------------------------------------------------------|'
*|          									subArray2_MontarLista                                |*
'----------------------------------------------------------------------------------*/
function fct_array_foreach($arraValores,$sel){

 if(!is_array($arraValores)) exit;
 foreach($arraValores as $key=>$valor)
  $list .= "<option value='". $key ."'".($sel==$key?"selected='selected'":'').">". $valor ."</option>\r";

  return $list;
}


/*|--------------------------------------------------------------------------------|'
'|                               Função Montar Lista                               |'
'|--------------------------------------------------------------------------------|*/
function fct_MontarLista($SQL,$sel,$name)
{
 global $conn;
 $result = $conn->sql($SQL);
 $option = "<select name='$name'>\n";
 $option .= "<option value='0'>selecione...</option>\n";
 while($linha = mysql_fetch_array($result))
 {
   $option .="<option value='".$linha[0]."'";
   if(!empty($sel) and $linha[0]==$sel)
     $option .=" selected='selected'";
   $option .=">".$linha[1]."</option>\n";
   }
   $option .= "</select>\n";
   return $option;
 }
/*|--------------------------------------------------------------------------------|'
'|                 Função Montar Lista2 - Sem select                               |'
'|--------------------------------------------------------------------------------|*/
function fct_MontarLista2($SQL,$sel)
{
 global $conn;
 $result = $conn->sql($SQL);
 $option .= "<option value='0'>selecione...</option>\n";
 while($linha = mysql_fetch_array($result))
 {
   $option .="<option value='".$linha[0]."'";
   if(!empty($sel) and $linha[0] == $sel)
     $option .=" selected ";
   $option .=">".$linha[1]."</option>\n";
   }

   return $option;
 }
 
/*|--------------------------------------------------------------------------------|'
'|                               Função right				                               |'
'|--------------------------------------------------------------------------------|*/
function right($strString,$num)
{
   $strString = strrev($strString);
   $strString = substr($strString,0,$num);
   $strString = strrev($strString);
    return  $strString;
}

/*|--------------------------------------------------------------------------------|'
'|                               Função left				                               |'
'|--------------------------------------------------------------------------------|*/
function left($strString,$num)
{
 $strString = substr($strString,0,$num);
 return  $strString;
}

/*--------------------------------------------------------------------------------'
'														Envia E-mail - Template                               '
'  @to = destinatario                                                             '
' @from = remetente                                                               '
'  @cc = com cópia                                                                '
'  @bcc = com cópia oculta                                                        '
'  @subject = Assunto                                                             '
'  @msg = Mensagem do corpo do e-mail                                             '
'  @attach = anexo                                                                '
'--------------------------------------------------------------------------------*/
function fct_EnvioMail($to,$from,$cc,$bcc,$subject,$msg,$attach = '')
{
 require_once("lib/smtp.class.php");

    /* Configuração da classe.smtp.php */
  $host = "smtp.petshopnet.com.br"; /*host do servidor SMTP */
  $smtp = new Smtp($host);
  $smtp->user = "no-reply@petshopnet.com.br"; /*usuario do servidor SMTP */
  $smtp->pass = "rfb78fab78"; /* senha do usuario do servidor SMTP*/
  $smtp->debug =true; /* ativar a autenticação SMTP*/

 // Inicio Anexo
  //Anexos
  if(!empty($attach))
	{
    $arraAttach = explode(";",$attach);
    $msg_top = "--Message-Boundary\n";
    for($i = 0;$i<count($arraAttach);$i++)
    {
     if (!empty($arraAttach[$i]) and file_exists($arraAttach[$i]))
     {
      $attach_name = basename ($arraAttach[$i]);
      $attach_size = filesize($arraAttach[$i]);
      $attach_type = mime_type($attach_name);

      $file = fopen($arraAttach[$i], "r");
      $contents = fread($file, $attach_size);
      $encoded_attach = chunk_split(base64_encode($contents));
      fclose($file);

      $msg_attach .= "\n\n--Message-Boundary\r\n";
      $msg_attach .= "Content-type: $attach_type; name=\"$attach_name\"\r\n";
      $msg_attach .= "Content-Transfer-Encoding: BASE64\r\n";
      $msg_attach .= "Content-disposition: attachment; filename=\"$attach_name\"\r\n";
      $msg_attach .= "$encoded_attach\n";
     }
     else
     {
       echo "O arquivo ".$arraAttach[$i]." não existe";
       exit();
     }
    }
    $msg_attach .= "--Message-Boundary--\r\n";


  }
    //$headers .= "X-Mailer: Petshopnet\r\n";
    //$headers .= "MIME-version: 1.0\r\n";
  	$headers .= "Content-type: multipart/mixed; ";
  	$headers .= "boundary=\"Message-Boundary\"\r\n";
    $headers .= "\n\n--Message-Boundary\r\n";
	  $headers .= "Content-type: text/html; charset=iso-8859-1";
    //$headers .= "Content-transfer-encoding: 8bits\r\n";
 // Fim Anexo

  $msg_body = "
  <!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
    <html xmlns='http://www.w3.org/1999/xhtml'>
      <head>
        <title></title>
          <meta http-equiv='Content-Type' content='text/html; charset=iso-8859-1' />
          <meta http-equiv='Content-Language' content='pt-br' />
          <style type='text/css'>
            /* -------------- common -------------*/
            body {
		          margin: 0px;
		          padding: 0px;
		          color: #000;
		          background: #fff;
	           }
	           img a, img{
	            border: none;
	            text-decoration: none;
	           }
             div#corpoMsg{
              margin: 10px auto;
              background: #fff;
              padding: 10px;
              text-align: justify;
              width:600px;
              min-height:100%;
             }
             h2{
              font-size: 16px;
              color:#44A51C;
             }
             h3{
              font-size: 15px;
              color:#0033cc;
              font-weight:bold;
             }
             .texto{ font-weight: bold; }
             img{ margin: 10px; }
          </style>
        </head>
        <body>
          <div id='corpoMsg'>
            <div><img src='http://www.petshopnet.com.br/banco_imagens/logo.gif' alt='' /></div>
            ".$msg."
          </div>
        </body>
       </html>";
       if(!empty($msg_attach))
        $msg_body .= $msg_attach;
  return $smtp->Send($to,$from,$cc,$bcc,$subject,$msg_body,$headers);
}

/*--------------------------------------------------------------------------------'
														Envia E-mail - Template Locaweb                       '
  @to = destinatario
  @from = remetente
  @cc = com cópia
  @bcc = com cópia oculta
  @subject = Assunto
  @msg = Mensagem do corpo do e-mail
  @attach = anexo
'--------------------------------------------------------------------------------*/
function fct_EnvioMail_locaweb($to,$from,$cc,$bcc,$subject,$msg,$attach = '') {
 // O remetente deve ser um e-mail do seu domínio conforme determina a RFC 822.
// O return-path deve ser ser o mesmo e-mail do remetente.
/*$headers = "MIME-Version: 1.1\r\n";
$headers .= "Content-type: text/html; charset=utf-8\r\n";
$headers .= "From: $from\r\n"; // remetente
if(!empty($cc))
 $headers .= "Cc: $cc\r\n"; // com cópia
if(!empty($bcc))
 $headers .= "Bcc: $bcc\r\n"; // remetente
$headers .= "Return-Path: $from\r\n"; // return-path

$msg_body = "
  <!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
    <html xmlns='http://www.w3.org/1999/xhtml'>
      <head>
        <title></title>
          <meta http-equiv='Content-Type' content='text/html; charset=iso-8859-1' />
          <meta http-equiv='Content-Language' content='pt-br' />
          <style type='text/css'>
            / -------------- common -------------*/
            body {
		          margin: 0px;
		          padding: 0px;
		          color: #000;
		          background: #fff;
	           }
	           img a, img{
	            border: none;
	            text-decoration: none;
	           }
             div#corpoMsg{
              margin: 10px auto;
              background: #fff;
              padding: 10px;
              text-align: justify;
              width:600px;
              min-height:100%;
             }
             h2{
              font-size: 16px;
              color:#44A51C;
             }
             h3{
              font-size: 15px;
              color:#0033cc;
              font-weight:bold;
             }
             .texto{ font-weight: bold; }
             img{ margin: 10px; }
          </style>
        </head>
        <body>
          <div id='corpoMsg'>
            <div><img src='http://www.petshopnet.com.br/banco_imagens/logo.gif' alt='' /></div>
            ".$msg."
          </div>
        </body>
       </html>";

$envio = mail($to, $subject, $msg_body, $headers);

 return $envio;  */


}

/*--------------------------------------------------------------------------------'
													Gera Password Aleatório                                 '
'--------------------------------------------------------------------------------*/
function gera_passwd()
{
  $sConso = 'bcdfghjklmnpqrstvwxyzbcdfghjklmnpqrstvwxyz';
  $sVogal = 'aeiou';
  $sNum = '123456789';
  $passwd = '';

  $y = strlen($sConso)-1; //conta o nº de caracteres da variável $sConso
  $z = strlen($sVogal)-1; //conta o nº de caracteres da variável $sVogal
  $r = strlen($sNum)-1; //conta o nº de caracteres da variável $sNum

  for($x=0;$x<=2;$x++)
  {
    $rand = rand(0,$y); //Funçao rand() - gera um valor randômico
    $rand1 = rand(0,$z);
    $rand2 = rand(0,$r);
    $str = substr($sConso,$rand,1); // substr() - retorna parte de uma string
    $str1 = substr($sVogal,$rand1,1);
    $str2 = substr($sNum,$rand2,1);
    $passwd .= $str.$str1.$str2;
  }
  return $passwd;
}

/*--------------------------------------------------------------------------------'
'|                               Função createLog				                         |'
'| Tipos de Eventos:                                                             |'
'| 1 - Login                                                                     |'
'| 2 - Cadastro                                                                  |'
'| 3 - Alteração                                                                 |'
'| 4 - Alteração  de Autorização                                                 |'
'| 5 - Exclusão                                                                  |'
'|------------------------------------------------------------------------------|*/
function createLog($submodulo_pagina,$rotina_pagina,$tipo_event,$mensagem_log)
{
 //1. Encontrar o nome do módulo da página e tipo de event
	if(empty($submodulo_pagina) and empty($rotina_pagina))
	{
	 $modulos_id 		= 0;
	 $submodulos_id = 0;
	 $users_id      = 0;
	}
	else
	{
		$SQL = "SELECT
            submodulos.submodulos_id,
            modulos.modulos_id,
            rotinas_id,
            rotinas_nome
          FROM
            submodulos
          INNER JOIN modulos
          ON submodulos.modulos_id = modulos.modulos_id
          LEFT JOIN rotinas
          ON rotinas.submodulos_id = submodulos.submodulos_id
          WHERE ";
          if($rotina_pagina != '')
            $SQL .=  " rotinas_pagina ='".$rotina_pagina."' ";
          else
            $SQL .= " submodulos_pagina='".$submodulo_pagina."'";
				//echo $SQL."<br>";
	 $result = mysql_query($SQL) or die($SQL."<br>".mysql_error());
	 if(mysql_num_rows($result)>0)
	 {
	  $tipo_event 		= mysql_result($result,0,"rotinas_nome");
	  $modulos_id 		= mysql_result($result,0,"modulos_id");
	 	$submodulos_id 	= mysql_result($result,0,"submodulos_id");

	 }
	}
	if(isset($_SESSION[EMPRESA]["codUser"]))
	{
  	$users_id = $_SESSION[EMPRESA]["codUser"];
	}
	$data = date('Y-m-d');
	$hora = date('H:i:s');
	$users_ip = $_SERVER['REMOTE_ADDR'];
	//2. Cadsastrar o LOG
	$SQL = "INSERT INTO logs_historico (
	users_id,
	users_ip,
	logs_historico_data,
	logs_historico_hora,
	submodulos_id,
	logs_historico_operacao,
	logs_historico_mensagem
	) VALUES(
	'$users_id',
	'$users_ip',
	'$data',
	'$hora',
	'$submodulos_id',
	'$tipo_event',
	'$mensagem_log'
	)";
	$result = mysql_query($SQL) or die($SQL."<br>".mysql_error());
}

/*--------------------------------------------------------------------------------'
   													Função conversora de Data															'
   1 =  AAAA-MM-DD para DD/MM/AAAA                   															'
   2 =  DD/MM/AAAA para AAAA-MM-DD                  														  '
   3 = DD/MM/AAAA 00:00:00 para AAAA-MM-DD 00:00:00  														  '
   4 = AAAA-MM-DD 00:00:00 para DD/MM/AAAA 00:00:00  															'
---------------------------------------------------------------------------------*/
function fct_conversorData($Entradata, $Type){
   $Entradata = str_replace("'","",$Entradata);
   switch($Type){
     case 1:
      $conv1 = explode("-",$Entradata);
      $saidata = implode("/",array_reverse($conv1));
      break;
     case 2:
      $conv1 = explode("/",$Entradata);
      $saidata = implode("-",array_reverse($conv1));
      break;
     case 3:
      $convHora = explode(" ",$Entradata);
      $ConvData = explode("/",$convHora[0]);
      $saidata = implode("-",array_reverse($ConvData))." ".$convHora[1];
      break;
     case 4:
      $convHora = explode(" ",$Entradata);
      $ConvData = explode("-",$convHora[0]);
      $saidata = implode("/",array_reverse($ConvData))." ".$convHora[1];
      break;
    }
 return $saidata;
}

function categorias($page, $categorias_id = 0, $quant = 0 )
{
    global $conn;
    $SQL = sprintf( "SELECT categorias_id, categorias_descricao FROM categorias WHERE parent_id = '%d' order by categorias_id", $categorias_id );
    $result = $conn->sql($SQL);
     //echo $SQL;
    $quant_aux = $quant + 1;
    while ($linha = mysql_fetch_array($result))
    {

        $categorias_id = $linha[0];
        $categorias_descricao = $linha[1];
        if($quant == 0)
        {
					$strong_ini =  "<strong>";
					$strong_fin =  "</strong>";
					echo "<li>";
				}
				else
				{
          $strong_ini =  "";
					$strong_fin =  "";
					echo  str_repeat("<ul><li>&nbsp;&nbsp;",$quant);
				}
        echo $strong_ini."<a href='".$page."?categorias_id=".$categorias_id."&amp;cat=".urlencode($categorias_descricao)."'>".$categorias_descricao."</a>".$strong_fin;

        if($quant == 0)
          echo "</li>\n";
        else
          echo  str_repeat("</li></ul>\n",$quant);
        categorias($page, $categorias_id, $quant_aux );
    }
}

function breadCrumb($cat_id)
{
  global $conn;
  $cat_id = !empty( $cat_id ) ? abs( intval( $cat_id ) ) : '0';

  #Array que conterá o breadcrumb
  $breadcrumb = array();
  #Query SQL para resgatar os dados da categoria passada pela query string
  $SQL = 'SELECT categorias_id, categorias_descricao FROM categorias WHERE categorias_id='.$cat_id;
  #Executa a query SQL
  $result = $conn->sql($SQL);
  #Se a categoria passada não existir
  if ( mysql_num_rows( $result ) == 0 )
  {
    #Assume que a categoria será a padrão (default)
    $cat_id = 0;
    $breadcrumb[] = array( 'categorias_descricao' => 'Raiz', 'categorias_id' => $cat_id );
  }
  #Se não é a categoria padrão
  if ( $cat_id != 0 )
  {
    $campos = mysql_fetch_assoc( $result );
    do
    {
       $breadcrumb[] = $campos;
       #Query SQL para resgatar os dados da categoria pai
       $SQL = 'SELECT categorias_id, categorias_descricao FROM categorias WHERE categorias_id= (SELECT parent_id from categorias where categorias_id = '.$campos['categorias_id'].')';
       #Executa a Query SQL
     $result = $conn->sql( $SQL );
     #Resgata os dados da categoria pai
     $campos = mysql_fetch_assoc( $result );
    } while ( mysql_num_rows( $result ) != 0 );
  }
  #Inverte o array breadcrumb
  $breadcrumb = array_reverse( $breadcrumb );
  #Iniciliza a variável de saída
  $saida = '';
	$saida = "<a href='index.php'>Home</a> &raquo; ";
	foreach( $breadcrumb as $chave => $dados )
  {
    #Monta a string de saída
    $saida .= "<a href='produtos_categorias.php?categorias_id=".$dados["categorias_id"]."&amp;cat=".urlencode($dados["categorias_descricao"])."'>".htmlspecialchars($dados['categorias_descricao'])."</a> &raquo; ";
  }
  #Remove de $saida o elemento separados
  $saida = substr( $saida, 0, -8 );
  #Exibe a saida
  return $saida;
}

function Estados()
{
 $arraEstados = array("0","Selecione","AC","Acre","AL","Alagoas","AM","Amazonas","AP","Amapá","BA","Bahia","CE","Ceará",
 "DF","Distrito Federal","ES","Espirito Santo","GO","Goiás","MA","Maranhão","MG","Minas Gerais","MG","Mato Grosso do Sul",
 "MT","Mato Grosso","PA","Pará","PB","Paraíba","PE","Pernambuco","PI","Piauí","PR","Paraná","RJ","Rio de Janeiro",
 "RN","Rio Grande Norte","RO","Rondônia","RR","Roraima","RS","Rio Grande do Sul","SC","Santa Catarina","SE","Sergipe","SP","São Paulo","TO","Tocantins");

 return $arraEstados;
}

function estados2()
{
 $arraEstados = array("AC"=>"Acre","AL"=>"Alagoas","AM"=>"Amazonas","AP"=>"Amapá",
 "BA"=>"Bahia","CE"=>"Ceará","DF"=>"Distrito Federal","ES"=>"Espirito Santo","GO"=>"Goiás",
 "MA"=>"Maranhão","MG"=>"Minas Gerais","MG"=>"Mato Grosso do Sul","MT"=>"Mato Grosso","PA"=>"Pará",
 "PB"=>"Paraíba","PE"=>"Pernambuco","PI"=>"Piauí","PR"=>"Paraná","RJ"=>"Rio de Janeiro",
 "RN"=>"Rio Grande Norte","RO"=>"Rondônia","RR"=>"Roraima","RS"=>"Rio Grande do Sul",
 "SC"=>"Santa Catarina","SP"=>"São Paulo","SE"=>"Sergipe","TO"=>"Tocantins");
  asort($arraEstados);
 array_unshift($arraEstados,"Selecione");
 return $arraEstados;
}

function meses_anos()
{
 $arraMes = array("01"=>"Janeiro","02"=>"Fevereiro","03"=>"Março","04"=>"Abril","05"=>"Maio",
 "06"=>"Junho","07"=>"Julho","08"=>"Agosto","09"=>"Setembro","10"=>"Outubro","11"=>"Novembro",
 "12"=>"Dezembro");

 return $arraMes;
}
 function retira_acentos($string)
 {
  $string = ereg_replace("[^a-zA-Z0-9_.]", "",
  strtr($string, "áàãâéêíóôõúüçÁÀÃÂÉÊÍÓÔÕÚÜÇ ",
  "aaaaeeiooouucAAAAEEIOOOUUC_"));

 return $string;
 }
function saudacaoHorario()
{
 $hora = date('H');
 
 if($hora >=6  and $hora < 12)
  $saudacao = "Bom dia";
 else if($hora >= 12 and $hora < 18)
  $saudacao = "Boa tarde";
 else if($hora <= 5 or $hora >= 18)
  $saudacao = "Boa noite";
  
  return $saudacao;
}
function tep_not_null($value) {
    if (is_array($value)) {
      if (sizeof($value) > 0) {
        return true;
      } else {
        return false;
      }
    } else {
      if ( (is_string($value) || is_int($value)) && ($value != '') && ($value != 'NULL') && (strlen(trim($value)) > 0)) {
        return true;
      } else {
        return false;
      }
    }
  }

function progressoCompra($pagina)
{
 $arraPagina = array("meu_carrinho.php","login.php","fechar_pedido.php","fechar_pedido_pagto.php","fechar_pedido_final.php");
 $arraLink    = array("Carrinho","Identificacação","Endereço","Pagamento","Compra Concluída");
 $barra = "<div class='progressoCompra'><ol>";
 for($i = 0;$i < count($arraLink);$i++)
 {
		if(strpos($pagina,$arraPagina[$i]) !== false)
     $sel = "_sel";
    else
      $sel ="";

    $barra .= "<li><img src='banco_imagens/bar_prog_0".($i+1).$sel.".gif' alt='' /> ".$arraLink[$i]."</li>";

 }
 $barra .= "</ol></div>";

 return $barra;
}

 function data_vencimento($data)
{
 if(!empty($data))
 {
 $data_hoje = mktime(0,0,0,date('m'),date('d'),date('Y'));

 $data = explode("/",$data);
 $data = mktime(0,0,0,$data[1],$data[0],$data[2]);

 if($data >= $data_hoje)
  return true;
 else
  return false;
 }
 else
  return false;
}

function adicionaDias($date,$days)
{
     $thisday =  substr ( $date, 0, 2 );
     $thismonth = substr ( $date, 3, 2 );
     $thisyear = substr ( $date, 6, 4 );
     $nextdate = mktime ( 0, 0, 0, $thismonth, $thisday + $days, $thisyear );
     return strftime("%d/%m/%Y", $nextdate);
}

function media($media)
 {

  $arraMedia = explode(".",$media);

	 if($arraMedia[1] < 5)
	  $media = floor($media);
	 elseif($arraMedia[1] > 5)
	  $media = ceil($media);

	  return number_format($media,1,",",".");
 }
 
 function parcelamento($valor)
  {
   $valor = number_format($valor,2);

	 if($valor < 20)
    return false;
   else
   {
    $parcela = "<p><strong>PARCELAMENTO</strong></p>";

    if(strlen($valor) == 5)
     $qtde = left($valor,1);
    else if(strlen($valor) >= 6 and $valor < 120)
     $qtde = left($valor,2);
    else if(strlen($valor) >= 6 and $valor >= 120)
     $qtde = 12;
     //se 2x = acrescentar 1,47% de juros(0,0147)
     if($qtde == 2)
     {
      $total  = (($valor/$qtde)+ (($valor/$qtde) * 0.0147));
      $cor="#ffffff";
      $parcela .= "<div style='background:$cor'><input name='parcela' value='".$qtde."' type='radio' class='noBorder' onclick='calc_total(".number_format($qtde * $total,"2").",this.form)' /> ".$qtde."x R$ ".number_format($total,"2",",","")." com juros = ".number_format($qtde * $total,"2",",","")."</div>";
    }
    else
    {
     $j = 0;
     for($i = 2;$i<=$qtde;$i++)
     {
      if($i % 2 == 0)
         $cor = "#ffffff";
		   else
		     $cor = "#F7F7F7";
      $parcela .= "<div style='background:$cor'><input name='parcela' value='".$i."' type='radio' class='noBorder' onclick='calc_total(".number_format($valor,"2").",this.form)' /> ".$i."x R$ ".number_format(($valor/$i),"2",",","")." sem juros </div>";
      $j++;
     }
    }
   }

   return $parcela;
  }
/*---------------------------------------------------------------------------------|'
'|	                          mime_type (descobre o tipo do arquivo)               |'
'|	Parâmetros:                                                                    |'
'|	$file = nome do arquivo                                                        |'
'----------------------------------------------------------------------------------|*/
 function mime_type( $file )
{
  $filetype = substr(strrchr( $file, '.' ), 1 );

   $mimetypes = array(
     "ez" => "application/andrew-inset",
     "atom" => "application/atom+xml",
     "hqx" => "application/mac-binhex40",
     "cpt" => "application/mac-compactpro",
     "doc" => "application/msword",
     "lha" => "application/octet-stream",
     "lzh" => "application/octet-stream",
     "exe" => "application/octet-stream",
     "so" => "application/octet-stream",
     "dms" => "application/octet-stream",
     "class" => "application/octet-stream",
     "bin" => "application/octet-stream",
     "dll" => "application/octet-stream",
     "oda" => "application/oda",
     "pdf" => "application/pdf",
     "ps" => "application/postscript",
     "eps" => "application/postscript",
     "ai" => "application/postscript",
     "smi" => "application/smil",
     "smil" => "application/smil",
     "mif" => "application/vnd.mif",
     "xls" => "application/vnd.ms-excel",
     "ppt" => "application/vnd.ms-powerpoint",
     "wbxml" => "application/vnd.wap.wbxml",
     "wmlc" => "application/vnd.wap.wmlc",
     "wmlsc" => "application/vnd.wap.wmlscriptc",
     "bcpio" => "application/x-bcpio",
     "vcd" => "application/x-cdlink",
     "pgn" => "application/x-chess-pgn",
     "cpio" => "application/x-cpio",
     "csh" => "application/x-csh",
     "dir" => "application/x-director",
     "dxr" => "application/x-director",
     "dcr" => "application/x-director",
     "dvi" => "application/x-dvi",
     "spl" => "application/x-futuresplash",
     "gtar" => "application/x-gtar",
     "gz" => "application/x-gzip",
     "hdf" => "application/x-hdf",
     "php" => "application/x-httpd-php",
     "phps" => "application/x-httpd-php-source",
     "js" => "application/x-javascript",
     "skm" => "application/x-koan",
     "skt" => "application/x-koan",
     "skp" => "application/x-koan",
     "skd" => "application/x-koan",
     "latex" => "application/x-latex",
     "cdf" => "application/x-netcdf",
     "nc" => "application/x-netcdf",
     "sh" => "application/x-sh",
     "shar" => "application/x-shar",
     "swf" => "application/x-shockwave-flash",
     "sit" => "application/x-stuffit",
     "sv4cpio" => "application/x-sv4cpio",
     "sv4crc" => "application/x-sv4crc",
     "tar" => "application/x-tar",
     "tcl" => "application/x-tcl",
     "tex" => "application/x-tex",
     "texi" => "application/x-texinfo",
     "texinfo" => "application/x-texinfo",
     "roff" => "application/x-troff",
     "t" => "application/x-troff",
     "tr" => "application/x-troff",
     "man" => "application/x-troff-man",
     "me" => "application/x-troff-me",
     "ms" => "application/x-troff-ms",
     "ustar" => "application/x-ustar",
     "src" => "application/x-wais-source",
     "xht" => "application/xhtml+xml",
     "xhtml" => "application/xhtml+xml",
     "zip" => "application/zip",
     "au" => "audio/basic",
     "snd" => "audio/basic",
     "midi" => "audio/midi",
     "kar" => "audio/midi",
     "mid" => "audio/midi",
     "mp3" => "audio/mpeg",
     "mp2" => "audio/mpeg",
     "mpga" => "audio/mpeg",
     "aifc" => "audio/x-aiff",
     "aif" => "audio/x-aiff",
     "aiff" => "audio/x-aiff",
     "m3u" => "audio/x-mpegurl",
     "rm" => "audio/x-pn-realaudio",
     "ram" => "audio/x-pn-realaudio",
     "rpm" => "audio/x-pn-realaudio-plugin",
     "ra" => "audio/x-realaudio",
     "wav" => "audio/x-wav",
     "pdb" => "chemical/x-pdb",
     "xyz" => "chemical/x-xyz",
     "bmp" => "image/bmp",
     "gif" => "image/gif",
     "ief" => "image/ief",
     "jpe" => "image/jpeg",
     "jpeg" => "image/jpeg",
     "jpg" => "image/jpeg",
     "png" => "image/png",
     "tif" => "image/tiff",
     "tiff" => "image/tiff",
     "djvu" => "image/vnd.djvu",
     "djv" => "image/vnd.djvu",
     "wbmp" => "image/vnd.wap.wbmp",
     "ras" => "image/x-cmu-raster",
     "pnm" => "image/x-portable-anymap",
     "pbm" => "image/x-portable-bitmap",
     "pgm" => "image/x-portable-graymap",
     "ppm" => "image/x-portable-pixmap",
     "rgb" => "image/x-rgb",
     "xbm" => "image/x-xbitmap",
     "xpm" => "image/x-xpixmap",
     "xwd" => "image/x-xwindowdump",
     "igs" => "model/iges",
     "iges" => "model/iges",
     "mesh" => "model/mesh",
     "silo" => "model/mesh",
     "msh" => "model/mesh",
     "vrml" => "model/vrml",
     "wrl" => "model/vrml",
     "css" => "text/css",
     "htm" => "text/html",
     "html" => "text/html",
     "asc" => "text/plain",
     "txt" => "text/plain",
     "rtx" => "text/richtext",
     "rtf" => "text/rtf",
     "sgml" => "text/sgml",
     "sgm" => "text/sgml",
     "tsv" => "text/tab-separated-values",
     "wml" => "text/vnd.wap.wml",
     "wmls" => "text/vnd.wap.wmlscript",
     "etx" => "text/x-setext",
     "xml" => "text/xml",
     "xsl" => "text/xml",
     "mpe" => "video/mpeg",
     "mpeg" => "video/mpeg",
     "mpg" => "video/mpeg",
     "mov" => "video/quicktime",
     "qt" => "video/quicktime",
     "mxu" => "video/vnd.mpegurl",
     "avi" => "video/x-msvideo",
     "movie" => "video/x-sgi-movie",
     "ice" => "x-conference/x-cooltalk"
   );

 return implode( '', array_keys( array_flip( $mimetypes ), $filetype ));
}

function lista_produtos($where,$order,$limit,$paginacao,$colunas = 3)
{
   require_once("class.paginacao.php");
	 global $conn,$pageAtual;

   $sql = "SELECT
   MIN(prod.produtos_codigo) as produtos_codigo,
   produtos_nome, produtos_preco,
   promocoes_preco, data_fin,  promo.promocoes_status,
   c.categorias_id, categorias_descricao,
   (SELECT parent_id FROM categorias WHERE categorias.categorias_id = pc.categorias_id) AS parent_id,
   (SELECT produtos_imagem FROM produtos_imagens pi WHERE pi.produtos_codigo = prod.produtos_codigo ORDER BY produtos_imagem LIMIT 1) produtos_imagem
   FROM produtos prod
   LEFT JOIN promocoes promo  ON promo.produtos_codigo = prod.produtos_codigo
   INNER JOIN produtos_categoria pc  ON pc.produtos_codigo = prod.produtos_codigo
   INNER JOIN categorias c ON c.categorias_id = pc.categorias_id
   WHERE 1=1 AND (produtos_status = 'S' AND (produtos_data_disponivel <= NOW() OR produtos_data_disponivel IS NULL)) $where
   GROUP BY prod.produtos_codigo $order $limit";
   $result = $conn->sql($sql);
   $recordCount = mysql_num_rows($result);
   //echo $sql;
   
  if($paginacao == 'S') {
     $mult_pag = new Mult_Pag();
     $mult_pag->num_pesq_pag = 10; //Produtos  por página
     $result = $mult_pag->Executar($sql, "otimizada", "mysql");
    $reg_pag = mysql_num_rows($result);
  } 

 else
   $reg_pag = $recordCount;

 if($recordCount >0 and $reg_pag > 0)
 {
  $x = 1;
  for ($indx = 0; $indx < $reg_pag; $indx++)
  {
     $produto = mysql_fetch_object($result);
     if(!empty($produto->produtos_imagem) && file_exists(DIR_PRODUTOS.$produto->produtos_imagem)){
        $produtos_imagem = $produto->produtos_imagem;
        $name            = substr($produto->produtos_imagem,0,strlen($produto->produtos_imagem)-4);
        $ext             = substr($produto->produtos_imagem,-4);
        $thumb           = $name.".thumb".$ext;

        $image = DIR_PRODUTOS.$name.".thumb".$ext;
        $title = $produto->produtos_nome;

     }
     else{
      $image = DIR_IMAGENS."no_image.jpg";
      $title = "Imagem não disponível";
      $style = "style=width:75px";
     }


	if($produto->promocoes_status== "S" and !empty($produto->promocoes_preco) and (empty($produto->data_fin)  or data_vencimento(fct_conversorData($produto->data_fin,1))))
    {
      $produtos_preco  = "<span class='de'>De:  R$" .  number_format($produto->produtos_preco,"2",",",".") ."</span><br />";
      $promocoes_preco = "<span class='por'>Por:  R$". number_format($produto->promocoes_preco,"2",",",".")."</span>";
    }
    else
    {
      $produtos_preco = "<span class='por'> R$ ". number_format($produto->produtos_preco,"2",",",".") ."</span>";
	   $promocoes_preco = "";
    }

    $link = "produto_info.php?produtos_codigo=".$produto->produtos_codigo."&amp;parent_id=".$produto->parent_id."&amp;categorias_id=".$produto->categorias_id."&amp;cat=".urlencode($produto->categorias_descricao);

    $listaProdutos .= "<div class='box' ".($x % $colunas == 0?"style='margin-right:0px;'":"").">\n";
    $listaProdutos .= "<div class='img'><a href='".$link."'><img src='".$image."'  alt='".$title."' title='".$title."' ".$style." /></a></div>\n";
    $listaProdutos .= "<p class='nome'><a href='".$link."'>".$produto->produtos_nome."</a></p>\n";
    $listaProdutos .= "$produtos_preco\n";
    $listaProdutos .= "$promocoes_preco\n<br />";
    $listaProdutos .= "<a href='meu_carrinho.php?acao=adicionar&amp;produtos_codigo=".$produto->produtos_codigo."' class='adicionar'>Adicionar ao carrinho</a>\n";
    $listaProdutos .= "</div>\n";
    $x++;
  }

  if($paginacao == 'S'){

      $listaPaginas = "<div class='paginacao'>\n";
      $listaPaginas .= "   <ul>\n";
      $todos_links = $mult_pag->Construir_Links("todos", "sim");
       for ($n = 0; $n < count($todos_links); $n++)
        $listaPaginas .= "<li>".$todos_links[$n] . "</li>\n";

      $listaPaginas .="  </ul>\n";
      $listaPaginas .=" </div>\n";
  }
 }
  return $listaProdutos . $listaPaginas;
}

/*---------------------------------------------------------------------------------|'
'|	                          antiSQLInjection                                     |'
'|	Parâmetros:   void                                                             |'
'----------------------------------------------------------------------------------|*/
function antiSQLInjection()
{
  $arraStringReplace = array("select","replace","insert","delete","drop","update","XP_");
  list($nome_arq, $voided) = @explode("?", $_SERVER['REQUEST_URI']);
  if ($_SERVER['REQUEST_METHOD'] == "GET")
    $cgi = $_GET;
  else if ($_SERVER['REQUEST_METHOD'] == "POST")
    $cgi = $_POST;
    $type = $_SERVER['REQUEST_METHOD'];
  reset($cgi); // posiciona no inicio do array
  while (list($chave, $valor) = each($cgi))
  {

    if(!is_array($valor))
    {
      $valor = htmlentities(str_ireplace($arraStringReplace,'',trim($valor)),ENT_QUOTES);
      if(isset($_POST))
        $_POST[$chave]    = $valor;
      else if(isset($_REQUEST))
        $_REQUEST[$chave] =  $valor;
      else if(isset($_GET))
        $_GET[$chave]     =  $valor;
   }
  }
}

function lista_pagamentos()
{
  global $conn,$pageAtual;
  $sql = "SElECT formas_pagamento_desc,formas_pagamento_img FROM formas_pagamento WHERE formas_pagamento_status = 'S' ORDER BY formas_pagamento_desc";
  $result = $conn->sql($sql);

  if(mysql_num_rows($result) > 0)
  {
   $listaPagamentos .= "<ul class='pgto'>\n";
    while($pgto = mysql_fetch_object($result))
     $listaPagamentos .= "<li><img src='".DIR_PAGAMENTOS.$pgto->formas_pagamento_img."' alt='".$pgto->formas_pagamento_desc."' title='".$pgto->formas_pagamento_desc."' /></li>\n";
     
    $listaPagamentos .= "</ul>\n";

  }
   return $listaPagamentos;
}

function validateField($fields = array(),$type = null,$size = 0){

if(empty($fields) && empty($type))
 return false;

//Verificar tamanho dos campos
if(!empty($size)){
 foreach($fields as $field){
  if(strlen($field) != $size) {
    return false;
  }
 }
}

 switch($type) {
  case "cpf":

   // Retira pontos e traços
   $fields[0] = str_replace("-","",(str_replace(".","",$fields[0])));

   // Verifica se o campo esta vázio
   if(empty($fields[0]))
    return false;
   //Verifica se o CPF informado é um numero inteiro
   elseif(!is_numeric($fields[0])){
    //echo "erro 1";
    return false;
    
   } 
   //Verifica se o CPF é constituído de números repetidos de 11111111111 até 99999999999
   elseif(($fields[0] == '11111111111') || ($fields[0] == '22222222222') ||
    ($fields[0] == '33333333333')  ||  ($fields[0] == '44444444444') ||
    ($fields[0] == '55555555555') ||  ($fields[0] == '6666666666') ||
    ($fields[0] == '77777777777') ||  ($fields[0] == '88888888888') ||
    ($fields[0] == '99999999999') ||  ($fields[0] == '00000000000'))  {
      //echo "erro 2";
      return false;
    }
    else {
     //Pega o digito verificador
     $dv_informado = substr($fields[0],9,2);
     
     for($i=0;$i<=8;$i++)
      $digito[$i] = substr($fields[0],$i,1);
      
     //Calcula o valor do 10º digito de verificação
     $posicao = 10;
     $soma = 0;
     
     for($i=0;$i<=8;$i++){
     $soma = $soma + $digito[$i] * $posicao;
     $posicao--;
     }
     
     $digito[9] = $soma % 11;
     
     if($digito[9] < 2)
      $digito[9] = 0;
     else
      $digito[9] = 11 - $digito[9];
      
      //Calcula o valor do 11º digito de verificação
      $posicao = 11;
      $soma = 0;
      
      for($i=0;$i<=9;$i++){
       $soma = $soma + $digito[$i] * $posicao;
       $posicao--;
      }
      
      $digito[10] = $soma %11;
      
      if($digito[10]<2)
       $digito[10] = 0;
      else
       $digito[10] = 11 - $digito[10];
       
       //verifica se o dv calculado é igual ao informado
       $dv = $digito[9] * 10 + $digito[10];
       if($dv != $dv_informado){
        //echo "erro 3";
        return false;
      } else {
        
        return true;
       }
    }

  break;
  case 'date':
    if (preg_match("/^(\d{2})\\/(\d{2})\\/(\d{4})$/",$fields[0], $matches)) {
      if (checkdate($matches[2], $matches[1], $matches[3])){
         return true;
      }
   }
   return false;
  break;
  case 'email':
   if (preg_match('/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/',$fields[0],$matches))
    return true;

  return false;
  break;
  case 'numeric':
   if(!is_numeric($fields[0]))
    return false;
    
   return true;
  break;
  case 'password':
   if(count(array_unique($fields)) > 1)
    return false;

    return true;
  break;
  default:
   return true;
  }
}

 //Funções que formatam as chaves de um array
 function array_replace_key($value){
  return str_replace("clientes_","",$value);
 }
 
 function format_array($array = array()){
   if(!empty($array)){
    $arrakey = (array_map("array_replace_key",array_keys($array)));
    $arravalue = array_values($array);

    return array_combine($arrakey, $arravalue);
   }
 }

 function arruma_acento($string =null){
   if(!empty($string))  {
     $string = ereg_replace("[^a-zA-Z0-9_.]", "",
     strtr($string, "Ã","í"));
   }
   return $string;
 }

 function my_file_get_contents( $site_url ){
  $ch = curl_init();
  $timeout = 10;
  curl_setopt ($ch, CURLOPT_URL, $site_url);
  curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
  $file_contents = curl_exec($ch);
  curl_close($ch);
  return $file_contents;
}
?>

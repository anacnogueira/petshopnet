<?
/*--------------------------------------------------------'
   SIPAC - Sistema Integrado de Painel de Controle V 2.1  '
 	 Criado por Ana Claudia Nogueira                        '
   Criação 19/03/2007                                     '
   Última Modificação: 19/03/2009                         '
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

/*|--------------------------------------------------------------------------------|'
'|                               Função Montar Lista                               |'
'|--------------------------------------------------------------------------------|*/
function fct_MontarLista($SQL,$indxSel,$name='',$value='')
{
  global $conn;
  $result = $conn->sql($SQL);

  if(!empty($name))
  {
    $select_ini = "<select name='$name' style='font-size:10px'>\n";
    $select_fim = "</select>\n";
  }
  if(empty($value))
   $option .= "<option value='0'>selecione...</option>\n";
  else
   $option .= $value;
  while($linha = mysql_fetch_array($result))
  {
    $option .="<option value='".$linha[0]."'";
    if(!empty($indxSel) and $linha[0]== $indxSel)
      $option .="selected='selected' ";
    $option .=">".htmlspecialchars($linha[1],ENT_QUOTES)."</option>\n";
  }

  return $select_ini.$option.$select_fim;
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
 //require_once("lib/smtp.class.php");

    /* Configuração da classe.smtp.php */
  //$host = "smtp.petshopnet.com.br"; /*host do servidor SMTP */
  //$smtp = new Smtp($host);
  //$smtp->user = "no-reply@petshopnet.com.br"; /*usuario do servidor SMTP */
  //$smtp->pass = "rfb78fab78"; /* senha do usuario do servidor SMTP*/
  //$smtp->debug =true; /* ativar a autenticação SMTP*/

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
                  font-family: arial;
                  font-size: 12px;
	           }
	            img a, img{
	            border: none;
	            text-decoration: none;
                color: #000;
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

             table { font-size: 11px; }
             table a{
                border: none;
	            text-decoration: none;
                color: #000;
              }
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
  //return $smtp->Send($to,$from,$cc,$bcc,$subject,$msg_body,$headers);
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
function fct_EnvioMail_smtp($to,$from,$cc,$bcc,$subject,$msg,$attach = '')
{
 require_once("../lib/smtp.class.php");

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
$headers = "MIME-Version: 1.1\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
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
            /* -------------- common ------------- */
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


$envio = mail($to, utf8_encode($subject), $msg_body, $headers);

 return $envio;


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
function fct_conversorData($entraData, $type){
   switch($type){
     case 1:
      $entraData = left($entraData,10);
      $conv1 = explode("-",$entraData);
      $saiData = implode("/",array_reverse($conv1));
      break;
     case 2:
      $entraData = left($entraData,10);
      $conv1 = explode("/",$entraData);
      $saiData = implode("-",array_reverse($conv1));
      break;
     case 3:
      $convHora = explode(" ",$entraData);
      $ConvData = explode("/",$convHora[0]);
      $saiData = implode("-",array_reverse($ConvData))." ".$convHora[1];
      break;
     case 4:
      $convHora = explode(" ",$entraData);
      $ConvData = explode("-",$convHora[0]);
      $saiData = implode("/",array_reverse($ConvData))." ".$convHora[1];
      break;
    }
 return $saiData;
}
/*---------------------------------------------------------------------------------|'
'|	                          Estados (array de estados brasileiros)               |'
'----------------------------------------------------------------------------------|*/
function Estados()
{
$arraEstados = array("0","Selecione","AC","Acre","AL","Alagoas","AM","Amazonas","AP","Amapá","BA","Bahia","CE","Ceará",
 "DF","Distrito Federal","ES","Espirito Santo","GO","Goiás","MA","Maranhão","MG","Minas Gerais","MG",
 "Mato Grosso do Sul","MT","Mato Grosso","PA","Pará","PB","Paraíba","PE","Pernambuco","PI","Piauí",
 "PR","Paraná","RJ","Rio de Janeiro","RN","Rio Grande Norte","RO","Rondônia","RR","Roraima","RS",
 "Rio Grande do Sul","SC","Santa Catarina","SE","Sergipe","SP","São Paulo","TO","Tocantins");

 return $arraEstados;
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

/*---------------------------------------------------------------------------------|'
'|	                          ordenacao                                            |'
'|	Parâmetros:                                                                    |'
'|	$campo = campo na tabela ordenado                                              |'
'----------------------------------------------------------------------------------|*/
function ordenacao($campo)
{
 global $ordenacaoCampo, $seta, $descr;
 if($ordenacaoCampo == $campo)
  $img = "<img src='".DIR_IMAGENS.$seta."' alt='$descr'  />";

 return $img;
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
      $valor = str_ireplace($arraStringReplace,'',trim($valor));
      if(isset($_POST))
        $_POST[$chave]    = $valor;
      else if(isset($_REQUEST))
        $_REQUEST[$chave] =  $valor;
      else if(isset($_GET))
        $_GET[$chave]     =  $valor;
   }
  }
}

function alterarStatus($status,$id,$table)
{

  if($status == "S") //Ativo
  {
   $listarStatus .="<img src='".DIR_BTNS."icon_status_green.gif' title='Ativo' />";
   $listarStatus .="<a href='alterar_status.php?table=$table&amp;id=$id&amp;status=N'><img src='".DIR_BTNS."icon_status_red_light.gif' title='Inativo' border='0' /></a>";
  }
  elseif($status == "N") //Inativo
  {
   $listarStatus .="<a href='alterar_status.php?table=$table&amp;id=$id&amp;status=S'><img src='".DIR_BTNS."icon_status_green_light.gif' title='Ativo' border='0' /></a>";
   $listarStatus .="<img src='".DIR_BTNS."icon_status_red.gif' title='Inativo' />";
  }
  return  $listarStatus;
}

function alterarStatus2($table,$field_id,$id,$field_status,$status)
{
  $link = "alterar_status2.php";
  $fields = "?table=".$table."&amp;field_id=".$field_id."&amp;id=".$id.
  "&amp;field_status=".$field_status;

  if($status == "S") //Ativo
  {
   $listarStatus .="<img src='".DIR_BTNS."icon_status_green.gif' title='Ativo' />";
   $listarStatus .="<a href='".$link.$fields."&amp;status=N'><img src='".DIR_BTNS."icon_status_red_light.gif' title='Inativo' border='0' /></a>";
  }
  elseif($status == "N") //Inativo
  {
   $listarStatus .="<a href='".$link.$fields."&amp;status=S'><img src='".DIR_BTNS."icon_status_green_light.gif' title='Ativo' border='0' /></a>";
   $listarStatus .="<img src='".DIR_BTNS."icon_status_red.gif' title='Inativo' />";
  }
  return  $listarStatus;
}

function retira_acentos($string)
{
  $string = preg_replace("[^a-zA-Z0-9_.]", "",
  strtr(str_replace(array("\"","\\","/"),"",$string), "áàãâéêíóôõúüçÁÀÃÂÉÊÍÓÔÕÚÜÇ .\"",
  "aaaaeeiooouucAAAAEEIOOOUUC__"));
  $string = str_replace(array(",","%"),"",$string);
 return $string;
}
 
 function tep_not_null($value)
{
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

/*---------------------------------------------------------------------------------|'
'|	               Colocar primeira letra em maiuscula                             |'
'|	Parâmetros:                                                                    |'
'|	$word = palavra ou frase                                                       |'             |'
'|---------------------------------------------------------------------------------|*/
function FirstLetterUpper($word)
{

 $arraWord = explode(" ",$word);

 foreach($arraWord as $uniqueWord)
 {

  $arraFind     = array('Ã','Õ','À','Á','É','Í','Ó','Ú','Ê');
  $arraReplace  = array('ã','õ','à','á','é','í','ó','ú','ê');
  $uniqueWord = str_replace($arraFind,$arraReplace,$uniqueWord);

  $totWord .= ucfirst(strtolower(trim($uniqueWord)))." ";

 }
 return $totWord;
}

function listaCategorias($parent_id,$space)
{
   global $conn,$produtos_codigo;

   $sql = "SELECT * FROM categorias WHERE parent_id = $parent_id  ORDER BY categorias_ordem";
   $result = $conn->sql($sql);
   if(mysql_num_rows($result))
   {
      while($linha = mysql_fetch_array($result))
      {

         $sql = "SELECT categorias_id FROM produtos_categoria WHERE categorias_id = '".$linha["categorias_id"]."' AND produtos_codigo='".$produtos_codigo."'";
         $result2 = $conn->sql($sql);
         $linha2 = mysql_fetch_array($result2);
         echo "<li><input name='categorias_id[]' type='checkbox' value='".$linha["categorias_id"]."' ".($linha["categorias_id"] == $linha2["categorias_id"] ? "checked='checked'" : "")." />". $space . htmlspecialchars($linha["categorias_descricao"])."</li>\n";

         listaCategorias($linha["categorias_id"],'&nbsp; '.$space);
      }
   }
}

function unhtmlentities($string)
{
    // replace numeric entities
    $string = preg_replace('~&#x([0-9a-f]+);~ei', 'chr(hexdec("\\1"))', $string);
    $string = preg_replace('~&#([0-9]+);~e', 'chr("\\1")', $string);
    // replace literal entities
    $trans_tbl = get_html_translation_table(HTML_ENTITIES);
    $trans_tbl = array_flip($trans_tbl);
    return strtr($string, $trans_tbl);
}
?>

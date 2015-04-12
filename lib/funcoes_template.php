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
														Envia E-mail - Template                               '
'--------------------------------------------------------------------------------*/
function fct_EnvioMail($to,$from,$cc,$bcc,$subject,$msg,$attach = '')
{
 require_once("lib/smtp.class.php");

    /* Configuração da classe.smtp.php */
  $host = "smtp.petshopnet.com.br"; /*host do servidor SMTP */
  $smtp = new Smtp($host);
  $smtp->user = "no-reply@petshopnet.com.br"; /*usuario do servidor SMTP */
  $smtp->pass = "rfb78fab78"; /* senha dousuario do servidor SMTP*/
  $smtp->debug =true; /* ativar a autenticação SMTP*/


  //--- Inicio de Anexos --//
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
        
        //Abrir arquivo e codificar para o envio
        $file = fopen($arraAttach[$i], "r");
        $contents = fread($file, $attach_size);
        $encoded_attach = chunk_split(base64_encode($contents));
        fclose($file);
        
        //Anexando o arquivo no corpo da mensagem
        $msg_attach .= "\n\n--Message-Boundary\n";
        $msg_attach .= "Content-type: $attach_type; name=\"$attach_name\"\n";
        $msg_attach .= "Content-Transfer-Encoding: BASE64\n";
        $msg_attach .= "Content-disposition: attachment; filename=\"$attach_name\"\n\n";
        $msg_attach .= "$encoded_attach\n";
      }
      else
      {
        echo "O arquivo ".$arraAttach[$i]." não existe";
        exit();
      }
    }
    $msg_attach .= "--Message-Boundary--\n";
    
    $headers .= "X-Mailer: Solicitação de Coleta - Nokia Care\n";
    $headers .= "MIME-version: 1.0\n";
  	$headers .= "Content-type: multipart/mixed; ";
  	$headers .= "boundary=\"Message-Boundary\"\n";
  	$headers .= "\n\n--Message-Boundary\n";
	  $headers .= "Content-type: text/html; charset=iso-8859-1";
	  $headers .= "Content-transfer-encoding: 8bits\n";
	}
  //-- Fim ANexos --//
  $headers .= "X-Mailer: no-reply - PetShopNet\n";
  $headers .= "MIME-version: 1.0\n";
  $headers .= "Content-type: multipart/mixed; ";
  $headers .= "boundary=\"Message-Boundary\"\n";
  $headers .= "\n\n--Message-Boundary\n";
  $headers .= "Content-type: text/html; charset=iso-8859-1";
  $headers .= "Content-transfer-encoding: 8bits\n";
  
  $msg_body = "
  <!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
    <html xmlns='http://www.w3.org/1999/xhtml'>
      <head>
        <title></title>
          <meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
          <meta http-equiv='Content-Language' content='en-us' />
          <style type='text/css'>
            /* -------------- common -------------*/
            body {
		          margin: 0px;
		          padding: 0px;
		          color: #fff;
		          background: #930;
	           }
	           #BodyImposter {
		           color: #fff;
		           background: #930 url('http://www.email-standards.org/acid/img/bgBody.gif') repeat-x;
		           background-color: #930;
		           font-family: Arial, Helvetica, sans-serif;
		           width: 100%;
		           margin: 0px;
		           padding: 0px;
		           text-align: center;
	           }
	           #BodyImposter dt {
		          font-size: 14px;
		          line-height: 1.5em;
		          font-weight: bold;
	           }
	           #BodyImposter dd, #BodyImposter li, #BodyImposter p, #WidthHeight span {
		          font-size: 12px;
		          line-height: 1.5em;
	          }
	          #BodyImposter dd, #BodyImposter dt {
		         margin: 0px;
		         padding: 0px;
	          }
	          
	          #BodyImposter dl, #BodyImposter ol, #BodyImposter p, #BodyImposter ul {
		          margin: 0px 0px 4px 0px;
		          padding: 10px;
		          color: #fff;
		          background: #ad5c33;
	          }
	          #BodyImposter small {
		          font-size: 11px;
		          font-style: italic;
	          }
	          #BodyImposter ol li {
		         margin: 0px 0px 0px 20px;
		         padding: 0px;
	          }
	          #BodyImposter ul#BulletBg li {
		         background: url('http://www.email-standards.org/acid/img/bullet.gif') no-repeat 0em 0.2em;
		         padding: 0px 0px 0px 20px;
		         margin: 0px;
		         list-style: none;
	          }
  	        #BodyImposter ul#BulletListStyle li {
		         margin: 0px 0px 0px 22px;
		         padding: 0px;
		         list-style: url('http://www.email-standards.org/acid/img/bullet.gif');
	          }

            /* ----- links -----*/
            #BodyImposter a { text-decoration: underline; }
            #BodyImposter a:link, #BodyImposter a:visited {
		          color: #dfb8a4;
		          background: #ad5c33;
	          }
	          #ButtonBorders a:link, #ButtonBorders a:visited {
		          color: #fff;
		          background: #892e00;
	          }
	          #BodyImposter a:hover { text-decoration: none; }
	          
	          #BodyImposter a:active {
		          color: #000;
		          background: #ad5c33;
		          text-decoration: none;
	          }
            /* ----- heads -----*/
            #BodyImposter h1, #BodyImposter h2, #BodyImposter h3 {
		         color: #fff;
		         background: #ad5c33;
		         font-weight: bold;
		         line-height: 1em;
		         margin: 0px 0px 4px 0px;
		         padding: 10px;
	          }
	          #BodyImposter h1 { font-size: 34px; }
	          #BodyImposter h2 { font-size: 22px; }
	          #BodyImposter h3 { font-size: 16px; }
	          #BodyImposter h1:hover, #BodyImposter h2:hover, #BodyImposter h3:hover,
	          #BodyImposter dl:hover, #BodyImposter ol:hover, #BodyImposter p:hover,
	          #BodyImposter ul:hover {
		          color: #fff;
		          background: #892e00;
	          }
            /* ----- boxes -----*/
            #Box {
		         width: 470px;
		         margin: 0px auto;
		         padding: 40px 20px;
		         text-align: left;
	          }
	          p#ButtonBorders {
		          clear: both;
		          color: #fff;
		          background: #892e00;
		          border-top: 10px solid #ad5c33;
		          border-right: 1px dotted #ad5c33;
		          border-bottom: 1px dashed #ad5c33;
		          border-left: 1px dotted #ad5c33;
	          }
	          p#ButtonBorders a#Arrow {
		         padding-right: 20px;
		         background: url('http://www.email-standards.org/acid/img/arrow.gif') no-repeat right 2px;
	          }
	          p#ButtonBorders a {
		          color: #fff;
		          background-color: #892e00;
	          }
	          p#ButtonBorders a#Arrow:hover { background-position: right -38px; }
	          #Floater { width: 470px; }
	          #Floater #Left {
              float: left;
		          width: 279px;
		          height: 280px;
		          color: #fff;
		          background: #892e00;
		          margin-bottom: 4px;
	          }
	          #Floater #Right {
		          float: right;
		          width: 187px;
		          height: 280px;
		          color: #fff;
		          background: #892e00 url('http://www.email-standards.org/acid/img/ornament.gif') no-repeat right bottom;
		          margin-bottom: 4px;
	          }
            #Floater #Right p {
		          color: #fff;
		          background: transparent;
	          }
	          #FontInheritance  { font-family: Georgia, Times, serif; }
	          #MarginPaddingOut { padding: 20px; }
            #MarginPaddingOut #MarginPaddingIn {
		          padding: 15px;
		          color: #fff;
		          background: #ad5c33;
	          }
	          #MarginPaddingOut #MarginPaddingIn img {
		          background: url('http://www.email-standards.org/acid/img/bgPhoto.gif') no-repeat;
		          padding: 15px;
	          }
	          span#SerifFont { font-family: Georgia, Times, serif; }
            p#QuotedFontFamily {
		          font-family: 'Trebuchet MS', serif;
	          }
	          #WidthHeight {
		          width: 470px;
		          height: 200px;
		          color: #fff;
		          background: #892e00;
	          }
	          #WidthHeight span {
		          display: block;
		          padding: 10px;
	          }
          </style>
        </head>
        <body>
          <div id='BodyImposter'>
	          <div id='Box'>
		          <div id='FontInheritance'>
                <h1>H1 headline (34px/1em)</h1>
			          <h2>H2 headline (22px/1em)</h2>
			          <h3>H3 headline (16px/1em)</h3>
		          </div>
		          <p>Paragraph (12px/1.5em) Lorem ipsum dolor sit amet, <a href='http://www.email-standards.org/'>consectetuer adipiscing</a> elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. <span id='SerifFont'>(This is a serif font inside of a paragraph styled with a sans-serif font.)</span> <small>(This is <code>small</code> text.)</small></p>

		          <p id='QuotedFontFamily'>This is a font (Trebuchet MS) which needs quotes because its label comprises two words.</p>
		          <ul id='BulletBg'>
			         <li>background bullet eum iriure dolor in hendrerit in</li>
			         <li>vulputate velit esse molestie consequat, vel illum dolore eu</li>
			         <li>feugiat nulla facilisis at vero eros et accumsan et iusto odio</li>
		          </ul>
		          <ul id='BulletListStyle'>
               <li>list-style bullet eum iriure dolor in hendrerit in</li>
			         <li>vulputate velit esse molestie consequat, vel illum dolore eu</li>
			         <li>feugiat nulla facilisis at vero eros et accumsan et iusto odio</li>
		          </ul>
		          <ol>
			         <li>ordered list sit amet, consectetuer adipiscing elit</li>
			         <li>sed diam nonummy nibh euismod tincidunt ut laoreet</li>
               <li>dolore magna aliquam erat volutpat. Ut wisi enim ad minim</li>
		          </ol>
		          <dl>
			         <dt>Definition list</dt>
			         <dd>lorem ipsum dolor sit amet, consectetuer adipiscing elit</dd>
			         <dd>sed diam nonummy nibh euismod tincidunt ut laoreet</dd>
			         <dd>dolore magna aliquam erat volutpat. Ut wisi enim ad minim</dd>
              </dl>
		            <div id='Floater'>
			           <div id='Left'>
				          <div id='MarginPaddingOut'>
					         <div id='MarginPaddingIn'>
						        <img src='http://www.email-standards.org/acid/img/photo.jpg' width='180' height='180' alt='[photo: root canal]' />
					         </div>
				          </div>
			           </div>
                 <div id='Right'>
				          <p>Right float with a positioned background</p>
			           </div>
		            </div>
		            <p id='ButtonBorders'><a href='http://www.email-standards.org/' id='Arrow'>Borders and an a:hover background image</a></p>
		            <div id='WidthHeight'>
			           <span>Width = 470, height = 200</span>
               </div>
	          </div>
	          $msg;
          </div>
          <!-- <unsubscribe>Hidden for testing</unsubscribe> -->";
    if(!empty($msg_attach))
      $msg_body .= $msg_attach;
   
    $msg_body .= "
        </body>
       </html>";
  return $smtp->Send($to,$from,$cc,$bcc,$subject,$msg_body,$headers);
}

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
    $saida .= '<a href="?categorias_id='.$dados['categorias_id'].'" title="'.$dados['categorias_descricao'].'">'.$dados['categorias_descricao'].'</a> &raquo; ';
  }
  #Remove de $saida o elemento separados
  $saida = substr( $saida, 0, -8 );
  #Exibe a saida
  return $saida;
}

function Estados()
{
 $arraEstados = array("0","Selecione","AC","Acre","AL","Alagoas","AM","Amazonas","AP","Amapá","BA","Bahia","CE","Ceará","
 DF","Distrito Federal","ES","Espirito Santo","GO","Goiás","MA","Maranhão","MG","Minas Gerais","
 MG","Mato Grosso do Sul","MT","Mato Grosso","PA","Pará","PB","Paraíba","PE","Pernambuco","PI","Piauí","PR","Paraná","
 RJ","Rio de Janeiro","RN","Rio Grande Norte","RO","Rondônia","RR","Roraima","RS"," Rio Grande do Sul","
 SC","Santa Catarina","SP","São Paulo","TO","Tocantins");

 return $arraEstados;
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

/**
* fct_frete
*
* @param mixed $servico
* @param mixed $origem CEP da origem
* @param mixed $destino CEP do destino
* @param mixed $peso Peso em Kg
* @access public
* @return array
*/
 function fct_frete($cepDestino)
 {
  global $conn, $frete;
  $cepOrigem = CEP_ORIGEM;
  //$cepDestino = $_REQUEST["cep1"].$_REQUEST["cep2"];
  $servico    = FRETE_SEDEX;

  //Peso Total dos produtos do carrinho
  $SQL = "SELECT SUM(p.produtos_peso) as peso_total
  FROM carrinho c
  INNER JOIN produtos p
  ON p.produtos_id = c.produtos_id
  WHERE session_id = '".session_id()."'";
  //echo $SQL;
  $result = $conn->sql($SQL);
  $peso = mysql_fetch_assoc($result);


  $urlCorreios = "http://www.correios.com.br/encomendas/precos/calculo.cfm?resposta=xml&servico=40010&cepOrigem=%s&cepDestino=%s&peso=%s";
  $urlCorreios = sprintf($urlCorreios, $cepOrigem, $cepDestino, $peso["peso_total"]);

  $carrega = file($urlCorreios) or die("Problemas em obter os dados dos correios");

  $conteudo = trim(str_replace(array("\n", chr(13)), "", implode($carrega, "")));

  if(strlen($conteudo) <1) return false;

  //informações de origem tratadas com RegExp...
  preg_match_all("/<uf_origem>(.+)<\/uf_origem>/", $conteudo, $uf_origem);
  preg_match_all("/<local_origem>(.+)<\/local_origem>/", $conteudo, $local_origem);
  preg_match_all("/<cep_origem>(.+)<\/cep_origem>/", $conteudo, $cep_origem);

  //informações de destino tratadas com RegExp...
  preg_match_all("/<uf_destino>(.+)<\/uf_destino>/", $conteudo, $uf_destino);
  preg_match_all("/<local_destino>(.+)<\/local_destino>/", $conteudo, $local_destino);
  preg_match_all("/<cep_destino>(.+)<\/cep_destino>/", $conteudo, $cep_destino);

  //informações sobre a encomenda tratadas com RegExp..
  preg_match_all("/<peso>(.+)<\/peso>/", $conteudo, $peso);
  preg_match_all("/<preco_postal>(.+)<\/preco_postal>/", $conteudo, $preco_postal);

  //objeto contendo as informações sobre o frete...
  $sedex = array(
  "uf_origem" => $uf_origem[1][0],
  "local_origem" => $local_origem[1][0],
  "cep_origem" => $cep_origem[1][0],
  "uf_destino" => $uf_destino[1][0],
  "local_destino" => $local_destino[1][0],
  "cep_destino" => $cep_destino[1][0],
  "peso" => floatval($peso[1][0]),
  "valor" => floatval($preco_postal[1][0])
  );

  $frete = $sedex["valor"];
  return $frete;
 }
 
 function formataCep($cep)
{
 if(strlen($cep) != 8)
  exit;

 $cepPri = left($cep,5);
 $cepDig = right($cep,3);

 return $cepPri."-".$cepDig;
}

function progressoCompra($pagina){
 $arraPagina = array("meu_carrinho.php","login.php","fechar_pedido.php","fechar_pedido_pagto.php","fechar_pedido_final.php");
 $arraLink    = array("Carrinho","Identificacação","Endereço","Pagamento","Compra Concluída");
 $barra = "<div class='progressoCompra'><ol>";
 for($i = 0;$i < count($arraLink);$i++)
 {
		if($pagina == $arraPagina[$i])
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
?>

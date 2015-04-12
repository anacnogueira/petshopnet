<?
/*--------------------------------------------------------'
   SIPAC - Sistema Integrado de Painel de Controle V 2.0  '
 	 Criado por Ana Claudia Nogueira                        '
   Criação 05/09/2007                                     '
   Última Modificação: __/__/____                         '
   Página: senha_alterar.php		                          '
---------------------------------------------------------*/
 $allowRotina = "nao";
 $form        = "frm_senha";
 require_once("lib/configs.php");
 if(isset($_REQUEST["btn_alterar"]))
 {
   $senha = $_REQUEST["senha"];
   $nome 	=	$_REQUEST["users_nome"];
   $email = $_REQUEST["users_email"];
   
   if(!empty($senha))
   {
    $SQL = "UPDATE users SET
	 	users_senha = '".sha1($senha)."',
		users_primeiro_login='0'
		WHERE users_id='".$_SESSION[EMPRESA]["codUser"]."'";
    $result = $conn->sql($SQL);

    $from    = 'no-reply@'.str_replace("http://","",EMPRESA);
    $to      =  $email;
    $subject = "Envio de senha - ".EMPRESA;
    $msg     ="<h1>Envio de senha</h1>";
    $msg    .= "<em>$nome</em><br />";
    $msg    .= "Segue as informações do seu novo login:<br />";
    $msg    .= "<strong>E-mail: </strong>$email<br />";
    $msg    .= "<strong>Senha: </strong>$senha<br />";
    fct_EnvioMail($to,$from,$cc,$bcc,$subject,$msg);

    if(isset($_REQUEST["return"]) and !empty($_REQUEST["return"]))
      $return = "?return=".$_REQUEST["return"];
    else
      $return = "";
    $script = "<script type='text/javascript'>\n
								alert('Senha alterada com sucesso! \\rVocê será redirecionado para a tela de login.');
               	window.location = 'logout.php$return';
					  </script>\n";
   }
 }
  else
  {
   $SQL = "SELECT users_nome, users_email FROM  users
   WHERE users_id='".$_SESSION[EMPRESA]["codUser"]."'";
    $result = $conn->sql($SQL);
    
    if(mysql_num_rows($result)>0)
    {
     $users_nome  = mysql_result($result,0,"users_nome");
     $users_email = mysql_result($result,0,"users_email");
    }
  
  }
 if(empty($_REQUEST["return"]))
 {
    require_once("topo.php");
    require_once("menu_lateral.php");
	 echo "<div id=\"conteudo\">\n";
 }

 else {
 ?>
 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Teste</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href='templates/sipac.css' rel='stylesheet' type='text/css' />
<!--[if IE]>
  <link href="templates/sipac_ie.css" rel="stylesheet" type="text/css" />
<![endif]-->
</head>
<body style='background:#fff'>
 
<? } ?>

<script type='text/javascript' src='js/senha.js'></script>
<?= $script?>
 <div class='titulo'>Alterar Senha</div>
  <form id="<?=$form ?>" method="post" action="<?=$pageAtual ?>">
   <table class="TableLista" cellpadding='0' cellspacing='0'>
    <tr>
     <td class='legenda'><label for="senha">Nova Senha:</label></td>
     <td><input name='senha' type='password' size='50' value="" /></td>
    </tr>
    <tr>
     <td class='legenda'><label for="senha2">Confirmar nova senha:</label></td>
     <td><input name='senha2' type='password' size='50' value="" /></td>
    </tr>
    <tr class='BarraPag'>
     <td colspan="2">
      <input name="btn_alterar" type="submit" value="alterar" />
      <input name="users_nome" type="hidden" value="<?=$users_nome?>" />
      <input name="users_email" type="hidden" value="<?=$users_email?>" />
      <input name="return" type="hidden" value="<?=$_REQUEST["return"]?>" />
     </td>
    </tr>
   </table>
  </form>
<? if(!isset($_REQUEST["return"])) { ?>
</div>
<? }?>
<? require_once("rodape.php") ?>

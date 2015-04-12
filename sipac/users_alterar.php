<?
/*--------------------------------------------------------'
   SIPAC - Sistema Integrado de Painel de Controle V 2.1  '
 	 Criado por Ana Claudia Nogueira                        '
   Criação 04/09/2007                                     '
   Última Modificação: 24/03/2009                         '
   Página: users_cadastrar.php     	                      '
---------------------------------------------------------*/
   $form        = "frm_user";
  require_once("lib/configs.php");
  $titulo 		= $rotinaClass->menu_rotinas_titulo("");
  $link  		  = "users_listar.php";
  $sels       = $_REQUEST["Sels"];
  if(is_array($sels)) $sels = $sels[0];

  $SQL_grupo  = "SELECT grupos_id,grupos_nome FROM grupos";

  if(isset($_POST["btn_alterar"]))
  {
   $users_nome   = $_POST["users_nome"];
 	 $users_CPF    = $_POST["users_CPF"];
   $grupos_id    = $_POST["grupos_id"];
 	 $users_senha  = $_POST["users_senha"];
   $users_email  = $_POST["users_email"];

   $sql = "UPDATE users SET
   users_nome = '$users_nome',
   users_cpf = '$users_CPF',
   grupos_id = '$grupos_id',
   users_email ='$users_email',
   users_data_modificacao = NOW()";
   if(!empty($users_senha))
   {
     $sql .= ",users_senha = '".sha1($users_senha)."'";

     //Envio de e-mail para alteração de senha
     $from    ='no-reply@'.str_replace("http://www.","",URL);
     $to      = $users_email;
     $subject = "Confirmação de alteração de senha - ".EMPRESA;
     $msg     = "<h1>Confirmação de alteração de senha</h1>";
     $msg    .= "<em>$users_nome</em><br />";
     $msg    .= "<p>Segue abaixo seu e-mail e senha. Para sua conveniência,
     guarde-os em um lugar seguro. Eles são as chaves para você acessar seus dados.</p>";
     $msg    .= "<strong>E-mail: </strong>$users_email<br />";
     $msg    .= "<strong>Senha: </strong>$users_senha<br />";
     //fct_EnvioMail($to,$from,$cc,$bcc,$subject,$msg);
   }
   $sql .= " WHERE users_id = '$sels'";
   $result = $conn->sql($sql);

   $mensagem_log = "Usuário alterado com sucesso($sels).";
   createLog('',$pageAtual,'',$mensagem_log);

   header("location: $link");
 }
 else
 {
   $sql = "SELECT users_nome,users_cpf,grupos_id,users_email
   FROM users WHERE users_id = '$sels'";
   $result = $conn->sql($sql);
   $totCampos = mysql_num_fields($result);

   while($dados = mysql_fetch_array($result))
   {
    for($i = 0;$i < $totCampos;$i++)
    {
     $meta   = mysql_fetch_field($result, $i);
     $campo  =  $meta->name;
     $$campo = $dados[$i];
    }
   }
 }
 require_once("topo.php");
 require_once("menu_lateral.php");
?>
 <div id="conteudo">
  <script type='text/javascript' src='js/users.js'></script>
  <div class='titulo'><?= $titulo ?></div>
  <a href="<?=$link?>"> <img src='<?= DIR_BTNS ?>btn_voltar.gif' border='0' alt='voltar' /></a><br />
  <form id="<?=$form ?>" action="<?= $pageName ?>" method="post">
    <input name="Sels" type="hidden" value="<?=$sels ?>" />
    <input name="users_emailOld" type="hidden" value="<?=$users_email ?>" />
    <table class="TableLista">
      <tr>
        <td class='legenda'><label for="users_nome">Nome Completo:</label></td>
        <td><input name="users_nome" type="text" size="50" value="<?=$users_nome ?>" /></td>
      </tr>
      <tr>
        <td class='legenda'><label for="users_CPF">CPF:</label></td>
        <td><input name="users_CPF" type="text" size="11" maxlength="11" value="<?=$users_cpf ?>" class='onlyNumbers' /></td>
      </tr>
      <tr>
        <td class='legenda'><label for="grupos_id">Grupo:</label></td>
        <td><?= fct_MontarLista($SQL_grupo,$grupos_id,"grupos_id") ?></td>
      </tr>
      <tr>
        <td class='legenda'><label for="users_senha">Senha:</label></td>
        <td><input name="users_senha" type="password" size="11" maxlength="11" /></td>
      </tr>
      <tr>
        <td class='legenda'><label for="users_senha2">Confirme a Senha:</label></td>
        <td><input name="users_senha2" type="password" size="11" maxlength="11" /></td>
      </tr>
      <tr>
        <td class='legenda'><label for="users_email">E-mail:</label></td>
        <td><input name="users_email" type="text" size="50" value="<?=$users_email ?>" /></td>
      </tr>
      <tr class='BarraPag'>
        <td colspan="2"><input name="btn_alterar" type="submit" value="Alterar" /></td>
      </tr>
    </table>
  </form>
 </div>
<? require_once("rodape.php") ?>

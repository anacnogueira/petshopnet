<?
/*--------------------------------------------------------'
   SIPAC - Sistema Integrado de Painel de Controle V 2.0  '
 	 Criado por Ana Claudia Nogueira                        '
   Criação 05/09/2007                                     '
   Última Modificação: __/__/____                         '
   Página: senha_alterar.php		                          '
---------------------------------------------------------*/
 $allowRotina = "nao";
 $form        = "frm_dados";
 require_once("lib/configs.php");
 if(isset($_REQUEST["btn_alterar"]))
 {

   $nome 				 = $_REQUEST["users_nome"];
   $email 			 = $_REQUEST["users_email"];
   $users_CPF    = $_REQUEST["users_CPF"];

	 $SQL = "UPDATE users SET
            users_nome  = '$nome',
            users_email = '$email',
            users_cpf   = '$users_CPF'
							 WHERE users_id='".$_SESSION[EMPRESA]["codUser"]."'";
   $result = $conn->sql($SQL);

   $script = "<script type='text/javascript'>\n
          alert('Dados alterados com sucesso!');
          </script>\n";
  }
  //else
  //{
   $SQL = "SELECT users_nome,users_email,users_cpf
   FROM users WHERE users_id='".$_SESSION[EMPRESA]["codUser"]."'";
   $result = $conn->sql($SQL);
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

  //}
 require_once("topo.php");
 require_once("menu_lateral.php");
?>
<div id="conteudo">
<script type='text/javascript' src='js/dados.js'></script>
<?= $script?>
 <div class='titulo'>Alterar Dados</div>
  <form id="<?=$form ?>" method="post" action="<?=$pageName ?>">
   <input name="users_emailOld" type="hidden" value="<?=$users_email ?>" />
   <table class="TableLista">
    <tr>
     <td class='legenda'><label for="users_nome">Nome Completo:</label></td>
     <td><input name="users_nome" type="text" size="50" value="<?=$users_nome?>" /></td>
    </tr>
    <tr>
     <td class='legenda'><label for="users_CPF">CPF:</label></td>
     <td>
      <input name="users_CPF"  type="text" size="11" maxlength="11" value="<?=$users_cpf?>"  class='onlyNumbers'/>
     </td>
    </tr>
    <tr>
      <td class='legenda'><label for="users_email">E-mail:</label></td>
      <td><input name="users_email" type="text" size="50" value="<?=$users_email?>" /></td>
     </tr>
     <tr class='BarraPag'>
      <td colspan="2">
			<input name="btn_alterar" type="submit" value="salvar" />
  			</td>
     </tr>
    </table>
  </form>
</div>
<? require_once("rodape.php") ?>

<?
/*--------------------------------------------------------'
   SIPAC - Sistema Integrado de Painel de Controle V 2.0  '
 	 Criado por Ana Claudia Nogueira                        '
   Criação 11/09/2007                                     '
   Última Modificação: __/__/____                         '
   Página: logs_detalhes.php		                        '
---------------------------------------------------------*/
$form        = "frm_logs";
 require_once("lib/configs.php");
 $titulo      = $rotinaClass->menu_rotinas_titulo("");
 $link        = $_REQUEST["link"];
 $sels        = $_REQUEST["Sels"];

 $sql = "SELECT users_nome, users_email, users_ip, logs_historico_data, logs_historico_hora,
 modulos_nome, submodulos_nome, logs_historico_operacao, logs_historico_mensagem
 FROM logs_historico
 LEFT JOIN users ON users.users_id = logs_historico.users_id
 LEFT JOIN submodulos ON submodulos.submodulos_id = logs_historico.submodulos_id
 LEFT JOIN modulos ON modulos.modulos_id = submodulos.modulos_id
 WHERE logs_historico_id = '$sels'";
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
 require_once("topo.php");
 require_once("menu_lateral.php");

 ?>
<div id="conteudo">
 	<div class='titulo'><?= $titulo ?></div>
  <a href="<?=$link?>"> <img src='<?= DIR_BTNS ?>btn_voltar.gif' border='0' alt='voltar' /></a><br />
  <table class="TableLista">
    <tr>
      <td class='legenda' width="120">Data:</td>
      <td><?=fct_conversorData($logs_historico_data,1)?></td>
    </tr>
    <tr>
      <td class="legenda" width="120">Horário:</td>
      <td><?=left($logs_historico_hora,5)?></td>
    </tr>
    <tr>
      <td class='legenda' width="120">Tipo:</td>
      <td><?=$logs_historico_operacao?></td>
    </tr>
		<tr>
		  <td class="legenda" width="120">Módulo:</td>
		  <td><?=$modulos_nome?></td>
		</tr>
		<tr>
		  <td class="legenda" width="120">Submódulo:</td>
		  <td><?=$submodulos_nome?></td>
		</tr>
		<tr>
		  <td class="legenda" width="120">IP:</td>
		  <td><?=$users_ip?></td>
		</tr>
		<tr>
		  <td class="legenda" width="120">Usuário:</td>
		  <td><?=$users_nome?></td>
		</tr>
		<tr>
		  <td class="legenda" width="120">E-mail:</td>
		  <td><?=$users_email?></td>
		</tr>
		<tr>
		  <td class="legenda" width="120">Descrição do evento:</td>
		  <td colspan="3"><?=$logs_historico_mensagem?></td>
  </table>
</div>
<? require_once("rodape.php") ?>

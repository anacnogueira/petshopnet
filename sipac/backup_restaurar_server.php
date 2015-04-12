<?
  /*--------------------------------------------------------'
   SIPAC - Sistema Integrado de Painel de Controle V 2.0  '
 	 Criado por Ana Claudia Nogueira                        '
   Criação 18/12/2007                                     '
   Última Modificação: 16/10/2009                         '
   Página: backup_resturar_server.php	                    '
---------------------------------------------------------*/

 $form   = "frm_backup";
 require_once("lib/configs.php");
 $titulo = $rotinaClass->menu_rotinas_titulo("");
 $link   = "backup_listar.php";
 
 $sels = $_REQUEST["sels"];
 if(is_array($sels))   $sels = $sels[0];

 if(isset($_POST["btn_restaurar"]))
 {
   $restore_file = BACKUP_DIR.$sels;
   if(file_exists($restore_file))
   {
    $extension = substr($sels, -3);
    if($extension !="sql") exit;
    
    $restore_from = $restore_file;
    $remove_raw = false;
    
    if (isset($restore_from) && file_exists($restore_from) && (filesize($restore_from) > 15000))
	{
      $fd = fopen($restore_from, 'rb');
      $restore_query = fread($fd, filesize($restore_from));
      fclose($fd);
    }
    require_once("backup_restaurar.php");
    $mensagem_log = "Arquivo de backup do servidor restaurado com sucesso.($sels).";
 	createLog('',$pageAtual,'',$mensagem_log);
 	echo "<script>
 			window.location = '".$link."'
 		</script>";
   }
 }
 require_once("topo.php");
 require_once("menu_lateral.php");
?>
  <div id="conteudo">
  <div class='titulo'><?= $titulo ?></div>
   <a href="<?=$link?>"> <img src='<?= DIR_BTNS ?>btn_voltar.gif' border='0' alt='voltar' /></a><br />
 	<form id="<?=$form ?>" action="<?= $pageAtual ?>" method="post">
	  <div class="TableLista">
 	    <p> Não interrompa ou feche a janela  durante o processo de restauração. Ele pode levar alguns minutos</p>
 	    <p> Quanto maior o arquivo de backup, maior será a demora no processamento! </p>
        <p>
         <td>Arquivo: <br /><strong><?=BACKUP_DIR.$sels ?></strong></td>
       </p>
 	   <tr class='BarraPag'>
 	   	<td>
			<input name="btn_restaurar" type="submit" value="Restaurar" />
 	     	<input name="sels" type="hidden" value="<?=$sels ?>" />
		</td>
 	   </tr>
 	  </div>
  </form>
 </div>
 <? require_once("rodape.php") ?>

<?
 /*--------------------------------------------------------'
   SIPAC - Sistema Integrado de Painel de Controle V 2.0  '
 	 Criado por Ana Claudia Nogueira                        '
   Criação 20/12/2007                                     '
   Última Modificação: 15/10/2009                         '
   Página: backup_listar.php			                        '
---------------------------------------------------------*/
 $form        = "frm_backup";
 require_once("lib/configs.php");
 $titulo = $rotinaClass->menu_rotinas_titulo("Listar");

 
 $dir_ok = false;
 if(is_dir(DIR_BACKUP))
 {
  if(is_writeable(DIR_BACKUP))
    $dir_ok = true;
   else
   {
    echo "Diretório não pode ser escrito";
    $dir_ok = false;
    exit;
   }
 }
 else
 {
    echo "O ".DIR_BACKUP." diretório não existe";
    $dir_ok = false;
    exit;
  }
 //Abrir o diretório de backup e listar os arquivos
  if ($dir_ok == true)
 {
	$dir = dir(DIR_BACKUP);
	$conteudo = array();
	while($file = $dir->read())
	{
	   	if(!is_dir(DIR_BACKUP. $file))
	   		$conteudo[] = $file;
	}
    sort($conteudo);
	for($i =0,$n=sizeof($conteudo);$i<$n;$i++)
	{
	  $entry = $conteudo[$i];
	  $check = 0;
	  $file_array['file'] =  $entry;
      $file_array['date'] = date(PHP_DATE_TIME_FORMAT, filemtime(DIR_BACKUP . $entry));
      $file_array['size'] = number_format(filesize(DIR_BACKUP . $entry)) . ' bytes';

	  $lista .= "<tr class='listaItem'>\n";
   	  $lista	.=	"	<td class='Sels'><input type='checkbox' class='checkbox' name='sels[]' value='". $file_array['file']."' /></td>\n";
      $lista	.=	"	<td>".$file_array['file']."</td>\n";
      $lista	.=	"	<td>".$file_array['date']."</td>\n";
      $lista	.=	"	<td>".$file_array['size']."</td>\n";
      $lista  .=  $rotinaClass->menu_rotinas_interno($file_array['file']);
	  $lista .="</tr>\n";
	 }
  }
  require_once("topo.php");
  require_once("menu_lateral.php");
?>
<div id="conteudo">
  <div class='titulo'><?= $titulo ?></div>
  <form id="<?=$form ?>" action="<?= $pageAtual ?>" method="post">
  Lista de Backups:&nbsp;&nbsp;<?= $resposta?>
  <? $rotinaClass->menu_rotinas_superior(); ?>
  <table class="TableLista" border='0' cellpadding='0' cellspacing='2'>
   <tr class='cabecalho'>
	 <td class='Sels' title='Clique aqui para selecionar ou remover a seleção de todos os itens.'><input type="checkbox" class='checkbox Todos' name="sels[]"/></td>
	 <td>Título</td>
     <td>Data</td>
     <td>Tamanho</td>
     <? $rotinaClass->menu_rotinas_cabecalho(); ?>
   </tr>
   <?= $lista ?>
 </table>
 Diretório Base: <?=DIR_BACKUP ?>
 </form>
</div>
<? require_once("rodape.php") ?>

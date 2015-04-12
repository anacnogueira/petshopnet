<?
/*--------------------------------------------------------'
   SIPAC - Sistema Integrado de Painel de Controle V 2.0  '
 	 Criado por Ana Claudia Nogueira                        '
   Criação 08/09/2007                                     '
   Última Modificação: __/__/____                         '
   Página: calendario.php			                            '
---------------------------------------------------------*/
$pageName = basename(__FILE__);
include("funcoes.php");
$object = $_GET["object"];
$mes    = $_GET["mes"];
$ano    = $_GET["ano"];
if (empty($mes))
{
	$mes = date("m");
	$ano = date("Y");
}

//Array de meses
$arraMes = array("01","Janeiro","02","Fevereiro","03","Março","04","Abril","05","Maio","06","Junho"
,"07","Julho","08","Agosto","09","Setembro","10","Outubro","11","Novembro","12","Dezembro");
//Lista de anos
for($i=2000;$i<=2031;$i++)
{
 if($ano == $i)
  $listaAno .= "<option value='$i' selected='selected'>$i</option>\n";
 else
  $listaAno .= "<option value='$i'>$i</option>\n";
}


$d = mktime(0,0,0,$mes,1,$ano);
$diaSem = date('w',$d);


//Enquanto hover dias
	$listaDias .=  "<tr>\n";
// Coloca os dias em Branco
for($i = 0; $i < $diaSem; $i++)
{

	$listaDias .= "<td>&nbsp;</td>\n";
}
for($i = 2; $i < 33; $i++)
{
	if(date('w',$d) == 0)
	{
	 $listaDias .= "<tr>\n";
	}

	$linha = date('d',$d);
	if($i > 3) {}
	if($linha == date('d'))
	{
		$listaDias .= "<td class='Hoje ListaItem '><a href='#'  onClick=\"fct_ReturnData('".$linha."/".$mes."/".$ano."');\">".$linha."</a></td>\n";
 	}
 else
 {
   $listaDias .= "<td class='ListaItem'><a href='#' onClick=\"fct_ReturnData('".$linha."/".$mes."/".$ano."');\">".$linha."</a></td>\n";
 }
	// Se Sábado desce uma linha
  if (date('w',$d) == 6)
	{
		$listaDias .= "</tr>\n";
	}

	$d = mktime(0,0,0,$mes ,$i, $ano);
	if(date('d',$d) == "01")
	{
		break;
	}
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>::SIPAC - Calendário::</title>
<link href='../templates/sipac.css' rel='stylesheet' type='text/css' />
<link href='../templates/calendario.css' rel='stylesheet' type='text/css' />
<script type='text/javascript' src='../js/funcoes.js'></script>
<script type="text/javascript">
function fct_ReturnData(objData)
{
 parent.opener.document.forms[0].<?= $object ?>.value = objData;
 top.close();
}
</script>
</head>
<body>
<form name="frm_calendar" action="<?=$pageName ?>" method="get">
<table  border="0" cellpadding="0" cellspacing="0" class="tabCalendario">
	<tr class='cabecalhoCalendario'>
	<td colspan="4">
	<a href="<?=$pageName?>?mes=<?=($mes-1)?>&amp;ano=<?=$ano ?>&amp;object=<?=$object ?>">&laquo;</a>
     <select name="mes" onchange="this.form.submit()">
      <?=fct_Array2_MontarLista($arraMes,$mes) ?>
     </select>
  <a href="<?=$pageName?>?mes=<?=($mes+1)?>&amp;ano=<?=$ano ?>&amp;object=<?=$object ?>">&raquo;</a>
  </td>
  <td colspan="3" >
   <a href="<?=$pageName?>?mes=<?=$mes?>&amp;ano=<?=($ano-1) ?>&amp;object=<?=$object ?>">&laquo;</a>
   <select name="ano" onchange="this.form.submit()">
     <?= $listaAno ?>
   </select>
   <a href="<?=$pageName?>?mes=<?=$mes?>&amp;ano=<?=($ano+1) ?>&amp;object=<?=$object ?>">&raquo;</a>
  </td>
 </tr>
 <tr class='cabecalhoCalendario'>
  <td>Dom</td>
  <td>Seg</td>
  <td>Ter</td>
  <td>Qua</td>
  <td>Qui</td>
  <td>Sex</td>
  <td>S&aacute;b</td>
 </tr>
 <?=$listaDias ?>
</table>
<input type="hidden" name="object" value="<?=$object?>" />
</form>
</body>
</html>

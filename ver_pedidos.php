<?
  $title = "Meus Pedidos";
  require_once("lib/configs.php");
  require_once("lib/sessao.php");

  $clientes_id    = $_SESSION["xxClientesIDxx"];
  $ped_tipo       = $_POST["ped_tipo"];
  $pedidos_numero = $_POST["pedidos_numero"];
  $mes_ini        = $_POST["mes_ini"];
  $ano_ini        = $_POST["ano_ini"];
  $mes_fim        = $_POST["mes_fim"];
  $ano_fim        = $_POST["ano_fim"];
  // Verificar se o cliente já possui pedidos
  $SQL = "SELECT
            ped.pedidos_id,
            clientes_email,
            data_compra,
            formas_pagamento_desc,
            valor_total,
            pedidos_status_nome
          FROM
            pedidos ped
          INNER JOIN clientes cl
          ON cl.clientes_id = ped.clientes_id
          INNER JOIN pedidos_status ps
          ON ps.pedidos_status_id = ped.pedidos_status_id
          INNER JOIN formas_pagamento fp
           ON fp.formas_pagamento_id  = ped.formas_pagamento_id
          INNER JOIN pedido_total pt
          ON pt.pedidos_id = ped.pedidos_id
         WHERE ped.clientes_id='$clientes_id'";
   if(!empty($pedidos_numero))
		$SQL .= " AND ped.pedidos_id = '".mysql_real_escape_string($pedidos_numero)."'";

   $SQL .= " ORDER BY ped.pedidos_id DESC LIMIT 1";
   $result = $conn->sql($SQL);
   $cont = mysql_num_rows($result);
   if($cont != 0)
   {
    $pedidos_id            =  mysql_result($result,0,"pedidos_id");
    $clientes_email        =  mysql_result($result,0,"clientes_email");
    $data_compra           =  fct_conversorData(left(mysql_result($result,0,"data_compra"),10),1);
    $formas_pagamento_desc =  mysql_result($result,0,"formas_pagamento_desc");
    $valor_total           =  number_format(mysql_result($result,0,"valor_total"), 2, ",", ".");
    $pedidos_status_nome   =  mysql_result($result,0,"pedidos_status_nome");

    $SQL = "SELECT produtos_nome
    FROM pedidos_produtos pd
    INNER JOIN produtos prod ON prod.produtos_codigo = pd.produtos_codigo
    WHERE pedidos_id='$pedidos_id'";
    $result = $conn->sql($SQL);
    while($linha = mysql_fetch_array($result))
     $listaProdutos .= $linha["produtos_nome"]."<br />";
   }
 $mes = date("m");

 require_once("topo.php");

 require_once("login_topo.php");
 require_once("busca.php");
 //require_once("categorias.php");
 //require_once("parceiros.php");
?>
<!-- Meus Pedidos -->
<script type='text/javascript' src='js/pedidos.js'></script>
<div id="conteudo" class='interna'>
<span class='back'><a href="#" onclick="history.go(-1)"><img src="banco_imagens/btn_voltar.gif" alt="Voltar" border="0" /></a></span>
 <h1><?=$title ?></h1>
 <? if($cont == 0) { ?>
    <br />
    <div class='bordaForm'>
    Você ainda não fez nenhum pedido.
    </div>
    <? } elseif(isset($_REQUEST["btn_pesquisar"]) or isset($_POST["btn_pesquisar_x"])) { ?>
    <br /><table border="0" class='tbl_pedidos' cellspacing='0'>
    <tr class='cabecalho_especial'>
      <td>Nº do pedido</td>
      <td>Data</td>
      <td>Total R$</td>
      <td>Forma de Pagamento</td>
			<td>Status</td>
    </tr>
   <?
     $SQL = "SELECT p.pedidos_id, p.data_compra,
			pt.valor_total, f.formas_pagamento_desc,ps.pedidos_status_nome
			FROM pedidos p
			INNER JOIN pedido_total pt ON pt.pedidos_id = p.pedidos_id
			INNER JOIN formas_pagamento f ON f.formas_pagamento_id = p.formas_pagamento_id
			INNER JOIN pedidos_status_historico psh ON psh.pedidos_id = p.pedidos_id
			INNER JOIN pedidos_status ps ON ps.pedidos_status_id = psh.pedidos_status_id
			WHERE p.clientes_id = '".$clientes_id."'";
     switch($ped_tipo)
     {
      case 1: //Pedidos Abertos
		$SQL .= " AND psh.pedidos_status_id = '1'";
      break;
       case 3: //Número do pedido
      if(!empty($pedidos_numero))
       $SQL .= " AND p.pedidos_id = '".mysql_real_escape_string($pedidos_numero)."'";
      break;
      case 4: //Pesquisa por data
      $dia_ini = 1;
      $dia_fin = date("t", mktime(0, 0, 0, $mes_fim, 1, $ano_fim));
      $dataIni = mktime(0,0,0,$mes_ini,$dia_ini,$ano_ini);
      $dataFin = mktime(0,0,0,$mes_fim,$dia_fin,$ano_fim);
      if($dataFin < $dataIni )
			 return false;
			else
			 $SQL .= " AND (p.data_compra BETWEEN '$ano_ini-$mes_ini-$dia_ini' AND '$ano_fim-$mes_fim-$dia_fin')";
      break;

     }
     $SQL   .= " ORDER BY p.data_compra DESC";
	   //echo $SQL;
		 $result = $conn->sql($SQL);
		 $i = 0;
		 while($pedido = mysql_fetch_array($result))
		 {

		?>
    <tr class='stripe'>
      <td><a href='ver_pedidos.php?pedidos_numero=<?=$pedido["pedidos_id"] ?>'><?=$pedido["pedidos_id"] ?></a></td>
      <td><?=fct_conversorData(left($pedido["data_compra"],10),1) ?></td>
      <td><?=number_format($pedido["valor_total"],2,",",".") ?></td>
      <td><?=$pedido["formas_pagamento_desc"] ?></td>
			<td><?=$pedido["pedidos_status_nome"] ?></td>
    </tr>
    <?
     $i++;
    }
    ?>
		</table>
		<?} else { ?>
    <div class='bordaForm last_order'>
    N° do Pedido: <strong><?=$pedidos_id ?></strong><br />
    Status:       <strong><?=$pedidos_status_nome ?></strong><br />
    Forma de pagamento: <strong><?=$formas_pagamento_desc ?></strong><br />
    <?=$listaProdutos ?>
    Data da compra:  <strong><?=$data_compra ?></strong><br />
    Valor Total:     <strong>R$ <?=$valor_total ?></strong><br />
    </div>
    <p class='conf_order'> A confirmação do seu pedido foi enviada para o e-mail <strong><?=$clientes_email ?></strong></p>
    <div class='choose_orders'>
    <h1>Consultar outros pedidos</h1>
    <form id="frm_pedidos" action="<?=$pageName ?>" method="post" style='width:390px'>
     <div class="bordaForm">
      <p><input name="ped_tipo" type="radio" value="1" class="radio" /> Pedidos Abertos</p>
      <p><input name="ped_tipo" type="radio" value="2" class="radio" /> Todos Pedidos</p>
      <p><input name="ped_tipo" type="radio" value="3" class="radio" /> Pesquisa por Número do Pedido: <input name="pedidos_numero" type="text" /></p>
      <p>
        <input name="ped_tipo" type="radio" value="4" class="radio" />
        Pesquisar por data(mês/ano) de: <br />
         <select name="mes_ini"><?=fct_array_foreach(meses_anos(),$mes) ?></select>
         <select name="ano_ini">
         <?
           for($i = 2008;$i <= date('Y');$i++)
            echo "<option value='$i'".($i == date('Y')?" selected='selected'":'').">$i</option>";
         ?>
         </select>
         até
         <select name="mes_fim"><?=fct_array_foreach(meses_anos(),$mes) ?></select>
         <select name="ano_fim">
           <?
           for($i = 2008;$i <= date('Y');$i++)
              echo "<option value='$i'".($i == date('Y')?" selected='selected'":'').">$i</option>";
           ?>
         </select>
        </p>
       </div><br />
     <input name="btn_pesquisar" type="image" src="banco_imagens/btn_procurar.gif" class="noBorder btn" value="Procurar" />
   </form>
  </div>
 <? } ?>
</div>
<? require_once("rodape.php"); ?>

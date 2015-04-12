<?
/*--------------------------------------------------------'
   SIPAC - Sistema Integrado de Painel de Controle V 2.0  '
 	 Criado por Ana Claudia Nogueira                        '
   Criação 04/09/2007                                     '
   Última Modificação: __/__/____                         '
   Página: index.php			                                '
---------------------------------------------------------*/
 $allowRotina = "nao";
 require_once("lib/configs.php");
 //1. Verificar se o usuário tem permissão especial
 if($_SESSION[EMPRESA]["autorizacao"] == 1)
 {
  $campo_tipo = "users_id";
  $codMenu 		= $_SESSION[EMPRESA]["codUser"];
 }
 else
 {
  $campo_tipo = "grupos_id";
  $codMenu 		= $_SESSION[EMPRESA]["codGrupo"];
 }
//2. Módulos do usuário
 $SQL = "SELECT
   modulos.modulos_id,
	 modulos_nome,
   tipo_autorizacao
   FROM
   modulos
	 INNER JOIN autorizacoes
	 ON  autorizacoes.modulos_id = modulos.modulos_id
	 WHERE $campo_tipo='".$codMenu."'
    AND (tipo_autorizacao=1 OR tipo_autorizacao=2)
    ORDER BY modulos_id";
 $result = $conn->sql($SQL);
 while($linha = mysql_fetch_array($result))
   {
     $listaModulos .=" <li>".$linha["modulos_nome"]."\r\n";

     $SQL2 = "SELECT DISTINCT
              submodulos.submodulos_id,
              submodulos_nome,
              submodulos_pagina
             FROM
              submodulos
              LEFT JOIN autorizacoes
              ON  autorizacoes.submodulos_id = submodulos.submodulos_id
             WHERE
               submodulos.modulos_id = '".$linha["modulos_id"]."'
              AND  $campo_tipo='".$codMenu."'";
     if($linha["tipo_autorizacao"] == 2)
     {
      $SQL2 .=" AND (tipo_autorizacao=1 OR tipo_autorizacao=2)
      AND $campo_tipo='".$codMenu."'";
     }

     $result2 = $conn->sql($SQL2);
     $recordCount = mysql_num_rows($result2);

     if($recordCount > 0)
     {
      $listaModulos .= "   \n<ul>\n";
      while($linha2 =  mysql_fetch_array($result2))
      {
       $listaModulos .="     <li><a href='".$linha2["submodulos_pagina"]."'>".$linha2["submodulos_nome"]."</a></li>\n";
      }
      $listaModulos .= "   </ul>\n";
     }
     $listaModulos .= "  </li>\n";

   }
   $listaModulos .= " </ul>\n";
 
  //3. Seleciona o total de pedidos
 $SQL = "SELECT
 					ps.pedidos_status_nome,
					IF(pedidos_id IS NULL,ps.pedidos_status_id,p.pedidos_status_id) as status_id,
					COUNT(p.pedidos_id) as total
 					FROM pedidos_status ps
					LEFT JOIN pedidos p
					ON p.pedidos_status_id = ps.pedidos_status_id
					GROUP BY status_id";
 $result2 = $conn->sql($SQL);
 $arraPedidos = array();
 while($linha = mysql_fetch_array($result2))
 {
   $arraPedidos[$linha['status_id']] = $linha["total"];
   $totalPedidos += $linha["total"];
 }

 //4. Total de clientes cadastrados
 $SQL = "SELECT COUNT(*) as total_clientes FROM clientes";
 $result = $conn->sql($SQL);
 while($linha = mysql_fetch_array($result))
  $total_clientes = $linha[0];

 //5. Total de Produtos
 $SQL = "SELECT COUNT(*) as total_produtos FROM produtos";
 $result = $conn->sql($SQL);
 while($linha = mysql_fetch_array($result))
  $total_produtos = $linha[0];

 //6. Total de Comentarios
 $SQL = "SELECT COUNT(*) as total_comentarios FROM comentarios WHERE comentarios_nota IS NOT NULL";
 $result = $conn->sql($SQL);
 while($linha = mysql_fetch_array($result))
  $total_comentarios = $linha[0];

  //Transações PagSeguro
  $sql = "SELECT COUNT(*) FROM transacoes tra WHERE transacao_id != ''";
  $result = $conn->sql($sql);
  $num_pg = mysql_result($result,0,0);

 require_once("topo.php");
?>
<div id="conteudo_index">
  <ul id="box">
	<li><strong>Pedidos</strong>
	 <ul>
	   <!--li><a href="pedidos_listar.php?status=1">Pendente: </a><?=$arraPedidos[1] ?></li>
	   <li><a href="pedidos_listar.php?status=2">Precessando: </a><?=$arraPedidos[2] ?></li>
	   <li><a href="pedidos_listar.php?status=3">Enviado: </a><?=$arraPedidos[3] ?></li>
	   <li><a href="pedidos_listar.php?status=4">Cancelado:</a> <?=$arraPedidos[4] ?></li-->
     <li><a href="transacoes_listar.php">Transações PagSeguro:</a> <?=$num_pg; ?></li>
	   <!--li>Total: <?=$totalPedidos ?></li-->
	 </ul>
	</li>
	<li><strong>Estatísticas</strong>
   <ul>
	   <li>Clientes: <?=$total_clientes ?></li>
	   <li>Produtos: <?=$total_produtos ?></li>
	   <li>Comentários: <?=$total_comentarios ?></li>
   </ul>
	</li>
</ul>
 <ul id="nav">
<?= $listaModulos ?>
</div>
<? require_once("rodape.php") ?>



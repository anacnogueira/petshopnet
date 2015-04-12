<?
  $title = "Catálogo de Endereços";
  require_once("lib/configs.php");
  
	$clientes_id = $_SESSION["xxClientesIDxx"];
  $SQL  = "SELECT
             clientes_end_id,
             clientes_end_nome,
             clientes_logradouro,
             clientes_numero,
             clientes_complemento,
             clientes_bairro,
             clientes_cidade,
             clientes_uf,
             clientes_cep,
             clientes_pri
          FROM
            clientes_end
          WHERE clientes_id = '$clientes_id'";

   $result = $conn->sql($SQL);
   $cont = 1;
   if(mysql_num_rows($result) > 0)
   {
    $listaEnd .= "<tr>\n";
    while($linha = mysql_fetch_array($result))
    {
     $principal = "";
     if($linha["clientes_pri"] == 1)
      $principal  = "(<em>Endereço de entrega</em>)";

     $listaEnd .= "<td><strong>".$linha["clientes_end_nome"]."</strong><br />";
		 $listaEnd .= $linha["clientes_logradouro"].", ".$linha["clientes_numero"]." ".$principal."<br />\n";
     $listaEnd .= (!empty($linha["clientes_complemento"])?$linha["clientes_complemento"]." - ":"").$linha["clientes_bairro"]."<br />\n";
     $listaEnd .= $linha["clientes_cep"]."<br />\n";
     $listaEnd .= $linha["clientes_cidade"]." - ".$linha["clientes_uf"]."<br /><br /></td>\n";
     $listaEnd .= "<td><a href='alterar_enderecos.php?id=".$linha["clientes_end_id"]."'><img src='banco_imagens/btn_editar_end.gif' alt='Editar' /></a>";
     $listaEnd .= " <a href='excluir_enderecos.php?id=".$linha["clientes_end_id"]."'><img src='banco_imagens/btn_delete_end.gif' alt='Apagar' /></a></td>\n";

    if ($cont > 0 && $cont % 2 == 0)
     $listaEnd .= "</tr><tr>";

    $cont++; "</tr>\n";
  }
 }
 
 require_once("topo.php");
 require_once("lib/sessao.php");
 require_once("login_topo.php");
 require_once("busca.php");
 //require_once("categorias.php");
 //require_once("parceiros.php");
?>
<!-- Catálogo de endereços-->
<div id="conteudo" class="interna">
 <span class='back'><a href="meu_cadastro.php"><img src="banco_imagens/btn_voltar.gif" alt="Voltar" border="0" /></a></span>
 <h1><?=$title ?></h1>
 <p>Estes endereços são utilizados para a entrega de seus pedidos</p><br />
 <p class="alert"><?= $_SESSION["msg_operacao_end"] ?></p>
 <strong>Lista de Endereços</strong>
 <table class="bordaForm light" style='width:100%' border="0" cellpadding="0" cellspacing="0" >
 	<?=$listaEnd ?>
 </table>
 <br /><a href="inserir_end.php"><img src='banco_imagens/btn_novo_end.gif' alt='Inserir Novo Endereço' class='btn' /></a>
</div>
<? require_once("rodape.php"); ?>
<? unset($_SESSION['msg_operacao_end']) ?>

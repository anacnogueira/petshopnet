<?
  $title = "Mapa do site";
  require_once("lib/configs.php");

  require_once("topo.php");
  require_once("login_topo.php");
	require_once("busca.php");
	//require_once("categorias.php");
	//require_once("parceiros.php");
?>
<!-- Mapa do Site -->
<div id="conteudo" class="interna">
 <h1>Mapa do site</h1>
 <h2>Loja</h2>
 <div class="mapa">
 	<ul>
   <?
     $SQL = "SELECT categorias_id,categorias_descricao  FROM categorias WHERE parent_id = 0";
     $result = $conn->sql($SQL);
     while($dados1 = mysql_fetch_array($result))
     {
			 $i = 0;
			 echo "<li><a href='produtos_categorias.php?categorias_id=".$dados1["categorias_id"]."&amp;cat=".urlencode($dados1["categorias_descricao"])."'><strong>".$dados1["categorias_descricao"]."</strong></a>";
			 $SQL = "SELECT categorias_id,categorias_descricao  FROM categorias WHERE parent_id = '".$dados1["categorias_id"]."'";
   		 $result2 = $conn->sql($SQL);
			 $recordCount = mysql_num_rows($result2);
			 if($recordCount > 0)
			 {
				echo "<ul>";

				while($dados2 = mysql_fetch_array($result2))
				{
				 $i++;
   			 echo "<li".($i == $recordCount?" class='last'":'')."><a href='produtos_categorias.php?categorias_id=".$dados2["categorias_id"]."&amp;cat=".urlencode($dados2["categorias_descricao"])."'>".$dados2["categorias_descricao"]."</a>";
				}
				 echo "</ul>";
			 }
			 echo "</li>";
     }
   
   ?>
 	</ul>
 	<h2>Central de Atendimento</h2>
 	<ul>
 		<li><strong>Seus Dados </strong>
  		<ul>
				<li><a href='cadastro.php'>Cadastre-se</a></li>
  			<li><a href='alterar_cadastro.php'>Alterar Dados Cadastrais</a></li>
  			<li><a href='alterar_senha.php'>Alterar Senha</a></li>
  			<li><a href='senha_esquecida.php'>Esqueci a senha</a></li>
  			<li><a href='catalogo_enderecos.php'>Alterar Endereços de entrega</a></li>
  			<li><a href='meu_carrinho.php'>Meu Carrinho</a></li>
  			<li class="last"><a href='ver_pedidos.php'>Meus Pedidos</a></li>
  	 </ul>
  	</li>
		<li><strong>Dúvidas</strong>
			<ul>
	  		<li><a href='faq.php'>FAQ</a></li>
    		<li class="last"><a href='fale_conosco.php'>Fale Conosco</a></li>
   		</ul>
		</li>
  </ul>
 </div>
</div>
<? require_once("rodape.php"); ?>


<?
  $title = "Meu Cadastro";
  require_once("lib/configs.php");
  require_once("lib/sessao.php");

  require_once("topo.php");

  require_once("login_topo.php");
	require_once("busca.php");
	//require_once("categorias.php");
	//require_once("parceiros.php");
?>
<!-- Quem Somos -->
<div id="conteudo" class="interna cadastro">
 <h1>Meu Cadastro</h1>
	 <p class="alert"><?=$_SESSION["msg_operacao"] ?></p>
	 <ul>
      <li><a href="alterar_cadastro.php">Alterar Cadastro</a></li>
      <li><a href="alterar_senha.php">Alterar Senha</a></li>
      <li><a href="catalogo_enderecos.php">Catálogo de Endereços</a></li>
     </ul>
     <br />
     <h1>Meus Pedidos</h1><br />
		 <ul>
      <li><a href="ver_pedidos.php">Visualizar Pedidos</a></li>
		 </ul>
		 <br />
		 <h1>Notificações por e-mail</h1> <br />
		 <ul>
		 	<li><a href="mala_direta.php">Assinar/Cancelar newsletter</a></li>
		 </ul>
</div>
<? require_once("rodape.php"); ?>
<?
 /*--------------------------------------------------------'
   SIPAC - Sistema Integrado de Painel de Controle V 2.0  '
 	 Criado por Ana Claudia Nogueira                        '
   Criação 27/12/2007                                     '
   Última Modificação: 16/10/2009                         '
   Página: newsletters_enviar.php                         '
---------------------------------------------------------*/
 $form        = "frm_news";
 require_once("lib/configs.php");
 $titulo 	  = $rotinaClass->menu_rotinas_titulo("");
 $link   	 = "newsletters_listar.php";
 $sels        = $_REQUEST["sels"];
 
 if(is_array($sels)) $sels = $sels[0];
 
 $cols        = 2;
 $x           = 1;
 if(isset($_REQUEST["btn_enviar"]) or isset($_REQUEST["global"]))
 {
   $newsletters_modulo    = $_REQUEST["newsletters_modulo"];
   $newsletters_titulo    = $_REQUEST["newsletters_modulo"];
   $newsletters_conteudo  = $_REQUEST["newsletters_conteudo"];
   $arraClientes          = $_REQUEST["arraClientes"];
   $produtos_selected     = $_REQUEST["produtos_selected"];
   $global                = $_REQUEST["global"];

	if(!empty($produtos_selected))
	 $arraProdutos = implode(",",$produtos_selected);
   
  //Montar o corpo do e-mail
  //produto
    $sql_produto = "SELECT DISTINCT p.produtos_nome, p.produtos_preco, p.produtos_imagem,
	pr.promocoes_preco, expira_data, pr.promocoes_status,MAX(pc.categorias_id) categorias_id,
    (SELECT parent_id FROM categorias WHERE categorias.categorias_id = pc.categorias_id) AS parent_id
	FROM produtos p
    INNER JOIN produtos_categoria pc ON pc.produtos_id = p.produtos_id
    LEFT JOIN promocoes pr ON  pr.produtos_id = p.produtos_id";

	if(empty($global) or $global != true)
  	  $sql_produto .= " WHERE p.produtos_id IN($arraProdutos)";

    $sql_produto .= " GROUP BY p.produtos_id";
	
	//clientes
	$sql_cliente = "SELECT cl.clientes_id,cl.clientes_nome, cl.clientes_email FROM	clientes cl";
  
    if($modulo == "email_notificacao" )
    {
       $sql_cliente .=  " INNER JOIN  produtos_notificacoes pn ON cl.clientes_id = pn.clientes_id";
  
       if(empty($global) or $global != true)
  		  $sql_cliente .= " WHERE pn.produtos_id IN($arraProdutos)";
   }
   elseif($modulo == "newsletter")
      $sql_cliente .= "  WHERE clientes_newsletter='1'";
   
   $result = $conn->sql($sql_produto);
   $listaProduto = "<table>";
   while($produto = mysql_fetch_array($result))
   {
        if($x == 1)
    	$listaProduto .= "<tr>\n";

    	$produtos_imagem = $produto["produtos_imagem"];
    	$name            = substr($produtos_imagem,0,strlen($produtos_imagem)-4);
    	$ext             = substr($produtos_imagem,-4);
    	$img = $name.".thumb".$ext;

    	$produtos_id          = $produto["produtos_id"];
    	$produtos_nome        = $produto["produtos_nome"];
    	$produtos_descricao   = $produto["produtos_descricao"];
    	$fornecedores_nome    = $produto["fornecedores_nome"];
    	$produtos_preco_bruto = "R$". number_format($produto["produtos_preco"],"2",",",".");
    	$promocoes_novo_preco = "R$". number_format($produto["promocoes_preco"],"2",",",".");
    	$expira_data          = $produto["expira_data"];
    	$promocoes_status_id  = $produto["promocoes_status"];

    	if(!empty($promocoes_preco) and ($expira_data == NULL or data_vencimento($expira_data)) and $status_id == 1)
    	{
    	   $produtos_preco  = "De <span class='preco_old'>  $produtos_preco.</span><br />";
    	   $promocoes_preco = "Por <span class='preco_promo'> R$ $promocoes_preco</span>";
    	}
     	else
     	 $promocoes_preco = "";
     		
   		$listaProduto .= "  <td><a href='".URL."/produto_info.php?produtos_id=".$produtos_id."&amp;parent_id=".$linha["parent_id"]."&amp;id_cat=".$produto["categorias_id"]."'>\n";
   		$listaProduto .= "    <img src='".URL."/".DIR_PRODUTOS.$img."' title='".$produtos_nome."' alt='".$produtos_nome."' border='0' /><br />\n";
   		$listaProduto .=      $produtos_nome."<br />\n";
   		$listaProduto .=      $produtos_preco."\n";
   		$listaProduto .=      $promocoes_preco."\n";
   		$listaProduto .=   "</a></td>\n";

	 	if($x == $cols)
   		{
      	   $listaProduto .= "</tr>\n";
      	   $x = 0;
    	}
        $x++;

  		if($x != $cols and $x != 1)
  		{
    			$listaProduto .= "<td>&nbsp;</td>\n";
    			$listaProduto .= "</tr>\n";
    			$x = 0;
   		}
	}

	$result = $conn->sql($sql_cliente);
	while($cliente = mysql_fetch_array($result))
	{
		$from      ='no-reply@'.str_replace("http://www.","",URL);
    $to        = $cliente["clientes_email"];
    $nome      =  $cliente["clientes_nome"];
    $subject   = EMPRESA."- $news_titulo";
    $html      = "<p><strong>$nome</strong></p>";
    $html 		.=	 $conteudo;
    if(isset($listaProduto) and !empty($listaProduto))
    {
     	 	$html    .= $listaProduto;

       $html .= "<br /><p style='font-size: 10px'>";
       $hrml .= "O PetShopNet é contra prática de spam. Também não vende ou fornece seus
       dados a terceiros. A PetShopNet  respeita a privacidade do consumidor de receber somente
       e-mails que tenha permitido.Você esta recebendo este e-mail porquê permitiu seu envio.
       Caso queira cancelar o envio de futuras promoções,
       <a href='http://localhost/petshopnet/newsletteroff.php?cod=".$cliente["clientes_id"]."'>Clique aqui</a></p>";
    }
       fct_EnvioMail_smtp($to,$from,$cc,$bcc,$subject,$html);

   }
  
  //Modifica o status da newsletter como enviada
  $sql = "UPDATE newsletters SET newsletters_enviado = 'S' WHERE newsletters_id='$sels'";
  $result = $conn->sql($sql);
  
  $mensagem_log = " Newsletter enviada com sucesso($sels).";
  createLog('',$pageAtual,'',$mensagem_log);
  header("location: $link");
 }
 else
 {
   //1. Seleciona o módulo
   $sql   = "SELECT * FROM newsletters WHERE newsletters_id='".$sels."'";
   $result = $conn->sql($sql);
   while($linha = mysql_fetch_array($result))
   {
     $newsletters_modulo      = $linha["newsletters_modulo"];
     $newsletters_titulo      = $linha["newsletters_titulo"];
     $newsletters_conteudo    = $linha["newsletters_conteudo"];
     $html  = "<p><strong>".$newsletters_titulo."</strong></p><br />";
     $html .= html_entity_decode($newsletters_conteudo)."<br /><br />";
   }
   

   //2. Veirifica se é newsletter ou notificação
   if($newsletters_modulo == "newsletter")
   {
     //Qtde de usuários que desejam receber a newsletter
     $sql_cli = " SELECT clientes_id FROM clientes WHERE clientes_newsletter='1'";
    //$html .= "<input name='btn_enviar'   type='submit' value='Enviar' />\n";
   }
   elseif($newsletters_modulo == "email_notificacao")
   {
     $sql_cli = "SELECT cl.clientes_id FROM clientes cl
    INNER JOIN  produtos_notificacoes pn ON pn.clientes_id = cl.clientes_id";
   }
   
   //Montar a tabela de produtos
   $sql    = "SELECT produtos_id,produtos_nome FROM produtos WHERE produtos_status = 'S'";
   $result =  $conn->sql($sql);
   $html  .= "<div class='div_produtos'>\n";
   $html  .= "<select size='20' name='produtos' multiple='multiple' class='select_mult'>\n";
   
   while($produtos = mysql_fetch_array($result))
     $html  .= "<option value='".$produtos[0]."'>".$produtos[1]."</option>\n";
   
    $html  .= "</select>\n";
    $html  .= "</div>\n";
   
   //Produtos selecionados
   $html  .= "<div class='div_produtos_select'>\n";
   $html  .= "<select size='20' name='produtos_selected[]' multiple='multiple' class='select_mult'>\n";

	  $html  .= "</select>\n";
    $html  .= "</div>\n";

    //Botoes
    $html  .= "<div class='div_btns'>\n";
    $html .= "<input name='btn_global'   type='button' value='Global' onclick='global(this.form)' /><br />\n";
    $html .= "<input name='btn_inserir'  type='button' value='Remover'   class='mover' /><br />\n";
    $html .= "<input name='btn_retirar'  type='button' value='Adicionar' class='mover' /><br />\n";
    $html .= "<input name='btn_cancelar' type='button' value='Cancelar' onclick=\"cancelar('$link')\"/><br />\n";
    $html .= "<input name='btn_enviar'   type='submit' value='Enviar' />\n";
    $html  .= "</div>\n";
  
    //Notificação de produtos por e-mail
    $result = $conn->sql($sql_cli);
    echo $newsletters_modulo;
    $totClientes = mysql_num_rows($result);
    while($clientes = mysql_fetch_array($result))
      $arraClientes .= $clientes[0].", ";

   $arraClientes = rtrim($arraClientes,", ");
 }
 require_once("topo.php");
 require_once("menu_lateral.php");
 ?>
<div id="conteudo">
<script type='text/javascript' src='js/newsletters.js'></script>
 <div class='titulo'><?= $titulo ?></div>
 <a href="<?=$link?>"> <img src='<?= DIR_BTNS ?>btn_voltar.gif' border='0' alt='voltar' /></a><br />
 <form id="<?=$form ?>" action="<?= $pageAtual ?>" method="post" enctype="multipart/form-data">
  <p>Usuários que irão receber a newsletter: <?=$totClientes ?></p><br />
  <?=$html ?>
   <input name="newsletters_modulo" type="hidden" value="<?=$newsletters_modulo ?>" />
   <input name="arraClientes" type="hidden" value="<?=$arraClientes ?>" />
   <input name="newsletters_modulo" type="hidden" value="<?=htmlspecialchars($newsletters_modulo, ENT_QUOTES) ?>" />
   <input name="newsletters_conteudo" type="hidden" value="<?=htmlspecialchars($newsletters_conteudo, ENT_QUOTES) ?>" />
   <input name="sels" type="hidden" value="<?=$sels?>" />
  </form>
</div>
<? require_once("rodape.php") ?>

<?php
 $title = "Meu Carrinho";
 require_once("lib/configs.php");
 require_once("lib/class.carrinho.php");
 require_once("lib/pgs.php");

 $campo    = format_array($_REQUEST);
 $carrinho = new carrinho();

 if(!empty($campo["acao"])){
  switch($campo["acao"]){
    case "adicionar":
      $carrinho->adicionar($campo["produtos_codigo"]);
      break;
    case "remover":
      $carrinho->remover($campo["produtos_codigo"]);
      break;
    case "atualizar":
      $arra_result = $carrinho->atualizar($campo["qtde"],$campo["cep_destino"]);
      $frete = $arra_result["Valor"];
      if(!empty($arra_result["PrazoEntrega"])){
        $entrega = $arra_result["PrazoEntrega"] == 1 ? " 1 dia útil" : $arra_result["PrazoEntrega"]." dias úteis";
      }
      else
        $entrega = "";

      break;
    default:
      print "Ação desconhecida";
      exit;
  }
 }

 $produtos = $carrinho->getItens(array("produtos_nome","produtos_preco","c.produtos_quantidade","c.produtos_codigo","produtos_peso"));
 $qtde_produto = count($produtos);

 //Iniciados Valores PagSeguro
 $pgs  =  new pgs(array(
  'email_cobranca' => "petshopnet@petshopnet.com.br",
  'tipo'=>'CP',
  'ref_transacao'  => date('YmdHis'),
  'moeda' => 'BRL'
  ));

 if(!empty($frete)){
     $x = str_replace(",",".",$frete);
      $y = number_format($x,"2",".","");
      $z = str_replace(".","",$y);

    foreach($produtos as $produto) {

      //Adicionando um produto
      $pgs->adicionar(array(
        array(
          "descricao" => $produto["produtos_nome"],
          "valor" => $produto["produtos_preco"],
          "peso" => (int)($produto["produtos_peso"]*100),
          "quantidade" => $carrinho->getQtde($produto["produtos_codigo"]),
          "id" => $produto["produtos_codigo"],
          "frete" => $z 
        )));
       //Enviar CEP do cliente
       $pgs->cliente(array ('cep'=>$campo["cep_destino"]));

    }
  }

 require_once("topo.php");
 require_once("login_topo.php");
 require_once("busca.php");
 //require_once("categorias.php");
 //require_once("parceiros.php");
?>
<!--Meu Carrinho  -->
<script type="text/javascript" src="js/jquery.numeric.pack.js"></script>
<script type='text/javascript' src='js/jquery.maskedinput-1.2.2.min.js'></script>
<script type='text/javascript' src='js/carrinho.js'></script>
<div id="conteudo" class="interna">
<span class='back'><a href="#" onclick="history.go(-1)"><img src="banco_imagens/btn_voltar.gif" alt="Voltar" border="0" /></a></span>

<?//= progressoCompra($pageAtual) ?>
 <h1><?=$title ?></h1>
  <? if(count($produtos) > 0) { ?>
    <form id="frm_carrinho" action="meu_carrinho.php?acao=atualizar" method="post" >

      <table border="0" class='tbl_carrinho' cellspacing='0'>
        <tr class='cabecalho_especial'>
          <td>DESCRI&Ccedil;&Atilde;O</td>
          <td>QTDE</td>
          <td>REMOVER</td>
		      <td>PRE&Ccedil;O UNIT&Aacute;RIO</td>
          <td>VALOR TOTAL</td>
        </tr>
        <?php
          foreach($produtos as $produto) {
            $valor_total += $produto["produtos_quantidade"] * $produto["produtos_preco"];
       ?>
          <tr class='stripe'>
            <td><?php print $produto["produtos_nome"] ?></td>
             <td><input type="text" name="qtde[<?php print $produto["produtos_codigo"]?>]" class="onlyNumbers" value="<?php print $produto["produtos_quantidade"]?>" size="3" maxlength="3" /></td>
             <td><a href='meu_carrinho.php?acao=remover&amp;produtos_codigo=<?php print $produto["produtos_codigo"]?>' class='excluir_um'><img src='<?php print DIR_IMAGENS ?>btn_delete.gif' alt='Remover' title='Remover' /></a></td>
             <td><?php print number_format($produto["produtos_preco"], 2, ',', '.') ?></td>
             <td><?php print number_format($produto["produtos_preco"] * $produto["produtos_quantidade"], 2, ',', '.')?></td>
          </tr>
       <?php
        }
       $valor_total_frete = $valor_total + str_replace(",",".",$frete);
        ?>
       <tr class='total'>
          <td colspan="4"><div>Subtotal</div></td>
          <td><?php print number_format($valor_total,2,",",".") ?></td>
        </tr>
        <tr class='total' style='background: none'>
          <td colspan="4"><div>Frete</div></td>
          <td id="frete"><?php print $frete ?></td>
        </tr>
        <tr class='total' style='background: none'>
          <td colspan="4"><div>Valor Total, incluindo frete</div></td>
          <td><?=number_format($valor_total_frete,2,",",".") ?></td>
        </tr>
        <tr>
          <td colspan="2"><p>Digite o CEP do endereço de entrega para calcular o valor do frete</p></td>
          <td>
            <input name="cep_destino" type="text" size="9" maxlength="9" value="<?=$campo["cep_destino"] ?>" class="cep" />
            <input name="btn_atualizar" type="submit" value="OK" />
          </td>
          <td colspan="3"><?php print !empty($entrega) ? "Prazo de entrega estimado em até ".$entrega : "" ?></td>
        </tr>
      </table>
		 <div class="btns_carrinho">
      <ul>
       <li><a href="index.php"><img src="banco_imagens/btn_continuar.gif" alt="Continuar comprando" border="0" /></a></li>
       <li><a href="meu_carrinho.php?acao=remover" class='excluir_todos'><img src="banco_imagens/btn_limpar.gif" alt="Limpar Carrinho" border="0" /></a></li>
      </ul>
     </div>
      </form>
      <div class="pagseguro">
       <?php $pgs->mostra(array("img_button"=>
            'http://www.petshopnet.com.br/banco_imagens/btn_comprar_pagseguro.jpg')); ?>
      </div>
      <!-- INICIO CODIGO PAGSEGURO -->
<div class="pagamentos_pagseguro">
<a href='https://pagseguro.uol.com.br'><img alt='Logotipos de meios de pagamento do PagSeguro' src='https://p.simg.uol.com.br/out/pagseguro/i/banners/pagamento/avista_estatico_550_70.gif' title='Este site aceita pagamentos com Bradesco, Itaú, Banco do Brasil, Banco Real, Banrisul, saldo em conta PagSeguro e boleto.' border='0' /></a>
</div>
<!-- FINAL CODIGO PAGSEGURO -->

      <? } else {?>
      <div class="carrinho_vazio">
       <p> Seu carrinho está vazio.</p>
       <a href="index.php"><img src="banco_imagens/btn_voltar_loja.gif" alt="Voltar a loja" border="0" /></a>
      </div><br />
      <? } ?>
</div>
<? require_once("rodape.php"); ?>


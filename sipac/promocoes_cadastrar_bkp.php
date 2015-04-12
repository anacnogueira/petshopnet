<?
/*--------------------------------------------------------'
   SIPAC - Sistema Integrado de Painel de Controle V 2.0  '
 	 Criado por Ana Claudia Nogueira                        '
   Criação 04/10/2007                                     '
   Última Modificação: __/__/____                         '
   Página: promocoes_cadastrar.php                        '
---------------------------------------------------------*/

 $pageName    = basename(__FILE__);
 $form        = "frm_promocao";
 require_once("lib/configs.php");
 $titulo 			= $rotinaClass->menu_rotinas_titulo("");
 $link = "promocoes_listar.php";
 
 $SQL_produto = "SELECT produtos_id,produtos_nome FROM produtos WHERE produtos_id NOT IN
 (SELECT produtos_id FROM promocoes)";

 if(isset($_POST["btn_salvar"]))
 {
  $produtos_id   	      = $_POST["produtos_id"];
  $promocoes_novo_preco = $_POST["promocoes_novo_preco"];
  $expira_data          = fct_conversorData($_POST["expira_data"],2);
  //Calcular valor do produto(se necessario)
  if(strpos($promocoes_novo_preco, "%") !== false)
  {

   $promocoes_novo_preco = (rtrim($promocoes_novo_preco,"%"))/100;

    //Seleciona o preço do produto
    $SQL = "SELECT produtos_preco_bruto FROM produtos WHERE produtos_id='$produtos_id'";
    $result = $conn->sql($SQL);
    $produtos_preco_bruto = mysql_result($result,0,0);
    $novo_preco = $produtos_preco_bruto - ($produtos_preco_bruto * $promocoes_novo_preco);
  }
  else
   $novo_preco = $promocoes_novo_preco;

  $novo_preco =  str_replace(",",".",$novo_preco);

  $SQL = "INSERT INTO promocoes(
     produtos_id,
     promocoes_novo_preco,
     promocoes_data_adicionado,
     status_id";
     if(!empty($expira_data))
      $SQL .= ", expira_data";

    $SQL .= " ) VALUES(
     '$produtos_id',
     '$novo_preco',
     NOW(),
     1 ";
    if(!empty($expira_data))
     $SQL .= ",'$expira_data'";

    $SQL .= " )";
    $result=$conn->sql($SQL);
    $promocoes_id = $conn->id();
    $mensagem_log = "Promoção cadastrada com sucesso($promocoes_id).";
    createLog('',$pageName,'',$mensagem_log);
    header("location: $link");
 }

 require_once("topo.php");
 require_once("menu_lateral.php");
 ?>
<div id="conteudo">
 <script type='text/javascript' src='js/promocoes.js'></script>
 <div class='titulo'><?= $titulo ?></div>
 <a href="<?=$link?>"> <img src='banco_imagens/btn_voltar.gif' border='0' alt='voltar' /></a><br />
 <form id="<?=$form ?>" action="<?= $pageName ?>" method="post" onsubmit="return checkform(this)">
   <table class="TableLista">
    <tr>
     <td class='legenda'><label for="produtos_id">Produto:</label></td>
     <td><?= fct_MontarLista($SQL_produto,'',"produtos_id") ?></td>
    </tr>
    <tr>
     <td class='legenda'><label for="promocoes_novo_preco">Preço Especial:</label></td>
     <td><input name="promocoes_novo_preco" type="text" size="30" /></td>
    </tr>
    <tr>
     <td class='legenda'><label for="expira_data">Expira em:</label></td>
     <td>
     <input name="expira_data" type="text" size="10" maxlength="10"  />
        <a href="#" onclick="openCalendar('expira_data')"><img src="banco_imagens/imgCalendario.gif" border="0" alt="Clique para abrir o calendário" align="middle" /></a>
        (dd/mm/aaaa)
     </td>
     <tr class='BarraPag'>
      <td colspan="2" align="right"><input name="btn_salvar" type="submit" value="salvar" /></td>
     </tr>
    </table>
    <h4>Notas Especiais:</h4>
    <ul>
      <li>Você pode entrar com porcentagens para deduzir no preço do produto, por exemplo: 20%</li>
      <li>Deixe o campo de expiração em branco caso a promoção não se expire.</li>
    </ul>
  </form>
</div>
<? require_once("rodape.php") ?>

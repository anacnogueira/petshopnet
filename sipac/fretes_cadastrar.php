<?
/*--------------------------------------------------------'
   SIPAC - Sistema Integrado de Painel de Controle V 2.0  '
 	 Criado por Ana Claudia Nogueira                        '
   Criação 20/10/2007                                     '
   Última Modificação: __/__/____                         '
   Página: fretes_cadastrar.php                        '
---------------------------------------------------------*/
 $form        = "frm_frete";
 require_once("lib/configs.php");
 $titulo 			= $rotinaClass->menu_rotinas_titulo("");
 $link        = "fretes_listar.php";
 $arraStatus  = array("S"=>"Ativo","N"=>"Inativo");


 if(isset($_POST["btn_salvar"]))
 {
  $regra   	      = $_POST["regra"];
  $descricao      = $_POST["descricao"];
  $prazo_entrega  = $_POST["prazo_entrega"];
  $valor          = $_POST["valor"];
  $status         = $_POST["status"];

  $sql = "INSERT INTO fretes SET
  regra = '".$regra."',
  descricao = '".$descricao."',
  prazo_entrega = '".$prazo_entrega."',
  status = '".$status."'";
  if(!empty($valor))
   $sql .= ", valor = '".str_replace(",",".",$valor)."'";

    $result=$conn->sql($sql);
    $frete_id = $conn->id();
    $mensagem_log = "Regra de frete cadastrado com sucesso($frete_id).";
    createLog('',$pageAtual,'',$mensagem_log);
    header("location: $link");
 }

 require_once("topo.php");
 require_once("menu_lateral.php");
 ?>
<div id="conteudo">
<script type='text/javascript' src='js/jquery.price_format.1.3.js'></script>
<script type='text/javascript' src='js/fretes.js'></script>
 <div class='titulo'><?= $titulo ?></div>
 <a href="<?=$link?>"> <img src='<?= DIR_BTNS ?>btn_voltar.gif' border='0' alt='voltar' /></a><br />
 <form id="<?=$form ?>" action="<?= $pageName ?>" method="post">
   <table class="TableLista">
    <tr>
     <td class='legenda'><label for="regra">Regra:</label></td>
     <td><input name="regra" type="text" size="30" value="<?php echo $regra; ?>"/></td>
    </tr>
    <tr>
     <td class='legenda'><label for="descricao">Descrição:</label></td>
     <td><input name="descricao" type="text" size="30" value="<?php echo $descricao; ?>" /></td>
    </tr>
    <tr>
     <td class='legenda'><label for="prazo_entrega">Prazo de Entrega:</label></td>
     <td><input name="prazo_entrega" type="text" size="30" value="<?php echo $prazo_entrega; ?>" /></td>
    </tr>
    <tr>
     <td class='legenda'><label for="valor">Valor:</label></td>
     <td><input name="valor" type="text" size="10" value="<?php echo number_format($valor,2,",",".") ?>" class="valor" /></td>
    </tr>
    <tr>
     <td class='legenda'><label for="status">Status:</label></td>
     <td>
       <? foreach($arraStatus as $key=>$item){
         echo "&nbsp;<input type='radio' name='status' value='".$key."'"
         .($status == $key?" checked='checked'":'')." /> ".$item;
       }
       ?>
      </td>
    </tr>
     <tr class='BarraPag'>
      <td colspan="2"><input name="btn_salvar" type="submit" value="salvar" /></td>
     </tr>
   </table>
  </form>
</div>
<? require_once("rodape.php") ?>

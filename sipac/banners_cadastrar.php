<?
 /*--------------------------------------------------------'
   SIPAC - Sistema Integrado de Painel de Controle V 2.0  '
 	 Criado por Ana Claudia Nogueira                        '
   Criação 20/12/2007                                     '
   Última Modificação: 16/10/2009                         '
   Página: banners_cadastrar.php		                      '
---------------------------------------------------------*/
 $form       = "frm_banner";
 require_once("lib/configs.php");
 $titulo 	 = $rotinaClass->menu_rotinas_titulo("");
 $link   	 = "banners_listar.php";

if(isset($_POST["btn_salvar"]))
 {
  $banners_nome   		= $_POST["banners_nome"];
  $banners_url   		  = $_POST["banners_url"];
  $banners_grupo      = $_POST["banners_grupo"];
  $banners_imagemTemp = $_FILES["banners_imagem"]["tmp_name"];
  $banners_imagemName = $_FILES["banners_imagem"]["name"];
  $bannerErro         = $_FILES['banners_imagem']['error'];
  $banners_texto_html = $_POST["banners_texto_html"];
  $data_agendada      = fct_conversorData($_POST["data_agendada"],2);
  $expira_data        = fct_conversorData($_POST["expira_data"],2);
  $expira_impressoes  = $_POST["expira_impressoes"];

  if(empty($expira_impressoes)) $expira_impressoes = 0;
  
  $sql = "INSERT INTO banners SET 
  banners_nome = '$banners_nome',
  banners_url = '$banners_url',
  banners_grupo = '$banners_grupo',
  banners_texto_html = '$banners_texto_html',
  expira_impressoes = '$expira_impressoes'";
  if(!empty($data_agendada))
  {
   $sql .= ", banners_status = 'N'";
   $sql .= ", data_agendada = '$data_agendada'";  
  }
  else
   $sql .= ", banners_status = 'S'";
   
  if(!empty($expira_data))
   $sql .= ",expira_data = '$expira_data'";

  $result = $conn->sql($sql);
  $banners_id = $conn->id();
    
  //Inserir histórico do banner
  $sql = "INSERT INTO banners_historico SET 
  banners_id = '$banners_id',
  banners_mostrado = 0,
  banners_clicado = 0";
  $result = $conn->sql($sql);
  
  //2. Inserir Imagem do Banner
  if(!isset($banners_imagemName) or !$banners_imagemName)
  {
	 $banners_imagem = "";
	 $mensagem_log   = "Variavel de imagem vazia.";
  }
  else
  {
	 $ext 			  = strtolower(substr($banners_imagemName,-4));
	 $name            = left($banners_imagemName,strlen($banners_imagemName)-4)."_".$banners_id;
	 $banners_imagem  = $name.$ext;

	  if(!copy($banners_imagemTemp,DIR_BANNERS.$banners_imagem))
       $mensagem_log .= "Aconteceu um erro durante o envio da imagem $bannerErro<br />";

    else
    {
	  //Atualiza o produto para inserir a imagem
	  $sql = "UPDATE banners SET banners_imagem='$banners_imagem' WHERE banners_id='$banners_id'";
	  $result = $conn->sql($sql);
	  $mensagem_log = "Foto enviada com sucesso<br />";
    }
  }
  $mensagem_log .= " - Banner cadastrado com sucesso($banners_id).";
  createLog('',$pageAtual,'',$mensagem_log);
  header("location: $link");
 }

 require_once("topo.php");
 require_once("menu_lateral.php");
 ?>
<div id="conteudo">
<script type='text/javascript' src='js/jquery.maskedinput-1.2.2.min.js'></script>
<script type='text/javascript' src='js/banners.js'></script>
 <div class='titulo'><?= $titulo ?></div>
  <a href="<?=$link?>"> <img src='<?= DIR_BTNS ?>btn_voltar.gif' border='0' alt='voltar' /></a><br />
  <form id="<?=$form ?>" action="<?= $pageAtual ?>" method="post" enctype="multipart/form-data">
	 <strong>Informações do banner</strong>
	 <table class="TableLista">
      <tr>
       <td class='legenda' width="120"><label for="banners_nome">Título:</label></td>
       <td><input name="banners_nome" type="text" size="50" /></td>
      </tr>
      <tr>
       <td class='legenda'><label for="banners_url">Endereço do banner:</label></td>
       <td><input name="banners_url" type="text" size="50" /></td>
      </tr>
      <tr>
       <td class='legenda'><label for="banners_grupo">Tamanho do banner:</label></td>
       <td><input name="banners_grupo" type="text" size="50" /></td>
     </tr>
     <tr>
       <td class="legenda"><label for="banners_imagem">Imagem:</label></td>
       <td><input name="banners_imagem" type="file" size="50" /></td>
     </tr>
	 <tr>
	   <td class="legenda"><label for="banners_texto_html">Texto HTML:</label></td>
	   <td><textarea name="banners_texto_html" cols="57" rows="5"></textarea>
	 </tr>
     <tr>
       <td class='legenda'><label for="data_agendada">Programado para:</label></td>
       <td>
          <input name="data_agendada" type="text" size="10" maxlength="10" class="data" />
          <img src="banco_imagens/imgCalendario.gif" border="0" alt="Clique para abrir o calendário" class="calendar" id="data_agendada" />
          (dd/mm/aaaa)
       </td>
     </tr>
     <tr>
       <td class='legenda'><label for="expira_data">Expira em:</label></td>
       <td>
        <input name="expira_data" type="text" size="10" maxlength="10"  class="data" />
       <img src="banco_imagens/imgCalendario.gif" border="0" alt="Clique para abrir o calendário" class="calendar" id="expira_data" />
        (dd/mm/aaaa)  ou  após<br />
        <input name="expira_impressoes" type="text" size="4" /> impressões/vistas
       </td>
     </tr>
    <tr class='BarraPag'>
      <td colspan="2"><input name="btn_salvar" type="submit" value="salvar" /></td>
    </tr>
   </table>
  </form><br />
  <p><strong>Notas sobre o banner</strong></p>
    <ul>
      <li>Use uma imagem ou um texto HTML para o banner - não ambos.</li>
    	<li>o Texto HTML tem prioridade sobre uma imagem </li>
    </ul><br />
  <p><strong>Nota sobre a expiração:</strong></p>
    <ul>
    	<li>Apenas um dos dois campos deve ser preenchido</li>
    	<li>Se o banner não expira automaticamente, deixe ambos em branco </li>
    </ul><br />
  <p><strong>Nota sobre a Programação:</strong></p>
    <ul>
    	<li> Se uma programação foi definida, o baner será ativado naquela data.</li>
    	<li> Todos os baners programados são marcados como desativados até que aquela data tenha chegado, e então serão marcados como ativos.</li>
    </ul>
</div>
<? require_once("rodape.php") ?>

<?
 require_once("lib/configs.php");
 $link     = "banners_listar.php";
 $sels 		 = $_REQUEST["sels"];

 if(is_array($sels))
 {
 	if($sels[0] == 'on')
  	array_shift($sels);

  $arraSels =implode(",",$sels);
  }

 //1.Selecionar Foto para excluir
 $sql = "SELECT banners_imagem FROM banners WHERE banners_id IN($arraSels)";
 $result = $conn->sql($sql);

 //2. Exclui a(s) imagem(s)
 while($linha = mysql_fetch_array($result))
 {
   if(file_exists(DIR_BANNERS.$linha["banners_imagem"]))
    unlink(DIR_BANNERS.$linha["banners_imagem"]);
  }

 //3. Exclui o(s) banners
 $sql = "DELETE FROM banners WHERE banners_id IN($arraSels)";
 $result = $conn->sql($sql);
 
 //4. Eclui o(s) histórico(s) do(s) banner(s)
 $sql = "DELETE FROM banners_historico WHERE banners_id IN($arraSels)";
 $result = $conn->sql($sql);
 
 $mensagem_log = "produtos(s) excluído(s) com sucesso($arraSels).";
 createLog('',$pageAtual,'',$mensagem_log);
 $conn->fechar();
 header("location: $link");
?>
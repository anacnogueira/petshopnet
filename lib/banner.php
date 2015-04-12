<?php
 /* Banner Dinãmico
 Criado  em 24/01/2008 por Ana Claudia
 */
  require_once("constantes.php");
	require_once("conexaomysql.php");
  $conn 			 = new ConexaoMysql();

  $sql = "SELECT b.banners_id, b.banners_nome, b.banners_url, b.banners_imagem, b.banners_grupo,
  b.banners_texto_html  FROM banners b
  INNER JOIN banners_historico bh ON  b.banners_id = bh.banners_id
  WHERE banners_status = 'S' AND ((expira_impressoes - banners_mostrado > 0)
  OR (expira_data < NOW()) OR (data_agendada >= NOW()) OR data_agendada IS NULL)
  ORDER BY rand() LIMIT 0,1";
  $Sresult = $conn->sql($sql);

  while($banner = mysql_fetch_array($Sresult)){
    //1. Verificar tipo (HTML tem prioridade)
   if(!empty($banner["banners_texto_html"]))
    $conteudo = $banner["banners_texto_html"];

   else if(!empty($banner["banners_imagem"])){
      $conteudo = "<img src='banco_imagens/banners/".$banner["banners_imagem"]."' alt='".$banner["banners_nome"]."' border='0'  id='img_banner' />";
   }
   //2. Montar Banner (Tamanho)
   if(!empty($banner["banners_grupo"])) {
    $tamanho = strtolower($banner["banners_grupo"]);
    $tamanho = explode("x",$tamanho);

    $style  = "width:".trim($tamanho[0])."px;";
    $style .= "height:".trim($tamanho[1])."px;";
   }

   //3. Cadastrar impressão
   $sql = "SELECT COUNT(*) as count FROM banners_historico WHERE banners_id ='".$banner["banners_id"]."'";
   $result = $conn->sql($sql);
   if(mysql_num_rows($result) == 0)
    $sql = "INSERT INTO banners_historico (banners_mostrado,banners_id,banners_historico_data) VALUES (1,'".$banner["banners_id"]."',NOW())";
   else{
    $sql = "UPDATE banners_historico SET
    banners_mostrado       = banners_mostrado + 1,
    banners_historico_data = NOW()
    WHERE banners_id = '".$banner["banners_id"]."'";
   }
   $result = $conn->sql($sql);
   if(!empty($banner["banners_url"])) 
    $link_banner = "<a href='lib/verBanner.php?banners_id=".$banner["banners_id"]."&amp;url=".$banner["banners_url"]."'>".$conteudo."</a>";
   else
    $link_banner = $conteudo;  
}

  echo "<div id='banner'>\n";
  echo $link_banner."\n";
  echo "</div>\n";

  echo "<script type='text/javascript'>\n";
  echo " if(screen.width=='800') {\n";
	echo "  document.getElementById('img_banner').style.width='60%';\n";
	echo " }\n";
	echo "</script>\n";
?>
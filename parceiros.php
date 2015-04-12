  <!--parceiros -->
  <div id="parceiros">

    <?
      $SQL = "SELECT DISTINCT parceiros_id,parceiros_nome_fantasia,parceiros_imagem,parceiros_url
      FROM parceiros WHERE parceiros_status = 'S' ORDER BY RAND() LIMIT 3";
      $result = $conn->sql($SQL);
      if(mysql_num_rows($result) >0 )
      {
        //echo "<ul>";
        while($dados = mysql_fetch_array($result))
        {
          $SQL = "SELECT DISTINCT categorias_id FROM parceiros_categorias WHERE parceiros_id = '".$dados["parceiros_id"]."'";
          $result2 = $conn->sql($SQL);
          //1. Parceiro não está associado a nenhuma categoria
          if(mysql_num_rows($result2) == 0)
            echo "<div><a href='".$dados["parceiros_url"]."' class='popup'><img src='".DIR_PARCEIROS.$dados["parceiros_imagem"]."' alt='".$dados["parceiros_nome_fantasia"]."' /></a></div>";
          else
          {
           while($dados2 = mysql_fetch_array($result2))
           {

						//2. Parceiro está associado a home
            if($dados2["categorias_id"] == 0 and strpos($pageAtual,"index.php") !== false)
             echo "<div><a href='".$dados["parceiros_url"]."'><img src='".DIR_PARCEIROS.$dados["parceiros_imagem"]."' alt='".$dados["parceiros_nome_fantasia"]."' /></a></div>";
            //3. parceiro associado a determinada(s) categoria(s)
            else if($dados2["categorias_id"] == $cat_id)
       			 echo "<div><a href='".$dados["parceiros_url"]."'><img src='".DIR_PARCEIROS.$dados["parceiros_imagem"]."' alt='".$dados["parceiros_nome_fantasia"]."' /></a></div>";
            }
          }
        }
        //echo "</ul>";
       }
    ?>
  </div>

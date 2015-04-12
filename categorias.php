  <!--categorias -->
  <?
	 $page   = "produtos_categorias.php";

  ?>
  <div id="categorias">
    <ul>
      <?


		    $SQL = "SELECT categorias_id,categorias_descricao FROM categorias WHERE parent_id = 0";
        $result = $conn->sql($SQL);

        while($dados1 = mysql_fetch_array($result))
        {
          echo "<li><a href='produtos_categorias.php?categorias_id=".$dados1["categorias_id"]."&amp;cat=".urlencode($dados1["categorias_descricao"])."'><strong>".htmlspecialchars($dados1["categorias_descricao"])."</strong></a>\n";
			    $SQL = "SELECT categorias_id,categorias_descricao  FROM categorias WHERE parent_id = '".$dados1["categorias_id"]."'";
   		    $result2 = $conn->sql($SQL);
			    $recordCount = mysql_num_rows($result2);
			    if($recordCount > 0)
			   {
				    echo "<ul>\n";

				    while($dados2 = mysql_fetch_array($result2))
              echo "<li><a href='produtos_categorias.php?categorias_id=".$dados2["categorias_id"]."&amp;cat=".urlencode($dados2["categorias_descricao"])."'>".htmlspecialchars($dados2["categorias_descricao"])."</a></li>\n";

				    echo "</ul>\n";
			   }
			   echo "</li>\n";
        }
      ?>
    </ul>
  </div>

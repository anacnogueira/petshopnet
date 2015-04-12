<?
/*--------------------------------------------------------'
   SIPAC - Sistema Integrado de Painel de Controle V 2.1  '
 	 Criado por Ana Claudia Nogueira                        '
   Criação 04/09/2007                                     '
   Última Modificação: 24/03/2009                         '
   Página: users_cadastrar.php     	                      '
---------------------------------------------------------*/
$form        = "frm_auth";
 require_once("lib/configs.php");
 $titulo 		= $rotinaClass->menu_rotinas_titulo("");

 $sels = $_REQUEST["Sels"];
 $tipo = $_REQUEST["tipo"];

 if(is_array($sels))  $sels = $sels[0];

 $link  		  = $tipo."s_listar.php";

 if($tipo == 'user')
  $sql = "SELECT users_nome FROM users WHERE users_id = $sels";
 elseif($tipo == 'grupo')
  $sql = "SELECT grupos_nome FROM grupos WHERE grupos_id = $sels";

 $result = $conn->sql($sql);
 $nome = mysql_result($result,0,0);

 $arraAuth = array("1","Sim","0","Não","2","Parcial");
 require_once("topo.php");
 require_once("menu_lateral.php");
?>
  <div id="conteudo">
    <script type='text/javascript' src='js/autorizacoes.js'></script>
    <div class='titulo'><?=$titulo?></div>
    <a href="<?=$link?>"> <img src='<?=DIR_BTNS ?>btn_voltar.gif' border='0' alt='voltar' /></a><br />
    <form id="<?=$form ?>" action="autorizacoes2_alterar.php" method="post">
     <div><strong>Tipo: </strong><?= $tipo ?></div>
     <div><strong>Nome: </strong><?= $nome ?></div>
      <?
        $sql = "SELECT modulos_id,modulos_nome FROM modulos ORDER BY modulos_ordem";
        $result = $conn->sql($sql);
        while($linha1 = mysql_fetch_array($result))
        {
          $sql = "SELECT modulos_id,tipo_autorizacao
          FROM autorizacoes WHERE ".$tipo."s_id= '$sels'
          AND modulos_id ='".$linha1['modulos_id']."'";
          $result1 = $conn->sql($sql);

          if(mysql_num_rows($result1) >0)
            $tipo_autorizacao = mysql_result($result1,0,"tipo_autorizacao");
          else
            $tipo_autorizacao = null;

          $modulos .=  $linha1['modulos_id'].",";
          echo "<table class='TableLista' border='0' cellpadding='0' cellspacing='2'>\n";
          echo "  <tr class='listaItem'>\n";
          echo "    <td>" . $linha1["modulos_nome"] . "</td>\n";
          echo "    <td>\n";
          for($i = 0;$i < count($arraAuth);$i+=2)
          {
            echo " <input type='radio' class='checkbox checkAuth sub".$linha1['modulos_id']."' name='aut_tipo_mod".ltrim($linha1['modulos_id'],"0")."'
            value='".$arraAuth[$i]."'".($tipo_autorizacao == $arraAuth[$i]?"checked='checked'":"")."/> ".$arraAuth[$i + 1]."\n";
          }
          echo " </td>";
          echo "</tr>";
          $sql = "SELECT submodulos_id,submodulos_nome
          FROM submodulos WHERE modulos_id = ".$linha1["modulos_id"]." ORDER BY submodulos_ordem";
          $result2 = $conn->sql($sql);
          if(mysql_num_rows($result2)>0)
          {
            if($tipo_autorizacao == 1 or $tipo_autorizacao == 0)
              $displaySub = "none";
            else
              $displaySub = "block";

            echo "<tr class='listaItem'>\n";
            echo "  <td colspan='2'>\n";
            echo "    <div  id='sub".$linha1['modulos_id']."' style='display: $displaySub'>\n";
            echo "      <table border='0' style='width:100%'>\n";
            while($linha2 = mysql_fetch_array($result2))
            {
              $sql = "SELECT submodulos_id, tipo_autorizacao
              FROM autorizacoes WHERE ".$tipo."s_id = '$sels'
              AND submodulos_id ='".$linha2['submodulos_id']."'";
              $result3 = $conn->sql($sql);

              if(mysql_num_rows($result3)>0)
                $tipo_autorizacao2 = mysql_result($result3,0,"tipo_autorizacao");
              else
                $tipo_autorizacao2 = null;

              $submodulos .=  $linha2['submodulos_id'].",";
              echo "<tr>\n";
              echo "  <td style='width:202px'>&nbsp;&nbsp;" . $linha2["submodulos_nome"] . "</td>\n";
              echo "  <td>\n";
              for($i = 0;$i < count($arraAuth);$i+=2)
              {
                echo "  <input type='radio' class='checkbox checkAuth rot".$linha2['submodulos_id']."' name='aut_tipo_sub".ltrim($linha2['submodulos_id'],"0")."'
                value='".$arraAuth[$i]."' ".($tipo_autorizacao2 == $arraAuth[$i]?"checked='checked'":"")." /> ".$arraAuth[$i + 1]."\n";
              }
              echo "  </td>\n";
              echo "</tr>\n";
              $sql = "SELECT rotinas_id,rotinas_nome
              FROM rotinas WHERE submodulos_id =".$linha2["submodulos_id"]." ORDER BY rotinas_ordem";;
      	      $result4 = $conn->sql($sql);
      	      if(mysql_num_rows($result4)>0)
      	      {
                if($tipo_autorizacao2 == 1 or $tipo_autorizacao2 == 0)
                  $displayRot="none";
                else
                  $displayRot="block";

                echo "<tr>\n";
       	 	      echo " <td colspan='2'>\n";
       	 	      echo "  <div id='rot".$linha2['submodulos_id']."' style='display:$displayRot'>\n";
         	      echo "   <table>\n";
         	      while($linha4 = mysql_fetch_array($result4))
        	      {
        	       $sql = "SELECT rotinas_id
                 FROM autorizacoes WHERE ".$tipo."s_id= '$sels'
                 AND rotinas_id ='".$linha4['rotinas_id']."';";
                 $result5 = $conn->sql($sql);
                 if(mysql_num_rows($result5) >0)
          	       $autorizacaoRot = mysql_result($result5,0,"rotinas_id");

                 echo "   <tr>\n";
                 echo "     <td colspan='2'>&nbsp;&nbsp;&nbsp;&nbsp;\n";
                 echo "       <input type='checkbox' class='checkbox' name='rotinas[]' value='".$linha4["rotinas_id"]."' ".($autorizacaoRot == $linha4["rotinas_id"]?"checked='checked'":"")." /> " . $linha4["rotinas_nome"]. "\n";
                 echo "     </td>\n";
                 echo "   </tr>\n";
        	     }
                 echo "   </table></div></td></tr>\n";
      	      }
			}
			echo "   </table></div></td></tr>\n";
			echo "</table><br />\n";
         }
      }
      $modulos = rtrim($modulos,",");
      $submodulos = rtrim($submodulos,",");
  ?>
  <table class="TableLista">
    <tr class='BarraPag'>
      <td><input name='btn_alterar' type='submit' value='alterar' /></td>
    </tr>
  </table>
  <input name="tipo" type="hidden" value="<?=$tipo ?>" />
  <input name="sels" type="hidden" value="<?=$sels ?>" />
  <input name="modulos" type="hidden" value="<?=$modulos?>" />
  <input name="submodulos" type="hidden" value="<?=$submodulos?>" />
 </form>
  </div>
<? require_once("rodape.php") ?>

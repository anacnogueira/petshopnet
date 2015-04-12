<?
 require_once("constantes.php");
 require_once("conexaomysql.php");
 require_once("funcoes.php");
 session_start();
 
 $conn 			       = new ConexaoMysql();
 $formas_pagamento_id  = $_REQUEST["formas_pagamento_id"];
 $vlTotal              = str_replace(",",".",$_REQUEST["vlTotal"]);
 
 $sql         = "SELECT * FROM formas_pagamento WHERE formas_pagamento_id = '$formas_pagamento_id'";
 $result      = $conn->sql($sql);
 $arraParcelas = array();
 
 $parcela = mysql_fetch_object($result);
 $listaParcelas = "<ul>\n";
  
  if($parcela->formas_pagamento_vezes > 1)
  {
    
	for($i = 1;$i <= $parcela->formas_pagamento_vezes;$i++)
  {
   	  
	   if(empty($parcela->formas_pagamento_vezes_juros) or (!empty($parcela->formas_pagamento_vezes_juros) and $i < $parcela->formas_pagamento_vezes_juros))
	    $arraParcelas[] = "<li><input name='parcela' value='".$i."' type='radio'  /> ".$i."x R$ ".number_format(($vlTotal/$i),2,",","")." sem juros</li>\n";
     else 
	   {
		  $juros =   $parcela->formas_pagamento_juros/100;
		  $total  =  $vlTotal * (1 + ($juros * $i));
		 
		  $arraParcelas[] = "<li><input name='parcela' value='".$i."' type='radio' onclick='calc_total(".$total.")' /> ".$i."x R$ ".number_format(($total/$i),"2",",","")." com juros de ".$parcela->formas_pagamento_juros."%</li>\n";
	   }    	  
  }
 }
   
 if(mysql_num_rows($result) > 0)
 {
  echo "<ul>\n";
  if(count($arraParcelas) > 0)
  {
  	for($i = 0;$i< count($arraParcelas);$i++)
  	  echo $arraParcelas[$i];
   }
   else
    echo "<li><input name='parcela' value='1' type='radio' />1x de ".number_format($vlTotal,2,",","")." sem juros</li>\n";
  
    echo "</ul>\n";
  }
?>



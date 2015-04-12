<?php
	require_once("lib/configs.php");
$cep_destino = "12309-000";
if(!empty($cep_destino)) {
  $resultado = my_file_get_contents('http://republicavirtual.com.br/web_cep.php?cep='.$cep_destino.'&formato=json');

   if(!$resultado){
    echo 'Erro: CEP não encontrado';
    exit;
	 }

   $arra_end = json_decode($resultado,true);

   //Verifica regra para cidade
   $sql = "SELECT valor,descricao,prazo_entrega FROM fretes WHERE regra = 'Cidade'
   AND descricao ='".utf8_decode($arra_end['cidade'])."' ORDER BY frete_id DESC";
   $rs = $conn->sql($sql);
   $row = mysql_fetch_array($rs);
   if(count($row)){
       $valores["Valor"]        = number_format($row['valor'],2,",",".");
       $valores["PrazoEntrega"] = $row['prazo_entrega'];
   }

   print_r($valores);
}

function my_file_get_contents( $site_url ){
        $ch = curl_init();
        $timeout = 10;
        curl_setopt ($ch, CURLOPT_URL, $site_url);
        curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
        $file_contents = curl_exec($ch);
        curl_close($ch);
        return $file_contents;
}
?>
<?php
  ini_set("allow_url_fopen", 1);
  ini_set("allow_url_include", 1);
  class Carrinho extends ConexaoMysql{

    function adicionar($cod = null){
      if(!empty($cod)){
        //Verifica se o produto já não foi incluído no carrinho
        $sql = "SELECT * FROM carrinho
        WHERE  produtos_codigo = '". mysql_real_escape_string($cod)."'
        AND session_id = '".session_id()."'";
        $rs = ConexaoMysql::sql($sql);

        if(mysql_num_rows($rs) == 0) { //Produto não existe no carrinho, pode cadastrar
          $sql = "INSERT INTO carrinho SET
          produtos_codigo = '".mysql_real_escape_string($cod)."',
          produtos_quantidade = 1,
          session_id = '".session_id()."',
          date = NOW()";
          ConexaoMysql::sql($sql);
        }
      }
      else
       return false;
    }

    function remover($cod=''){
      $sql = "DELETE FROM carrinho WHERE session_id = '".mysql_real_escape_string(session_id())."'";
      if(!empty($cod))
        $sql .= " AND produtos_codigo ='".mysql_real_escape_string($cod)."'";
      ConexaoMysql::sql($sql);
    }

    function atualizar($arra_qtde = array(),$cep_destino = '',$nCdServico ='41106'){

       if(is_array($arra_qtde)){
        foreach($arra_qtde as $cod => $qtde){
          if(is_numeric($qtde)){
            $sql = "UPDATE carrinho SET
            produtos_quantidade = '".mysql_real_escape_string($qtde)."'
            WHERE  produtos_codigo = '".mysql_real_escape_string($cod)."'
            AND session_id = '".session_id()."'";
            
            ConexaoMysql::sql($sql);
          } //fecha id
        } // fecha foreach

        //calcular frete
        if(!empty($cep_destino) and !empty($nCdServico)){
          //Pegar os pesos dos produtos
          $sql = "SELECT p.produtos_peso*c.produtos_quantidade as peso_frete
          FROM carrinho c, produtos p
          WHERE c.produtos_codigo = p.produtos_codigo
          AND session_id='".session_id()."'";
          $rs = ConexaoMysql::sql($sql);
          //Somar pesos e criar item do array para frete
          while($linha = mysql_fetch_array($rs)){
            $peso_frete += $linha["peso_frete"];
          } //fecha while

        } //fecha if cep_destino...
        if(!empty($peso_frete)){
         //Chama a função de calclular frete
         $arra_result =  $this->calcula_frete($cep_destino,$peso_frete,$nCdServico);
         return $arra_result;
        }
      }   //fecha if is_array...
    }

    function getItens($itens = array()){
      $produtos = array();
      $campos = implode(",",$itens);
      $sql = "SELECT ".$campos." FROM carrinho c
      INNER JOIN produtos p ON p.produtos_codigo = c.produtos_codigo
      WHERE session_id='".session_id()."' AND p.produtos_status = 'S'";
      $rs = ConexaoMysql::sql($sql);
      $totCampos = mysql_num_fields($rs);
      $j = 0;
      while($row = mysql_fetch_array($rs)){
        for($i = 0;$i < $totCampos;$i++){
          $meta   = mysql_fetch_field($rs, $i);
          $campo  =  $meta->name;
          $produtos[$j][$campo] = $row[$campo];
        }
        $j++;
      }
     return $produtos;
    }

    function getQtde($cod){
      $sql = "SELECT produtos_quantidade FROM carrinho
      WHERE session_id='".session_id()."'
      AND produtos_codigo ='".$cod."'";
      $rs = ConexaoMysql::sql($sql);
      $row = mysql_fetch_array($rs);

      return $row[0];
    }

   function calcula_frete($cep_destino="",$peso_frete,$nCdServico="41106"){
    $valores = array();

    if(!empty($cep_destino)) {

       $resultado = my_file_get_contents('http://republicavirtual.com.br/web_cep.php?cep='.$cep_destino.'&formato=json');

        if(!$resultado){
        //  echo 'Erro: CEP não encontrado';
          exit;
	      }

        $arra_end = json_decode($resultado,true);

        //print_r($arra_end);
        if(!empty($arra_end['cidade'])) {
          //Verifica regra para cidade
          $sql = "SELECT valor,descricao,prazo_entrega FROM fretes WHERE regra = 'Cidade'
          AND descricao ='".utf8_decode($arra_end['cidade'])."' ORDER BY frete_id DESC";
          $rs = ConexaoMysql::sql($sql);
          $row = mysql_fetch_array($rs);
          if(count($row)){
            $valores["Valor"]        = number_format($row['valor'],2,",",".");
            $valores["PrazoEntrega"] = $row['prazo_entrega'];
          }
       }
        else{
         //Usa calculo de frete dos correios
          $sSoapServer = "http://ws.correios.com.br/calculador/CalcPrecoPrazo.asmx?WSDL";

          if(!empty($cep_destino) && !empty($peso_frete)){
            $parms = array();

            $parms["nCdEmpresa"] =  "";
            $parms["DsSenha"] =  "";
            $parms["nCdServico"] = $nCdServico;
            $parms["sCepOrigem"] =  str_replace("-","",CEP_ORIGEM);
            $parms["sCepDestino"] =  str_replace("-","",$cep_destino);
            $parms["nVlPeso"] =  $peso_frete;
            $parms["nCdFormato"] =  1; //1 – Formato caixa/pacote
            $parms["nVlComprimento"] =  16;
            $parms["nVlAltura"] =  2;
            $parms["nVlLargura"] =  11;
            $parms["nVlDiametro"] =  0;
            $parms["sCdMaoPropria"] =  "N";
            $parms["nVlValorDeclarado"] =  0;
            $parms["sCdAvisoRecebimento"] =  "N";

            $client = new SoapClient($sSoapServer, array(
              'trace' => true,
              'exceptions' => true,
              'compression' => SOAP_COMPRESSION_ACCEPT | SOAP_COMPRESSION_GZIP,
              'connection_timeout' => 1000
            ));
            $result = $client->CalcPrecoPrazo($parms);
            $valores = array();
            $arr_preco_prazo = $result->CalcPrecoPrazoResult->Servicos->cServico;
            foreach($arr_preco_prazo as $key=>$item)
              $valores[$key] = $item;
          }
       }
        return $valores;
     }
   }

   function limpaCarrinho(){
     $sql = "DELETE FROM carrinho
     WHERE session_id='".session_id()."'";
     mysql_query($sql);

    }
  }
?>

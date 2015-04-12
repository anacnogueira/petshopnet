<?php

require_once("constantes.php");

function calcula_frete($cep_destino,$peso_frete,$frete_gratis = ""){
  $sSoapServer = "http://ws.correios.com.br/calculador/CalcPrecoPrazo.asmx?WSDL";

  if(!empty($cep_destino) && !empty($peso_frete)){
    $parms = array();

    $parms["nCdEmpresa"] =  "";
    $parms["DsSenha"] =  "";
    $parms["nCdServico"] = FRETE_PAC;
    $parms["sCepOrigem"] =  str_replace("-","",CEP);
    $parms["sCepDestino"] =  $cep_destino;
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

   //if($frete_gratis == "S")
    //$valores["Valor"] = "0,00";


     print_r($valores);
  }
}
?>

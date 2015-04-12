<?php

class Parameters { }

 if($_POST["btn"]) {
    $sSoapServer = "http://shopping.correios.com.br/wbm/shopping/script/CalcPrecoPrazo.asmx?WSDL";
    $sPacoteSoap = array(
        "nCdEmpresa" => $_POST["codigo"],
        "sDsSenha" => $_POST["senha"],
         "sDsSenha" => $_POST["senha"],
         "nCdServico" => $_POST["servicos"],
         "sCepOrigem" => $_POST["cep_origem"],
         "sCepDestino" => $_POST["cep_destino"],
         "nVlPeso" => $_POST["peso"],
         "nCdFormato" => $_POST["formato"],
         "nVlComprimento" => $_POST["comprimento"],
         "nVlAltura" => $_POST["altura"],
         "nVlLargura" => $_POST["largura"],
         "nVlDiametro" => $_POST["diametro"],
         "sCdMaoPropria" => $_POST["maopropria"],
         "nVlValorDeclarado" => $_POST["valordeclarado"],
         "sCdAvisoRecebimento" => $_POST["avisorecebimento"]);
  //-------------------------------------------------------------------------//
   $parms = new Parameters();
   $parms->nCdEmpresa = utf8_encode($_POST["codigo"]);
   $parms->sDsSenha = utf8_encode($_POST["senha"]);
   $parms->sDsSenha = utf8_encode($_POST["senha"]);
   $parms->nCdServico = utf8_encode($_POST["servicos"]);
   $parms->sCepOrigem = utf8_encode($_POST["cep_origem"]);
   $parms->sCepDestino = utf8_encode($_POST["cep_destino"]);
   $parms->nVlPeso = utf8_encode($_POST["peso"]);
   $parms->nCdFormato = utf8_encode($_POST["formato"]);
   $parms->nVlComprimento = utf8_encode($_POST["comprimento"]);
   $parms->nVlAltura = utf8_encode($_POST["altura"]);
   $parms->nVlLargura = utf8_encode($_POST["largura"]);
   $parms->nVlDiametro = utf8_encode($_POST["diametro"]);
   $parms->sCdMaoPropria = utf8_encode($_POST["maopropria"]);
   $parms->nVlValorDeclarado = utf8_encode($_POST["valordeclarado"]);
   $parms->sCdAvisoRecebimento = utf8_encode($_POST["avisorecebimento"]);

    $oXmlHttp = @new SoapClient($sSoapServer, array(
        'trace' => true,
        'exceptions' => true,
        'compression' => SOAP_COMPRESSION_ACCEPT | SOAP_COMPRESSION_GZIP,
        'connection_timeout' => 1000,
        'uri' => 'http://tempuri.org/CalcPrecoPrazo',
        'encoding'=>'utf-8'
   ));
    $resposta = $oXmlHttp->CalcPrecoPrazo($sPacoteSoap);
;

     echo $resposta;
 }

 function GerarPacoteSoap($params = array()) {
    $sSoap  = "<?xml version='1.0' encoding='utf-8' ?>\n";
    $sSoap .= "<soap:Envelope
    xmlns: xsi='http://www.w3.org/2001/XMLSchema-instance'
    xmlns: xsd='http://www.w3.org/2001/XMLSchema'
    xmlns: soap='http://schemas.xmlsoap.org/soap/envelope/'>\n";
    $sSoap .= "<soap:Body>\n";
    $sSoap .= "<calcPrecoPrazo xmlns='http://tempuri.org'>\n";
    foreach($params as $key=>$value){
        $sSoap .= "<$key>$value</$key>\n";
    }
    $sSoap .= "</calcPrecoPrazo>\n";
    $sSoap .= "</soap:Body>\n";
    $sSoap .= "</soap:Envelope>\n";

    return $sSoap;
 }
?>

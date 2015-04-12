<?
/*
'-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#
' Kit de Integração Correios
' Versão: 3.0
' Arquivo: calculaFrete_string.php
' Função: Calculo de frete junto aos Correios, retorno por string
'-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#-#
*/

// IMPORTANTE:
// - O SCRIPT A SEGUIR É FUNCIONAL APENAS EM PHP 5 PARA HOSPEDAGENS LINUX
// - O SOAP CLIENT DEVE ESTAR ATIVO
require_once("constantes.php");

class Parameters { }

function calcula_frete($cep_destino,$peso_frete)
{
  // Endereço do WebService da LocaWeb
  $correiosWSLocaWeb = "http://comercio.locaweb.com.br/correios/frete.asmx?WSDL";

  // Inicializa o cliente SOAP
  $soap = @new SoapClient($correiosWSLocaWeb, array(
        'trace' => true,
        'exceptions' => true,
        'compression' => SOAP_COMPRESSION_ACCEPT | SOAP_COMPRESSION_GZIP,
        'connection_timeout' => 1000
   ));

 if(!empty($peso_frete))
 {
  try{
    // Postagem dos parâmetros
    $parms = new Parameters();
    $parms->cepOrigem = utf8_encode(str_replace("-","",CEP_ORIGEM));
    $parms->cepDestino = utf8_encode(str_replace("-","",$cep_destino));
    $parms->peso = utf8_encode($peso_frete);
    //$parms->volume = utf8_encode($int_volumeFrete);
    $parms->codigo = utf8_encode(TIPOFRETE);

    //Resgata o valor calculado
    $resposta = $soap->Correios($parms);

    // Exibe os dados de retorno
    return utf8_decode(($resposta->CorreiosResult)/2);
  }
  catch(Exception $e){
    echo "Exceção pega: ",  $e->getMessage(), "\n";
  }  
}
 else
  return "0,00";
}
  


if(isset($_POST["cep_destino"]) and isset($_POST["peso_frete"]))
{
  // Define os valores para o cálculo do frete via ajax
  $cep_destino = $_POST["cep_destino"];
  $peso_frete  = $_POST["peso_frete"];
  echo  calcula_frete($cep_destino,$peso_frete); 
}
?>

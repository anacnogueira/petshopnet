<?php

require_once("configs.php");
require_once("calculaFrete_string.php");

$cep_destino = $_POST["cep_destino"];
$peso_frete  = $_POST["peso_frete"];
print_r(calcula_frete($cep_destino,$peso_frete));

?>

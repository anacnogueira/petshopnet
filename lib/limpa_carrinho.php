<?php
  session_start();
  include "conexaomysql.php";
  require_once("class.carrinho.php");
  require_once("configs.php");

  $carrinho = new carrinho();

  //3. Limpa carrinho
  $carrinho->limpaCarrinho();
?>
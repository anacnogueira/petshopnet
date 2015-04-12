<div class="clear">&nbsp;</div></div>

 <!--rodape -->
 <div id="rodape">
   <!--script type='text/javascript' language="javascript">
      if (location.protocol == "https:"){
        document.write('<script language="JavaScript" src="https://secure.comodo.net/trustlogo/javascript/trustlogo.js"></scr'+'ipt>');
    }
   </script>

<script language="javascript" type="text/javascript">
/*if (location.protocol == "http:"){
   var URL = document.location.toString().split('/');
   var x = ""

   for (var i=0; i < URL.length; i++) {
      if (i >= 3){
      x = x + "/" + URL[i]
      }
   }

   var NOME_LOGIN = "petshopnet2"
   var ENDERECO = "https://ssl899.locaweb.com.br/"+ NOME_LOGIN + x;

   document.write("<font size='1' face='verdana,arial'>Você não se encontra em um ambiente seguro.<br>Para ir ao ambiente seguro clique ")
   document.write("<a href='" + ENDERECO + "'> aqui. </a></font>")
   } else */if (location.protocol == "https:"){
   TrustLogo("https://ssl899.websiteseguro.com/petshopnet2/banco_imagens/selo.gif", "SC", "none");
   }
</script-->

  <!-- img src="banco_imagens/foot_certsign.gif" alt="Certificado por...."  border="0" class='cert' /-->
  <div class='pgto_rodape'>
   <?= lista_pagamentos() ?>
  </div>
   <div class="menu_cortesia">
    <ul>
      <li><a href="index.php">Home</a> | </li>
      <li><a href="quem_somos.php">Quem Somos</a> | </li>
      <li><a href="fale_conosco.php">Fale Conosco</a> | </li>
      <li><a href="faq.php">FAQ</a> | </li>
      <li><a href="mapa_site.php">Mapa do Site</a></li>
    </ul>
  </div>
  <span class="copy">&copy; <?php echo date('Y'); ?> PetShopNet - Todos os direito reservados</span><br /><br />
  <!--div class="designed">Designed by <a href='http://www.anaclaudia.com.br' class='popup'>Ana Claudia</a></div-->
 </div>
</div>
<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-2428872-3");
pageTracker._trackPageview();
} catch(err) {}</script>
</body>
</html>
<? $conn->fechar();?>

<!--Login -->
  <div id="login_header">
    <span class='saudacao'><?= saudacaoHorario() ?>
    <? if(isset($_SESSION["xxClientesNomexx"])) { ?>
      <span class="login">
      <strong><?= $_SESSION["xxClientesNomexx"] ?></strong> | <a href="logout.php">Sair</a>
      </span><br />
    <? } ?>
    </span>
    <?= data_hoje() ?>
  </div>

  <?php require_once("cabecalho.php");
  require_once("logica-usuario.php");
  ?>


  <?php if(usuarioEstaLogado()) { ?>
    <p class="text-success"> Você está logado como <?= usuarioLogado()?> <a href="logout.php">Deslogar</a></p>
  <?php } else {?>


  <?php include ("formulario-login.php"); ?>

  <?php }?>
<?php require_once("rodape.php"); ?>

<?php include("cabecalho.php");
 include("conecta.php");
 include("banco-produto.php");
 include("banco-categoria.php");

    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $preco = $_POST['preco'];
    $descricao = $_POST['descricao'];
    $categoria_id = $_POST['categoria_id'];
    if(array_key_exists('usado', $_POST)){
      $usado = "true";
    }else{
      $usado = "false";
    }

    if(alteraProduto($conexao, $id,$nome, $preco, $descricao, $categoria_id,$usado)){ ?>
      <p class="alert-success">Produto <?= $nome?>,<?=$preco ?> foi alterado.</p>
      <?php } else {
        $msg = mysqli_error($conexao);
      ?>
      <p class="alert-danger">Produto <?= $nome?> não foi adicionado: <?=$msg?></p>

      <?php
      }
      ?>

<?php include("rodape.php"); ?>

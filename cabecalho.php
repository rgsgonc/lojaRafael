<?php
  error_reporting(E_ALL ^ E_NOTICE);
  require_once("mostra-alerta.php");
?>

<html>
<head>
    <title>Minha loja</title>
    <meta charset="utf-8">
    <link href="css/bootstrap.css" rel="stylesheet" />
    <link href="css/loja.css" rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="js/jquery-menu.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
		<link href='https://fonts.googleapis.com/css?family=Passion+One' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>
</head>

<body>
  <div class="navbar navbar-inverse navbar-twitch" role="navigation">
  	<div class="container">
  		<div class="navbar-header">
  			<a class="navbar-brand" href="index.php">
  				<span class="small-nav"> <span class="logo"> <B> </span> </span>
  				<span class="full-nav"> < AKA > </span>
  			</a>
  		</div>
  		<div class="">
  			<ul class="nav navbar-nav">
  				<li class="active">
  					<a href="index.php">
  						<span class="small-nav" data-toggle="tooltip" data-placement="right" title="Home">
  							<span class="glyphicon glyphicon-home"></span>
  						</span>
  						<span class="full-nav"> Home </span>
  					</a>
  				</li>

          <li>
            <a href="produto-formulario.php">
              <span class="small-nav" data-toggle="tooltip" data-placement="right" title="Adiciona Produto">
                <span class="glyphicon glyphicon-plus"></span>
              </span>
              <span class="full-nav"> Adiciona Produto </span>
            </a>
          </li>

  				<li>
  					<a href="produto-lista.php">
  						<span class="small-nav" data-toggle="tooltip" data-placement="right" title="Produtos">
  							<span class="glyphicon glyphicon-shopping-cart"></span>
  						</span>
  						<span class="full-nav"> Produtos </span>
  					</a>
  				</li>
  				<li>
  					<a href="contato.php">
  						<span class="small-nav" data-toggle="tooltip" data-placement="right" title="Contato">
  							<span class="glyphicon glyphicon-earphone"></span>
  						</span>
  						<span class="full-nav"> Contato </span>
  					</a>
  				</li>
  			</ul>
  		</div><!--/.nav-collapse -->
  	</div>
  </div>

  <button type="button" class="btn btn-default btn-xs navbar-twitch-toggle">
  	<span class="glyphicon glyphicon-chevron-right nav-open"></span>
  	<span class="glyphicon glyphicon-chevron-left nav-close"></span>
  </button>


    <div class="container">
      <div class="principal">
          <?php
            mostraAlerta("success");
            mostraAlerta("danger");
          ?>

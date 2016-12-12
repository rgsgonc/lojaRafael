<?php
session_start();

function usuarioEstaLogado(){
	return isset($_SESSION["usuario_logado"]);
}

function verificaUsuario(){
	if(!usuarioEstaLogado()){
		$_SESSION["danger"] = "Acesso não permitido, realize o login.";
		header("Location: index.php?falhaDeSeguranca=true");
		die();
	}
}

function usuarioLogado(){
	return $_SESSION["usuario_logado"];
}

function logaUsuario($email){
	setcookie("usuario_logado", email, time() + 60);
	$_SESSION["usuario_logado"] = $email;
}

function logout(){
	session_destroy();
	session_start();
}

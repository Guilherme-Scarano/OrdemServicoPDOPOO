<?php
require_once("../valida_session/valida_session.php");
require_once ("../Classes/Generica.class.php");
	     
$objUsu = new Generica();
$codigo = $_POST["cod"];
$status = $_POST["status"];
$data=date("y/m/d");

$tabela = 'usuario';
$dados = $objUsu->editarDados ($tabela,$codigo,$status,$data);

if ($dados == 1){
	$_SESSION['texto_sucesso'] = 'Os dados do usuário foram alterados no sistema.';
	header ("Location:usuario.php");
}else{
	$_SESSION['texto_erro'] = 'Os dados do usuário não foram alterados no sistema!';
	header ("Location:usuario.php");
}

		
?>
<?php
require_once('../valida_session/valida_session.php');
require_once ("../Classes/Servico.class.php");

$objSer = new Servicos();

$codigo = $_POST["cod"];
$nome = $_POST["nome"];
$valor = $_POST["valor"];
$data=date("y/m/d");

$dados = $objSer->editarServico($codigo,$nome,$valor,$data);
if ($dados == 1){
	$_SESSION['texto_sucesso'] = 'Os dados do serviço foram alterados no sistema.';
	header ("Location:servico.php");
}else{
	$_SESSION['texto_erro'] = 'Os dados do serviço não foram alterados no sistema!';
	header ("Location:servico.php");
}
		
?>
<?php
session_start();
include_once("conexao.php");

$tipoImovel = filter_input(INPUT_POST, 'tipoImovel', FILTER_SANITIZE_STRING);

$quartos = filter_input(INPUT_POST, 'quartos', FILTER_SANITIZE_NUMBER_INT);
$suites = filter_input(INPUT_POST, 'suites', FILTER_SANITIZE_NUMBER_INT);
$vagas = filter_input(INPUT_POST, 'vagas', FILTER_SANITIZE_NUMBER_INT);
$area = filter_input(INPUT_POST, 'area', FILTER_SANITIZE_NUMBER_INT);
$armario = filter_input(INPUT_POST, 'armario', FILTER_SANITIZE_STRING);

$rua = filter_input(INPUT_POST, 'rua', FILTER_SANITIZE_STRING);
$numero = filter_input(INPUT_POST, 'numero', FILTER_SANITIZE_NUMBER_INT);
$complemento = filter_input(INPUT_POST, 'complemento', FILTER_SANITIZE_NUMBER_INT);
$bairro = filter_input(INPUT_POST, 'bairro', FILTER_SANITIZE_STRING);
$aluguel = filter_input(INPUT_POST, 'aluguel', FILTER_SANITIZE_NUMBER_INT);
$data = filter_input(INPUT_POST, 'data', FILTER_SANITIZE_STRING);
$hora = filter_input(INPUT_POST, 'hora', FILTER_SANITIZE_STRING);
$mensagem = filter_input(INPUT_POST, 'mensagem', FILTER_SANITIZE_STRING);

if($tipoImovel == 'Apartamento'){
	$salas2 = filter_input(INPUT_POST, 'salas2', FILTER_SANITIZE_STRING);
	$andar = filter_input(INPUT_POST, 'andar', FILTER_SANITIZE_NUMBER_INT);
	$condominio = filter_input(INPUT_POST, 'condominio', FILTER_SANITIZE_NUMBER_INT);
	$portaria = filter_input(INPUT_POST, 'portaria', FILTER_SANITIZE_STRING);
}else if($tipoImovel == 'Casa'){
	$salas = filter_input(INPUT_POST, 'salas', FILTER_SANITIZE_NUMBER_INT);
}

//echo "Nome: $nome <br>";
//echo "E-mail: $email <br>";

$result_usuario = "INSERT INTO imobiliaria (quartos, suites, vagas, area,tipoImovel,armario, rua, numero, complemento,bairro, aluguel) VALUES ('$quartos', '$suites','$vagas', '$area','$tipoImovel','$armario','$rua','$numero','$complemento','$bairro','$aluguel')";
$resultado_usuario = mysqli_query($conn, $result_usuario);

if(mysqli_insert_id($conn)){
	$_SESSION['msg'] = "<p style='color:green;'>Usuário cadastrado com sucesso</p>";
	header("Location: index.html");
}else{
	$_SESSION['msg'] = "<p style='color:red;'>Usuário não foi cadastrado com sucesso</p>";
	header("Location: index.html");
}

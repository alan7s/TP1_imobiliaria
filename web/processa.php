<?php
session_start();
include_once("conexao.php");

$opcao = filter_input(INPUT_POST, 'opcao', FILTER_SANITIZE_STRING);

if ($opcao =='cadastro')
{
	$tipoImovel = filter_input(INPUT_POST, 'tipoimovel', FILTER_SANITIZE_STRING);

	$quartos = filter_input(INPUT_POST, 'quartos', FILTER_SANITIZE_NUMBER_INT);
	$suites = filter_input(INPUT_POST, 'suites', FILTER_SANITIZE_NUMBER_INT);
	$vagas = filter_input(INPUT_POST, 'vagas', FILTER_SANITIZE_NUMBER_INT);
	$area = filter_input(INPUT_POST, 'area', FILTER_SANITIZE_NUMBER_INT);
	$armario = filter_input(INPUT_POST, 'armario', FILTER_SANITIZE_STRING);

	$rua = filter_input(INPUT_POST, 'rua', FILTER_SANITIZE_STRING);
	$numero = filter_input(INPUT_POST, 'numero', FILTER_SANITIZE_NUMBER_INT);
	$complemento = filter_input(INPUT_POST, 'complemento', FILTER_SANITIZE_STRING);
	$bairro = filter_input(INPUT_POST, 'bairro', FILTER_SANITIZE_STRING);
	$aluguel = filter_input(INPUT_POST, 'aluguel', FILTER_SANITIZE_NUMBER_INT);
	$data = filter_input(INPUT_POST, 'data', FILTER_SANITIZE_STRING);
	$hora = filter_input(INPUT_POST, 'hora', FILTER_SANITIZE_STRING);
	$mensagem = filter_input(INPUT_POST, 'mensagem', FILTER_SANITIZE_STRING);
	$salas = filter_input(INPUT_POST, 'salas', FILTER_SANITIZE_NUMBER_INT);

	//if($tipoImovel == 'Apartamento'){
	$andar = filter_input(INPUT_POST, 'andar', FILTER_SANITIZE_NUMBER_INT, FILTER_NULL_ON_FAILURE);
	$condominio = filter_input(INPUT_POST, 'condominio', FILTER_SANITIZE_NUMBER_INT, FILTER_NULL_ON_FAILURE);
	$portaria = filter_input(INPUT_POST, 'portaria', FILTER_SANITIZE_STRING, FILTER_NULL_ON_FAILURE);
	$result_usuario = "INSERT INTO imobiliaria (tipoImovel,quartos, suites, vagas, area,armario, rua, numero, complemento,bairro, aluguel, data, hora, mensagem,salas,andar,condominio,portaria) VALUES ('$tipoImovel','$quartos', '$suites','$vagas', '$area','$armario','$rua','$numero','$complemento','$bairro','$aluguel','$data','$hora','$mensagem','$salas','$andar','$condominio','$portaria')";
		//PRECISA ARRUMAR.. ANDAR CONDOMINIO E PORTARIA PRECISAM TER VALOR NULL PRA CADASTRAR CASA!
	/*}else if($tipoImovel == 'Casa'){
		$result_usuario = "INSERT INTO imobiliaria (tipoImovel,quartos, suites, vagas, area,armario, rua, numero, complemento,bairro, aluguel, data, hora, mensagem,salas,andar,condominio,portaria) VALUES ('$tipoImovel','$quartos', '$suites','$vagas', '$area','$armario','$rua','$numero','$complemento','$bairro','$aluguel','$data','$hora','$mensagem','$salas','0','0','N')";
	}*/

	$resultado_usuario = mysqli_query($conn, $result_usuario);

	if(mysqli_insert_id($conn)){
		$_SESSION['msg'] = "<p style='color:green;'>Usuário cadastrado com sucesso</p>";
		header("Location: index.html");
	}else{
		$_SESSION['msg'] = "<p style='color:red;'>Usuário não foi cadastrado com sucesso</p>";
		header("Location: index.html");
	}
}
else if($opcao == 'visualizar')
{
	include_once("consulta.php");
}
else if($opcao == 'agendar'){
    $data1 = filter_input(INPUT_POST, 'data1', FILTER_SANITIZE_STRING);
	$hora1 = filter_input(INPUT_POST, 'hora1', FILTER_SANITIZE_STRING);
    echo "<table border=10";
    echo "<tr>";
    echo "<th>TipoImovel</th>";
    echo "<th>Quartos</th>";
    echo "<th>Suites</th>";
    echo "<th>Vagas</th>";
    echo "<th>Area</th>";
    echo "<th>Armario</th>";
    echo "<th>Rua</th>";
    echo "<th>Numero</th>";
    echo "<th>Complemento</th>";
    echo "<th>Bairro</th>";
    echo "<th>Aluguel</th>";
    echo "<th>Data</th>";
    echo "<th>Hora</th>";
    echo "<th>Mensagem</th>";
    echo "<th>Salas Jantar/Estar</th>";
    echo "<th>Andar</th>";
    echo "<th>Comdominio</th>";
    echo "<th>Portaria</th>";
    echo "</tr>";
    
    $result_imovel = "SELECT * FROM imobiliaria WHERE '$data1' = data";
    
    $resultado_imovel = mysqli_query($conn,$result_imovel) or die("Error ao tentar cadastrar registro");
    
    while ($row_imovel = mysqli_fetch_array($resultado_imovel))  {
    
    		$tipoImovel =$row_imovel['tipoImovel'];$quartos=$row_imovel['quartos'];
    		$suites=$row_imovel['suites'];$vagas=$row_imovel['vagas'];
    		$area=$row_imovel['area'];$armario=$row_imovel['armario'];
    		$rua=$row_imovel['rua'];$numero=$row_imovel['numero'];
    		$complemento=$row_imovel['complemento'];$bairro=$row_imovel['bairro'];
    		$aluguel=$row_imovel['aluguel'];$data=$row_imovel['data'];$hora=$row_imovel['hora'];
    		$mensagem=$row_imovel['mensagem'];$salas=$row_imovel['salas'];
    		$andar=$row_imovel['andar'];$condominio=$row_imovel['condominio'];
    		$portaria=$row_imovel['portaria'];
    
    		echo "<tr>";
    		echo "<td>".$tipoImovel."</td>";
    		echo "<td>".$quartos."</td>";
    		echo "<td>".$suites."</td>";
    		echo "<td>".$vagas."</td>";
    		echo "<td>".$area."</td>";
    		echo "<td>".$armario."</td>";
    		echo "<td>".$rua."</td>";
    		echo "<td>".$numero."</td>";
    		echo "<td>".$complemento."</td>";
    		echo "<td>".$bairro."</td>";
    		echo "<td>".$aluguel."</td>";
    		echo "<td>".$data."</td>";
    		echo "<td>".$hora."</td>";
    		echo "<td>".$mensagem."</td>";
    		echo "<td>".$salas."</td>";
    		echo "<td>".$andar."</td>";
    		echo "<td>".$condominio."</td>";
    		echo "<td>".$portaria."</td>";
    		echo "</tr>";
    	
    }
    mysqli_close($conn);
    echo "</table>";
}
?>
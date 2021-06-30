<!doctype html>
<html lang="pt-br">
  <head>

    <title>Formulário - cadastro imóveis</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="css/bootstrap.min.css">

    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="containers col-lg">
<?php

		include_once("conexao.php");

		echo "<table class='table table-hover'>";
		echo "<tr>";
		echo "<td>Imóveis cadastrados</td>";
		echo "<td></td>";
		echo "<td></td>";
		echo "<td></td>";
		echo "<td></td>";
		echo "<td></td>";
		echo "<td></td>";
		echo "<td></td>";
		echo "<td></td>";
		echo "<td></td>";
		echo "<td></td>";
		echo "<td></td>";
		echo "<td></td>";
		echo "<td></td>";
		echo "<td></td>";
		echo "<td></td>";
		echo "<td></td>";
		echo "</tr>";
		echo "<tr>";
		echo "<th>ID</th>";
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
		//echo "<th>Data</th>";
		//echo "<th>Hora</th>";
		echo "<th>Mensagem</th>";
		echo "<th>Salas Jantar/Estar</th>";
		echo "<th>Andar</th>";
		echo "<th>Comdominio</th>";
		echo "<th>Portaria</th>";
		echo "</tr>";
        
        
		$result_imovel = "SELECT * FROM imobiliaria";

		$resultado_imovel = mysqli_query($conn,$result_imovel) or die("Error ao tentar buscar registro");

		while ($row_imovel = mysqli_fetch_array($resultado_imovel))  {
                $ID = $row_imovel['ID'];
				$tipoImovel =$row_imovel['tipoImovel'];$quartos=$row_imovel['quartos'];
				$suites=$row_imovel['suites'];$vagas=$row_imovel['vagas'];
				$area=$row_imovel['area'];$armario=$row_imovel['armario'];
				$rua=$row_imovel['rua'];$numero=$row_imovel['numero'];
				$complemento=$row_imovel['complemento'];$bairro=$row_imovel['bairro'];
				$aluguel=$row_imovel['aluguel'];//$data=$row_imovel['data'];$hora=$row_imovel['hora'];
				$mensagem=$row_imovel['mensagem'];$salas=$row_imovel['salas'];
				$andar=$row_imovel['andar'];$condominio=$row_imovel['condominio'];
				$portaria=$row_imovel['portaria'];
                echo "<div class='containers2 col-lg'>";
                echo "<tr>";
				echo "<td>".$ID."</td>";
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
				//echo "<td>".$data."</td>";
				//echo "<td>".$hora."</td>";
				echo "<td>".$mensagem."</td>";
				echo "<td>".$salas."</td>";
				echo "<td>".$andar."</td>";
				echo "<td>".$condominio."</td>";
				echo "<td>".$portaria."</td>";
				echo "</tr>";
	
		}
		
		//echo "</table>";
	///	echo "<table class='table table-hover table-dark'>";
	//	echo "<tr>";
	//	echo "<td>Visitas agendadas</td>";
	//echo "<td></td>";
	//	echo "<td></td>";
	//	echo "</tr>";
	//	echo "<tr>";
	//	echo "<th>Data</th>";
	//	echo "<th>Hora</th>";
	//	echo "</tr>";

	//	$result_imovel = "SELECT * FROM visita";

	//	$resultado_imovel = mysqli_query($conn,$result_imovel) or die("Error ao tentar buscar registro");

	//	while ($row_imovel = mysqli_fetch_array($resultado_imovel))  {
       //         $imovelid = $row_imovel['imovelid'];
		//		$data =$row_imovel['data'];$hora=$row_imovel['hora'];
				
		//		echo "<tr>";
		//		echo "<td>".$imovelid."</td>";
		//		echo "<td>".date("d/m/Y", strtotime($data))."</td>";
		//		echo "<td>".$hora."</td>";
		//		echo "</tr>";
	
	//	}
	//	mysqli_close($conn);
	//	echo "</table>";
       // echo "</div>";
?>
    </div>
</body>
</html>
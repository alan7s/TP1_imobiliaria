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
        echo "</table>";
		echo "<table class='table table-hover'>";
		echo "<tr>";
		echo "<td>Visitas agendadas</td>";
		echo "<td></td>";
		echo "<td></td>";
		echo "</tr>";
		echo "<tr>";
		echo "<th>Imovel ID</th>";
		echo "<th>Data</th>";
		echo "<th>Hora</th>";
		echo "</tr>";
        $result_imovel = "SELECT * FROM visita";

		$resultado_imovel = mysqli_query($conn,$result_imovel) or die("Error ao tentar buscar registro");

		while ($row_imovel = mysqli_fetch_array($resultado_imovel))  {
                $imovelid = $row_imovel['imovelid'];
				$data =$row_imovel['data'];$hora=$row_imovel['hora'];
				
				echo "<tr>";
				echo "<td>".$imovelid."</td>";
				echo "<td>".date("d/m/Y", strtotime($data))."</td>";
				echo "<td>".$hora."</td>";
				echo "</tr>";
	
		}
		mysqli_close($conn);
		echo "</table>";
        echo "</div>";
?>
    </div>
</body>
</html>
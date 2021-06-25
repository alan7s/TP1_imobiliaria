<?php

include_once("conexao.php");

echo "<table border=2";
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

$result_imovel = "SELECT * FROM imobiliaria";

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

?>
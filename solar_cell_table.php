<?php

$SolarCell=$_POST["Solar"];
echo $SolarCell;
$NumberofCells=$_POST["Number"];
$WNumber=$_POST["Well"];
$Egeneration=$_POST["Generation"];
$EUsage=$_POST["Usage"];
$Wproduction=$_POST["Water"];

$localhost = "127.0.0.1";
$user = "root";
$password = "";
$database = "water";
	
$link = mysqli_connect($localhost, $user, $password, $database);

if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

echo "Success: A proper connection to MySQL was made! The my_db database is great." . PHP_EOL;
echo "Host information: " . mysqli_get_host_info($link) . PHP_EOL;

	$querySolarCell = "SELECT * FROM SOLARCELL WHERE Cell_Number = '$SolarCell'";
	$queryEgeneration = "SELECT * FROM SOLARCELL WHERE  EnergyGeneration = '$Egeneration'";
	$queryWNumber = "SELECT * FROM SOLARCELL WHERE Well = '$WNumber'";
	$queryEUsage = "SELECT * FROM SOLARCELL WHERE EnergyUsage  = '$EUsage'";
	$queryWproduction = "SELECT * FROM SOLARCELL WHERE WaterProduction = '$Wproduction'";
	$queryNumberofCells = "SELECT * FROM SOLARCELL WHERE NumberofCells = '$NumberofCells'";

	$resultSolarCell= $link->query($querySolarCell);
	$resultEgeneration =  $link->query($queryEgeneration);
	$resultWNumber =  $link->query($WNumber);
	$resultEUsage=  $link->query($queryEUsage);
	$resultWproduction=  $link->query($queryWproduction);
	$resultNumberofCells=  $link->query($queryNumberofCells);
	
	echo "<tr>";
	echo "<td>" . $resultSolarCell . "</td>";
	echo "<td>" . $resultEgeneration . "</td>";
	echo "<td>" . $resultWNumber . "</td>";
	echo "<td>" . $resultEUsage . "</td>";
	echo "<td>" . $resultWproduction . "</td>";
	echo "<td>" . $resultNumberofCells . "</td>";
	echo "</tr>";

mysqli_close($link);

?>

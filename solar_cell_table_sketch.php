<?php

$SolarCell=$_POST["Solar"];
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

mysqli_close($link);

?>

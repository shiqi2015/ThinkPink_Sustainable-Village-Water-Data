<!DOCTYPE html>
<html>

<head>
    <link type="text/css" rel="stylesheet" href="site.css" media="screen" />
    <title>Global Water Institute</title>
</head>

<body>
    <div class="header_img">
        <div class="header_title">
            <h1>Global Water Institute</h1>
        </div>
        <img class="header" src="tanzania.jpg" alt="Tanzania" />
	</div>
	<div class="table">
        <h1>Location Table</h1>
        <table border=1px>
            <tr>
                <th>Location Name</th>
                <th>Province/State</th>
                <th>Longitude</th>
                <th>Latitude</th>
            </tr>

<?php
while (!$Location_Output->eof()) {
	session_start();
	$inputLongtitude=$_POST["Longtitude"];
	$_SESSION['long'] = $input;
	$inputLatitude=$_POST["Latitude"];
	$inputL_Name=$_POST["L_Name"];
    $inputState=$_POST["Province/State"];

    $localhost = "localhost";
	$user = "root";
	$password = "";
	$database = "Location";
	
	$connect = mysqli_connect($localhost,$user,$password,$database);

	$queryLongtitude = "SELECT * FROM Location WHERE Longtitude = '$inputLongtitude'";
	$queryLatitude = "SELECT * FROM Location WHERE Email = '$inputLatitude'";
	$queryL_Name = "SELECT * FROM Location WHERE Email = '$inputL_Name'";
	$queryState = "SELECT * FROM Location WHERE Email = '$inputState'";

	$resultLongtitude= mysqli::query($queryLongtitude);
	$resultLatitude = mysqli::query($queryLatitude);
	$resultL_Name = mysqli::query($queryL_Name);
	$resultState = mysqli::query($queryState);

	echo "<tr>";
	echo "<td>" . $resultL_Name . "</td>";
	echo "<td>" . $resultState . "</td>";
	echo "<td>" . $resultLongtitude . "</td>";
	echo "<td>" . $resultLatitude . "</td>";
	echo "</tr>";

	mysqli_close($link);
}
 ?>

		</table>
    </div>

<div class="footer_img">
        <div class="footer_info">
            <ul>
                <li>2016 | Global Water Institute | 019 Bricker Hall | 190 North Oval Mall | Columbus, OH 43210 | 614-688-1906
                </li>
                <li>Contact: Global Water Institute | Webmaster</li>
                <li>Find us on Facebook | Join our newsletter</li>
            </ul>
        </div>
        <img src="water.jpg" alt="Water" />
    </div>
</body>

</html>
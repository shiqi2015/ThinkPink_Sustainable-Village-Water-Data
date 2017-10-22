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
	if (isset($_POST['Longtitude'])) 
	{  
    $inputLongtitude=$_POST["Longtitude"];
    }
	$_SESSION['long'] = $inputLongtitude;
	if (isset($_POST['Latitude'])) 
	{  
    $inputLatitude=$_POST["Latitude"];
    }
    if (isset($_POST['Location_Name'])) 
	{  
	$inputL_Name=$_POST["Location_Name"];
    }
    if (isset($_POST['State'])) 
	{  
    $inputState=$_POST["State"];
    }

    $localhost = "localhost";
	$user = "root";
	$password = "";
	$database = "GLOBAL_WATER";
	
	$connect = mysqli_connect($localhost,$user,$password,$database);

	$queryLongtitude = "SELECT * FROM LOCATION WHERE Longtitude = '$inputLongtitude'";
	$queryLatitude = "SELECT * FROM LOCATION WHERE Latitude = '$inputLatitude'";
	$queryL_Name = "SELECT * FROM LOCATION WHERE L_Name = '$inputL_Name'";
	$queryState = "SELECT * FROM LOCATION WHERE State = '$inputState'";

	$resultLongtitude= $link->query($queryLongtitude);
	$resultLatitude = $link->query($queryLatitude);
	$resultL_Name = $link->query($queryL_Name);
	$resultState = $link->query($queryState);

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

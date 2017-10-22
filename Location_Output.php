<?php
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

	mysqli_close($link);
 ?>

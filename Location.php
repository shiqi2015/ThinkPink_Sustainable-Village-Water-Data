<?php
	session_start();
	if (isset($_POST['Longtitude'])) 
	{  
    $inputLongtitude=$_POST["Longtitude"];
    }
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
    

    $localhost = "127.0.0.1";
	$user = "root";
	$password = "";
	$database = "GLOBAL_WATER";
	
	//$link = mysqli_connect($localhost,$user,$password,$database);
    $link = mysqli_connect('127.0.0.1','root','','GLOBAL_WATER');
   
	if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
	}

	echo "Success: A proper connection to MySQL was made! The my_db database is great." . PHP_EOL;
	echo "Host information: " . mysqli_get_host_info($link) . PHP_EOL;

    if (!$link) {
	$query = "INSERT INTO LOCATION VALUES ( '$inputLongtitude', '$inputLatitude','$inputL_Name', '$inputState')";
    }

	$result= $link->query ($query);

    mysqli_close($link);
 ?>

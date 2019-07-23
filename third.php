<?php
//Creates new record as per request
    //Connect to database
    $servername = "localhost";
    $username = "stuzirelogin";
    $password = "avinash";
    $dbname = "stuzire";
 
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Database Connection failed: " . $conn->connect_error);
    }
 
    //Get current date and time
    date_default_timezone_set('Asia/Kolkata');
    if(!empty($_POST['lati']) && !empty($_POST['lati']))
    {
    	$lati = $_POST['lati'];
    	$longi = $_POST['longi'];
        $sql="UPDATE Bus_gps SET Latitude='".$lati."',Longitude='".$longi."' WHERE Busno='1'";
 
		if ($conn->query($sql) === TRUE) {
		    echo "OK";
		} else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		}
	}
    $conn->close();
?>
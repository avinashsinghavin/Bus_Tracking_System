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
    $d = date("Y-m-d");
    //echo " Date:".$d."<BR>";
    $t = date("H:i:s");
    $ACT="90";
    if(!empty($_POST['status']) && !empty($_POST['station']))
    {
    	$status = $_POST['status'];
    	$station = $_POST['station'];
        $Bus = $_POST['Bus'];
	    $sql = "INSERT INTO Bus_gps (BUSNO, Latitude, Longitude, Activity)
		VALUES ( '".$Bus."', '".$station."', '".$status."','".$ACT."')";
 
		if ($conn->query($sql) === TRUE) {
		    echo "OK";
		} else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		}
	}
 
 
	$conn->close();
?>
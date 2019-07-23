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
    //$d = date("Y-m-d");
    //echo " Date:".$d."<BR>";
    //$t = date("H:i:s");
 	//$lati = $_POST['lati'];
 //	$longi=$_POST['longi'];;
    if(!empty($_POST['lati']) && !empty($_POST['lati']))
    {
    	$lati = $_POST['lati'];
    	$longi = $_POST['longi'];
 
	   // $sql = "INSERT INTO testcase (station, status, Date, Time)
		//VALUES ('".$station."', '".$status."', '".$d."', '".$t."')";
 
        $sql="UPDATE testcase SET latitude='".$lati."',longitude='".$longi."' WHERE BUSNO='7'";
 
		if ($conn->query($sql) === TRUE) {
		    echo "OK";
		} else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		}
		echo " post using status is  ".$status." now station  ".$station."  ";
	}
 	echo " post using lati is  ".$lati." now longi  ".$longi."  ";
    $conn->close();
?>
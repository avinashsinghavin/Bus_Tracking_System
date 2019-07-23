<?php
    $servername = "localhost";
    $username = "stuzirelogin";
    $password = "avinash";
    $dbname = "stuzire";
	if(isset($_POST['what']) && $_POST['what']=='get_data'){
		$conn=mysqli_connect('localhost','stuzirelogin','avinash','stuzire');
		//$conn = new mysqli_connect($servername, $username, $password, $dbname);
		$qry="select * from Bus_gps order by Busno ASC;";
		$res=mysqli_query($conn,$qry);
		$Lo=array();
		$Bs=array();
		$La=array();
		$status1=array();
		while($data=mysqli_fetch_assoc($res)){
			array_push($La, $data['Latitude']);
			array_push($Lo, $data['Longitude']);
			array_push($Bs, $data['Busno']);
			array_push($status1, $data['status1']);
		}
		$ret=array("Bs"=>$Bs,"La"=>$La,"Lo"=>$Lo,"status1"=>$status1);
		exit(json_encode($ret));
		

	}
?>
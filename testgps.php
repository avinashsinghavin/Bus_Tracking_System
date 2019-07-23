<!DOCTYPE html>
<html>
<head>
<meta http-equiv="refresh" content="5">
</head>
<body>
<style>
#c4ytable {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}
 
#c4ytable td, #c4ytable th {
    border: 1px solid #ddd;
    padding: 8px;
}
 
#c4ytable tr:nth-child(even){background-color: #f2f2f2;}
 
#c4ytable tr:hover {background-color: #ddd;}
 
#c4ytable th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #00A8A9;
    color: white;
}
</style>
 
<?php
    //Connect to database and create table
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
?> 
<div id="cards" class="cards">
 
<?php 
   // $sql = "SELECT * FROM testcase ORDER BY BUSNO DESC";
    $sql="SELECT * FROM testcase";
    if ($result=mysqli_query($conn,$sql))
    {
      // Fetch one and one row
      echo "<TABLE id='c4ytable'>";
      echo "<TR><TH>BUS.No.</TH><TH>LATI</TH><TH>LONGI</TH></TR>";
      //while ($row=mysqli_fetch_row($result))
      //{
        echo "<TR>";
        echo "<TD>".$row[0]."</TD>";
        echo "<TD>".$row[1]."</TD>";
        echo "<TD>".$row[2]."</TD>";
      //}
      echo "</TABLE>";
      // Free result set
      mysqli_free_result($result);
    }
 
    mysqli_close($conn);
?>
</div>
</body>
</html>
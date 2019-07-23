<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Google Maps</title>
  <link href="style.css" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script type="text/javascript">
    lock view page source
    document.addEventListener('contextmenu', event => event.preventDefault());
  //---------------now calling value on each relode function  -----
  //---------------------------------------------------------------
  </script>
</head>
<body>
    <div class="navbar navbar-light bg-light row" >
            <div class="col-2" style="text-align: left;">
            <img src="1.jpg" style="height: 50px; width: 50px;">
          </div>
          <div class="col-10" style="text-align: right;">
            <a class="navbar-brand" href="first.html"><button type="button" class="btn btn-primary"> HOME </button></a>
            <a class="navbar-brand" href="request.php"><button type="button" class="btn btn-success">REQUEST FOR BUS</button></a>
        </div>
  </div>
  <div style="background-color: lightblue;" class="row">
    <div style="text-align: left;" class="col-8">
     <form action="second.php" method="post">
        <select name="to1" class="form-control" style="background-color: lightblue;">
                <option value="1" selected> Old Bus Stop </option>
                <option value="2" > JJ </option>
                <option value="3" > GIET </option>
            </select>
      </div>
      <div style="text-align: right;" class="col-2">
            <input type="submit" name="submit" class="btn btn-primary" onclick="callfun('toplace')" style="resize:none;" value="Search">
        </form>
        <script>//--------------
        //-------------------</script>
    </div>
  </div>
  <div class="row" style="background-color: lightblue;">
    <div class="col-12">
    <center style="background-color: lightblue;"><button type="button" class="btn btn-info" onclick="location.reload()">Refresh</button></center>
    </div>
  </div>
    <div id="refresh" class="row">
      <?php

          $g1=19.048120;
          $g2=83.834904;
          $h1="19.075143";
          $h2="83.809080";
          $val=1;$k1;$k2;
          if(isset($_POST['submit'])){
            $val=$_POST['to1'];
          }
          if($val=='1'){
            $h1="19.075244";
            $h2="83.809158";
          }
          if($val=='2'){
            $h1="19.071425";
            $h2="83.812803";
          }
          if($val=='3'){
            $h1="19.048120";
            $h2="83.834904";
          }
            $conn=mysqli_connect("localhost","stuzirelogin","avinash","stuzire");
	        if ($conn->connect_error) {
              die("Database Connection failed: " . $conn->connect_error);
            }
             $sql = "SELECT * FROM Bus_gps where Busno='1'";
            if ($result=mysqli_query($conn,$sql))
             {
                while ($row=mysqli_fetch_row($result))
                {
                    $k1=$row[1];
                    $k2=$row[2];
                }
                mysqli_free_result($result);
            }
            $g1=$k1;$g2=$k2;
            echo "<iframe src='https://www.google.com/maps/embed?pb=!1m25!1m12!1m3!1d482268.6983084777!2d".$h2."!3d".$h1."!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m10!3e0!4m4!2s".$g1."%2C+".$g2."!3m2!1d".$g1."!2d".$g2."!4m3!3m2!1d".$h1."!2d".$h2."!5e0!3m2!1sen!2sin!4v1552105895988' width='100%' height='1000' frameborder='0' style='border:0' allowfullscreen></iframe>";
            mysqli_close($conn);
      ?>
    </div>
  <div class="row navbar fixed-bottom bg-light">
       <center><a href="#" class="text-primary">About Developer</a></center>
     </div>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>
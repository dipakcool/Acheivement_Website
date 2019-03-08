<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body, html {
    height: 100%;
    margin: 0;
}

.bg {
    background-image: url("images/15.JPG");
  height: 100%;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    opacity:1.0;
}
th {
       border: 2px solid blue;
   border-collapse: collapse;
 font-family: Lato-Bold;
 font-size: 18px;
 color: #fff;
 padding: 10px;
 line-height: 1.4;

 background-color: #6c7ae0;
}

table, td {
    border: 1px solid black;
    border-collapse: collapse;
    background-color:#ebebeb;
    padding: 10px;
}
mark {
    background-color: rgb(255,255,0);
    color: black;
}
</style>
</head>
<body>
<div class="bg">
  <center>
      <h1>
          <mark>  <span style="color:red">INHOUSE WORKSHOPS</span> </mark>
  </h1>
</center>
<center>
  <?php
  include("conn.php");

  $sqlget = "SELECT * FROM staffinternational";
  $sqldata = mysqli_query($conn,$sqlget) or die('ERROR CONNECTING TO DATABASE');

  echo "<table>";
  echo "<tr><th>Staff ID</th><th>Staff Name</th><th>Conference Name</th><th>Conference Attended</th></tr>";

  while($row = mysqli_fetch_array($sqldata,MYSQLI_ASSOC))
  {
	  echo "<tr><td>";
	  echo $row['Staff id'];
	  echo "</td><td>";
	  echo $row['Staff name'];
	  echo "</td><td>";
	  echo $row['Name of Conference'];
	  echo "</td><td>";
	  echo $row['No. of Conference attended'];
	  echo "</td></tr>";
  }
?>
</center>
</div>
</body>
</html>

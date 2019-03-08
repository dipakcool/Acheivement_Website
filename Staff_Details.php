<!doctype html>
<html lang=''>
<head>
   <meta charset='utf-8'>
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="css/h_nav_style.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
   <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
   <script src="script.js"></script>
     <script src="javascript/logout.js"></script>
   <title>Staff Menu</title>
</head>
<body class="body">
    <header class="mainheader">
      <input type="image" value="logout" src="images/lgt.png" alt="Submit" align="right" width="48" height="48"  id="submit" onclick="logout()"/>
	<img src="images/sscelogo2.png">
     <img src="images/cse.png" style="width:100px;height:100px;">
    <img src="images/invc.PNG">
</header>

<div id='cssmenu'>
<ul>
   <li><a href="h_nav.php"><span>Back</span></a></li>
   <li class='active has-sub'><a href='#'><span>Conference</span></a>
      <ul>
         <li class='has-sub'><a href="national.php"><span>National</span></a>
         </li>
         <li class='has-sub'><a href="international.php"><span>International</span></a>
         </li>
      </ul>
   </li>
 <li class='active has-sub'><a href='#'><span>Workshop/FDP</span></a>
     <ul>
         <li class='has-sub'><a href="inhouse.php"><span>InHouse</span></a>
         </li>
         <li class='has-sub'><a href="external.php"><span>External</span></a>
         </li>
      </ul>
 <li class='active has-sub'><a href='#'><span>Publication</span></a>
     <ul>
         <li class='has-sub'><a href="journalpublication.php"><span>Journal Publication</span></a>
         </li>
         <li class='has-sub'><a href="bookpublication.php"><span>Book Publication</span></a>
         </li>
      </ul>
 <li class='active has-sub'><a href="awards.php"><span>Awards</span></a>
 <li class='active has-sub'><a href="funds.php"><span>Fund</span></a>
 <li class='active has-sub'><a href="onlinecourses.php"><span>Online Courses</span></a>
</ul>
</div>

</body>
<html>

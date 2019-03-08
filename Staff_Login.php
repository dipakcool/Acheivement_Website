<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
    <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" type="text/css" href="css/style.css">
 <link rel="stylesheet" type="text/css" href="css/h_nav_style.css">
 <script src="javascript/login.js"></script>
</head>

<body class="body">
<header class="mainheader">
	<img src="images/sscelogo2.png">
    <img src="images/cse.png" style="width:100px;height:100px;">
    <img src="images/invc.PNG">
</header>

	  <div class="main">

		<h3><b>Login</b></h3><hr/>

		<form id="form_id" method="post" name="myform">
		  <strong>User Name :</strong></br>
		  <input type="text" name="username" id="username"/></br>

		   <strong>Password :</strong></br>
		  <input type="password" name="password" id="password"/></br>

		  <input type="button" value="Login" id="submit" onclick="validate()"/>
		</form>

	  </div>

<script type="text/javascript">
  document.title="Login";
</script>

</body>
</html>

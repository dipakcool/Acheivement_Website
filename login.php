<?php 
require "conn.php";
$user_name = $_POST["user_name"];
$user_pass = $_POST["password"];
$mysql_qry = "select * from login where Username like '$user_name' and Password like '$user_pass';";
$result = mysqli_query($conn ,$mysql_qry);
if(mysqli_num_rows($result) > 0) {
echo "LOGIN SUCCESS !!!  WELCOME USER";
}
else {
echo "LOGIN UNSUCESSFUL";
}
 
?>
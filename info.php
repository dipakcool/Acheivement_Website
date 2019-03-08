
<?php

include("conn.php");
 if(isset($POST['submitted']))
 {

    $staff_id = $_POST['staff_id'];
    $staff_name = $_POST['name'];
    $staff_ach = $_POST['ach_drop'];
    $ach_name = $POST['ach_name'];
    $ach_type = $_POST['type'];
    $ach_num = $_POST['num'];

     if($ach_type = "Conference" && $ach_type = "National")
     {
     $sqlins = "INSERT INTO staffnational (Staff id,Staff name,Name of Conference,No. of Conference attended) VALUES ('$staff_id','$staff_name','$ach_name','$ach_num')";

        if(!mysqli_query($connect,$sqlins))
        {
            die("ERROR INSERTING RECORD");
        }

        echo "1 record added to database";

 }
 }
?>

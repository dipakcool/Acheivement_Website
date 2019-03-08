
<?php

include("conn.php");
 if(isset($POST['submit']))
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


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Staff Registration</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$("#myModal").modal('show');
	});
</script>
</head>
<body>
    <!--      <input type="hidden" name="submitted" value="true" />       -->
    <div id="myModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" onclick="location.href='h_nav.php'" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">

							<script type="text/javascript">
								 function validate_form() {
										 if (document.staff.$staff_name.value == "") {
												 alert("Please fill in the 'Your staff Name' box.");
												 return false;
										 }
										 if (document.staff.num.value == "") {
												 alert("Enter staff id");
												 return false;
										 }
										 alert("Sucessfully Submitted");
											if (!(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/).test(document.staff.email_id.value)) {
												 alert("You have entered an invalid email address!")
												 return (false)
										 }
								 }
									function isNumberKey(evt) {
										 var charCode = (evt.which) ? evt.which : event.keyCode;
										 if (charCode != 46 && charCode > 31 &&
												 (charCode < 48 || charCode > 57)) {
												 alert("Enter Number");
											return false;
									}
									return true;
							}
							//-->
							</script>
							</head>
							<body bgcolor="#FFFFFF">
							<form name="staff" action="enter_staff.php" onclick="validate_form()"  method="post">
  <!--                        <input type="hidden" name="submit" value="true" />       -->
							<table align="center" width=40% width="100%" cellspacing="2" cellpadding="2" border="5">
									<tr>
											<td colspan="2" align="center"><b>Staff registration form</b></td>
									</tr>
								<tr>
											<td align="left" valign="top" width="41%">Staff Id<span style="color:red">*</span></td>
											<td width="57%">
													<input type="text" value="" name="staff_id" size="24"></td>
									</tr>

                                <tr>
											<td align="left" valign="top" width="41%">Staff Name<span style="color:red">*</span></td>
											<td width="57%"><input type="text" value="" name="name" size="24"></td>
									</tr>

										<tr>
											 <td align="left" valign="top" width="41%">Acheivements</td>
											 <td width="57%">
													 <select name="ach_drop">
						<option value="Default">Conference</option>
						<option value="Default">Workshop/FDP</option>
						<option value="Default">Publication</option>
						<option value="Default">Awards</option>
						<option value="Default">Fund</option>
						<option value="Default">Online Courses</option>
						</select></td>
									</tr>

                                <tr>
											<td align="left" valign="top" width="41%">Acheivement Name<span style="color:red">*</span></td>
											<td width="57%"><input type="text" value="" name="ach_name" size="24"></td>
									</tr>

                                <tr>
											<td align="left" valign="top" width="41%">Type<span style="color:red">*</span></td>
											<td width="57%"><input type="text" value="" name="type" size="24"></td>
									</tr>

                                 <tr>
											<td align="left" valign="top" width="41%">Number<span style="color:red">*</span></td>
											<td width="57%"><input type="text" value="" onkeypress="return isNumberKey(event)" name="num" size="24"></td>
									</tr>


										<tr>


												<td colspan="2">
														<p align="center">
																<input type="submit" value="  Submit  " onclick="validate_form()" name="submit">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

																<input type="reset" value="  Reset All   " name="res"></td>
										</tr>
								</table>
							</form>
							</body>

            </div>
        </div>
    </div>
</div>
<!--  <?php
    echo $newrec;
    ?>    -->

</body>
</html>

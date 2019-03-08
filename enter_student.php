<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Student Registration</title>
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
<div id="myModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" onclick="location.href='h_nav.php'" data-dismiss="modal" aria-hidden="true">&times;</button>

            </div>
            <div class="modal-body">


							<script type="text/javascript">
								 function validate_form() {
										 if (document.emp.emp_name.value == "") {
												 alert("Please fill in the 'Your student Name' box.");
												 return false;
										 }
										 if (document.emp.num.value == "") {
												 alert("Enter student id");
												 return false;
										 }
										 alert("sucessfully Submitted");
											if (!(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/).test(document.emp.email_id.value)) {
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
					<form name="emp" action="" onsubmit="return validate_form();" method="post">
							<table align="center" width=40% width="100%" cellspacing="2" cellpadding="2" border="5">
									<tr>
											<td colspan="2" align="center"><b>Student Registration Form</b></td>
									</tr>
								<tr>
											<td align="left" valign="top" width="41%">Student Id<span style="color:red">*</span></td>
											<td width="57%">
													<input type="text" value="" name="staff_id" size="24"></td>
									</tr>

                                <tr>
											<td align="left" valign="top" width="41%">Student Name<span style="color:red">*</span></td>
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
							<option value="Default">Project</option>
							<option value="Default">Cultural</option>
							<option value="Default">Enterpreneur</option>
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
											<td width="57%">
													<input type="text" value="" name="num" onkeypress="return isNumberKey(event)" size="24"></td>
									</tr>

										<tr>
												<td colspan="2">
														<p align="center">
																<input type="submit" value="  Submit" name="sub">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
																<input type="reset" value="  Reset All   " name="res"></td>
										</tr>
								</table>
						</form>
				 </body>

            </div>
        </div>
    </div>
</div>
</body>
</html>

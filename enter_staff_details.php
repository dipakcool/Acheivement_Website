<html>
 <head>
 <title>Registration Form for staff</title>
     <script type="text/javascript">
        function validate_form() {
            if (document.emp.emp_name.value == "") {
                alert("Please fill in the 'Your staff Name' box.");
                return false;
            }
            if (document.emp.num.value == "") {
                alert("Enter staff id");
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
             <td colspan="2" align="center"><b>Staff registration form</b></td>
         </tr>
         <tr>
             <td align="left" valign="top" width="41%">Staff Name<span style="color:red">*</span></td>
             <td width="57%"><input type="text" value="" name="emp_name" size="24"></td>
         </tr>
         <tr>
             <td align="left" valign="top" width="41%">Staff Id<span style="color:red">*</span></td>
             <td width="57%">
                 <input type="text" value="" name="num" onkeypress="return isNumberKey(event)" size="24"></td>
         </tr>
            <tr>
                <td align="left" valign="top" width="41%">Department</td>
                <td width="57%"><select name="mydropdown">
<option value="Default">C.S.E</option>
 </select></td>
             </tr>
             <tr>
                <td align="left" valign="top" width="41%">Designation</td>
                <td width="57%">
                    <select name="mydropdown">
<option value="Default">Professor</option>
<option value="Asst.professor">Asst. Professor</option>
<option value="H.O.D">H.O.D</option>
</select></td>
           </tr>
           <tr>
               <td align="left" valign="top" width="41%">Email<span style="color:red">*</span></td>
               <td width="57%">
                   <input type="text" value="" name="email_id" size="24"></td>
           </tr>
           <tr>
               <td colspan="2">
                   <p align="center">
                       <input type="submit" value="  Submit" name="B4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                       <input type="reset" value="  Reset All   " name="B5"></td>
           </tr>
       </table>
   </form>
</body>
</html>

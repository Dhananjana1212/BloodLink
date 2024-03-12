
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Registration Form</title>
  <link rel="stylesheet" href="OrgRegister.css">
</head>
<body>

<div class="wrapper">
    <div class="title">
      Registration Form
    </div>

    
    <div class="form">
   
	<form action="regsuccess.php" method="POST">

    <div class="form">
       <div class="inputfield">
          <label>Name</label>
          <input type="text" class="input" name="Name" id="Name" required>
       </div>  
        <div class="inputfield">
          <label>Address</label>
          <input type="text" class="input" name="Address" id="Address" required>
       </div>  
       <div class="inputfield">
        <label>District</label>
        <input type="text" class="input" name="District" id="District" required>
       </div>  
       <div class="inputfield">
        <label>Postal Code</label>
        <input type="text" class="input" name="PostalCode" id="PostalCode" required>
       </div> 
        <div class="inputfield">
          <label>Email Address</label>
          <input type="email" class="input" name="Email" id="Email" required>
       </div> 
      <div class="inputfield">
          <label>contact Number</label>
          <input type="text" class="input" name="Contact" id="Contact" required>
       </div> 
       <div class="inputfield">
          <label>Password</label>
          <input type="password" class="input" name="Password" id="Password" required>
       </div>  
      <div class="inputfield">
          <label>Confirm Password</label>
          <input type="password" class="input" name="confirm_password" id="confirmpassword" required
				onkeyup="validate_password()">
       </div> 
       
      <div class="inputfield">
      <span id="wrong_pass_alert"></span>
        <input type="submit" value="Register" class="btn" onclick="wrong_pass_alert()">
      </div>
    </form>
    
    </div>
</div>	
<script>
		function validate_password() {

			var password = document.getElementById('Password').value;
			var confirmpassword = document.getElementById('confirmpassword').value;
			if (password != confirmpassword) {
				document.getElementById('wrong_pass_alert').style.color = 'red';
				document.getElementById('wrong_pass_alert').innerHTML
					= '☒ Use same password';
				document.getElementById('create').disabled = true;
				document.getElementById('create').style.opacity = (0.4);
			} else {
				document.getElementById('wrong_pass_alert').style.color = 'green';
				document.getElementById('wrong_pass_alert').innerHTML =
					'🗹 Password Matched';
				document.getElementById('create').disabled = false;
				document.getElementById('create').style.opacity = (1);
			}
		}

		function wrong_pass_alert() {
			if (document.getElementById('Password').value != "" &&
				document.getElementById('confirmpassword').value != "") {
			
			} else {
				alert("Please fill all the fields");
			}
		}
	</script>	
</body>
</html>

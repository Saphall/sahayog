<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Register</title>
</head>
<body>
	<h2>Registration</h2>
	<form action="register_action.php" method="POST">
		<p>
			<label for="">First Name</label>
			<input type="text" name='firstname'>
		</p>
		<p>
			<label for="">Middle Name</label>
			<input type="text" name='middlename'>
		</p>
		<p>
			<label for="">Last Name</label>
			<input type="text" name='lastname'>
		</p>
		<p>
			<label for="">DOB</label>
			<input type="date" name='dob'>
		</p>
		<p>
			<label for="">Gender</label>
			<input type="radio" name='gender' value="male">Male
			<input type="radio" name='gender' value="female">Female
			<input type="radio" name='gender' value="other">Other
		</p>

		<p>
			<label for="">Permanent Address</label>
			<input type="text" name='address1'>
		</p>
		<p>
			<label for="">Tempokrary Address</label>
			<input type="text" name='address2'>
		</p>
		<p>
			<label for="">Email</label>
			<input type="text" name='email'>
		</p>
		<p>
			<label for="">Mobile</label>
			<input type="text" name='mobile'>
		</p>
		<p>
			<label for="">Username</label>
			<input type="text" name='username'>
		</p>
		<p>
			<label for="">Password</label>
			<input type="password" name='password'>
		</p>
		<p>
			<label for="">Confirm Password</label>
			<input type="password" name='password2'>
		</p>

		<input type="submit" name="btn_register">

	</form>
	
</body>
</html>
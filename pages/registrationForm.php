
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post" action="registrationValidation.php">
		<input type="text" name="firstName" placeholder="firstname"><br>
		<input type="text" name="lastName" placeholder="lastName"><br>
		<input type="text" name="rollNo" placeholder="Roll No"><br>
		<input type="email" name="email" placeholder="Email"><br>
		<input type="text" name="DOJ"><br>
		<input type="password" name="password" placeholder="password"><br>
		<input type="text" name="contact" placeholder="Phone Number"><br>
		<input type="text" name="address" placeholder="Address"><br>
		<select name="semester">
				<option value="1">I</option>
				<option value="2">II</option>
				<option value="3">III</option>
				<option value="4">IV</option>
				<option value="5">V</option>
				<option value="6">VI</option>
				<option value="7">VII</option>
				<option value="8">VIII</option>
		</select>
		<select name="branch">
			<option>BRANCH</option>
			<option value="cse">CSE</option>
			<option value="ece">ECE</option>
			<option value="me">ME</option>
		</select><br>
		<input type="submit" name="submit" value="Submit">
	</form>
</body>
</html>

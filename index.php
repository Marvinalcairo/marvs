
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>MY WEB</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.3.1/css/all.min.css">
</head>
<body>

<div class="sign">

						<h1>SIGNUP</h1>
						<form method="POST" action="index1.php">
	<div class="signup">
						<input type="text" name="fname" placeholder="FIRST NAME">
						<br>
						<input type="text" name="Mname" placeholder="MIDDLE NAME">
						<br>
						<input type="text" name="Lname" placeholder="LAST NAME">
						<br>
						<input type="email" name="Email" placeholder="EMAIL">
						<br>
						<input type="password" name="pass" placeholder="PASSWORD">
						<br>
	</div>
		<div class="gender">
						<label for="male" >MALE</label>
						<input type="radio" name="gender" value ="Male" required>
						<label for="male">FEMALE</label>
						<input type="radio" name="gender" value="Female" required>
		</div>
						<br>
						<button type="Submit" name="sub">SIGNUP</button>
						</form>
</div>
</body>
</html>
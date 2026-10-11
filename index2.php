
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
<?php

if (isset($_POST['sub'])) {
		$name3 =$_POST['Email'];
		$name4 =$_POST['pass'];
$marvin = mysqli_connect('localhost','root','','login1');
$cmd ="SELECT * FROM sign1 WHERE email = '$name3'";
$marvs = mysqli_query($marvin,$cmd);

if (mysqli_num_rows($marvs)>0) {
		$umay =mysqli_fetch_assoc($marvs);
		$user3 = $umay['email'];
		$user4 = $umay['password'];

		if($name3 == $user3 && $name4 == $user4 ){
			header("Location: index1.php");
exit();
		}
}	else{
	echo"'<h1 class = 'no'>no user found</h1>'";
}


}


?>







<div class="sign" style="margin-top:20px ;">

						<h1>LOGIN</h1>
						<form method="POST" action="#">
	<div class="signup">
				
						<input type="email" name="Email" placeholder="EMAIL" required>
						<br>
						<input type="password" name="pass" placeholder="PASSWORD" required>
						<br>
	</div>
		
						<button type="Submit" name="sub" style="margin-top:30px;">LOG IN</button>
						</form>
</div>
</body>
</html>

<?php

if (isset($_POST['sub'])) {

$bar1 =$_POST['mar'];
$marvin = mysqli_connect('localhost','root','','login1');
$cmd = "DELETE FROM sign1 WHERE email = '$bar1'";

if (mysqli_query($marvin,$cmd)) {
	echo "'<h1>SUCCESSFULLY DELETE</h1>'";
	header("Location: index1.php");
exit();

}



	
}






?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>DELETE</title>
	<style>
		
			body{
				background-color: #e3d4cd;
			}
			.del{
				border: 2px solid black;
				text-align: center;
				width: 300px;
				padding: 30px;
				padding-top:100px;
				padding-bottom:100px;
				position: absolute;
				top: 50px;
				left: 500px;
				background-color: #4d4d4d;

			}
			.del input{
				padding: 15px;
				border-radius: 20px;
				border: 2px solid black;
				width: 200px;
			}
			.del button{
				padding: 10px;
				border-radius: 10px;
				border: 2px solid black;

			}

			h1{
				position: relative;
				text-align: center;
				top: 400px;
				border: 2px solid black;
				width: 100%;
				background-color: lightblue;
			}









	</style>
</head>
<body>
	<div class="del">
		<form method="POST" action="#">
			<input type="email" name="mar" placeholder="Email_address">
			<br><br>
			<button type="submit" name="sub">DELETE</button>


		</form>
			</div>


</body>
</html>
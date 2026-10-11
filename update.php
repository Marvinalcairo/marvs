<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>UPDATE</title>
	<style>
		
			body{
				background-color: #e3d4cd;
			}
			.del{
				border: 2px solid black;
				text-align: center;
				width: 400px;
				padding: 30px;
				padding-top:100px;
				padding-bottom:50px;
				position: absolute;
				top: 50px;
				left: 400px;
				background-color: #4d4d4d;

			}
			.update input{
				padding: 15px;
				border-radius: 20px;
				border: 2px solid black;
				width: 300px;
				margin-top: 30px;
			}
			.update label{
				color: white;
				font-size: 20px;
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
			.label{
				color: white;
				margin: 20px;
			}










	</style>
</head>
<body>
	<div class="del">
		<form method="POST" action="">
			<div class="update">
			<label for ="mar" >SELECT EMAIL YOU WANT TO UPDATE</label>
			<input type="email" name="mar" placeholder="Email_address">
			<br><br>
			<button>SELECT</button>
			<br>
			<input type="text" name="fname" placeholder="NEW FIRST NAME" required>
						<br>
						<input type="text" name="Mname" placeholder="NEW MIDDLE NAME" required>
						<br>
						<input type="text" name="Lname" placeholder="NEW LAST NAME" required>
						<br>
						<input type="password" name="pass" placeholder="NEW PASSWORD" required>
						<br>
					</div>
					<div class="label">
						<label for="male" >MALE</label>
						<input type="radio" name="gender" value ="Male" required>
						<label for="male">FEMALE</label>
						<input type="radio" name="gender" value="Female" required>
						<br>
					</div>
						<button type="Submit" name="sub1">UPDATE</button>	

		</form>
			</div>


</body>
</html>


<?php

 if(isset($_POST['sub1'])) {
	
$name =$_POST['fname'];
$name1 =$_POST['Mname'];
$name2 =$_POST['Lname'];
$name3 =$_POST['mar'];
$name4 =$_POST['pass'];
$name5 =$_POST['gender'];
$marvin = mysqli_connect('localhost','root','','login1');
$cmd = "UPDATE sign1 SET 
						First_name = '$name',
						Middle_name = '$name1', 
						Lastname = '$name2',
						password = '$name4', 
						sex = '$name5' 

			WHERE email = '$name3'";


if(mysqli_query($marvin,$cmd)) {

	header("Location: index1.php");
exit();

}



	
}






?>
		
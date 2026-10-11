<?php

if(isset($_POST['sub'])) {
	
$name =$_POST['fname'];
$name1 =$_POST['Mname'];
$name2 =$_POST['Lname'];
$name3 =$_POST['Email'];
$name4 =$_POST['pass'];
$name5 =$_POST['gender'];
$marvin = mysqli_connect('localhost','root','','login1');
$marvin1 = "INSERT INTO sign1 VALUES ('','$name','$name1','$name2','$name3','$name4','$name5')";

if(mysqli_query($marvin,$marvin1)) {
	echo "";
}



}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>DASHBOARD</title>
	<style>
		body{
			background-color: grey;
		}
		table{
			background-color: lightblue;

		}
		h1{
			font-size: 50px;
			background-color: lightblue;
			padding-bottom: 30px;
			padding-top: 30px;
			padding-left: 30px;
			font-family: arial;
			width: 100%;
			
		}
		a{
			text-decoration: none;
			color: black;
		}
		td{
			height: 70px;
			text-align: center;
		}
		th{
			height: 60px;
			text-align: center;
		}
		.btn{
			position: absolute;

			top: 60px;
			right: 30px;
			border-radius: 20px;
		}
		.btn button{
			font-size: 30px;
			margin:15px;
			border-radius: 15px;
		}

	</style>

</head>
<body>
	<div>
		<h1>DASHBOARD</h1>

		</table>
		<br>
	<div class="btn">
		<button><a href = "index.php">SIGNUP</a></button>
		<button><a href = "index4.php">DELETE</a></button>
		<button><a href = "update.php">UPDATE</a></button>
		<button><a href = "index2.php">LOGIN</a></button>
	</div>
	</div>
</body>
</html>

<?php 
$marvin = mysqli_connect('localhost','root','','login1');
$cmd = "SELECT * FROM sign1"; 
$result = mysqli_query($marvin, $cmd); 
?> 
<table border="1" style="border-collapse: collapse; width: 100%;position: absolute;top: 160px;"> 
	<tr>
		<th colspan="7">USER</th>
	</tr>
	<tr> 
	 <th>ID</th>
	 <th>First name</th> 
	 <th>Last name</th>
	 <th>Middle name</th>
	 <th>Email</th>
	 <th>Pass</th>
	 <th>gender</th>

	   </tr> 
	   <?php while 
	   ($row = mysqli_fetch_assoc($result)) {
	     echo "<tr>"; 
	     echo "<td>" . $row['Id'] . "</td>"; 
	     echo "<td>" . $row['First_name'] . "</td>"; 
	     echo "<td>" . $row['Lastname'] . "</td>"; 
	     echo "<td>" . $row['Middle_name'] . "</td>"; 
	     echo "<td>" . $row['email'] . "</td>"; 
	     echo "<td>" . $row['password'] . "</td>"; 
	     echo "<td>" . $row['sex'] . "</td>"; 
	     echo "</tr>"; } 
	?>
	 </table>
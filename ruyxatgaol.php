<?php
require 'database1.php';

$name=$_POST['name'];
$email=$_POST['Email'];
$cod=$_POST['password'];

$pdoStatement=$pdo->prepare("INSERT INTO `XARIDOR`
	(`NAME`, `EMAIL`, `COD`) VALUES (:NAME, :EMAIL, :COD)");

$pdoStatement->bindParam(':NAME', $name);
$pdoStatement->bindParam(':EMAIL', $email);
$pdoStatement->bindParam(':COD', $cod);
if($pdoStatement->execute())
{
	print "
	<!DOCTYPE html>
	<html>
	<head>
		<title>ruyxatgaol.php</title>
		<style>
			body {
				background-image: url(rasm3.jpg);
				background-size: cover;
				background-attachment: fixed;
				display: flex;
				align-items: center;
    		flex-direction: column;
			}
		
			.col{
				margin-top:200px;
				width: 50%;
				height: 100%;
				background-color: rgba(0, 0, 0, 0.5);
				box-shadow: 0 0 50px 10px white;
				padding: 20px;
				text-align: center;
				color: white;
				border-radius: 20px;
			}
			img{
				width: 7%;
			}
			a{
				color: white;
				text-decoration: none;
				background-color: black;
				border-radius: 20px;
			}
			.col1{
				margin-top: 30px;
				padding: 10px;
				background-color: black;
				border-radius: 30px;
			}
			h2{
				display: inline;
				box-shadow: 0 0 10px white;
				border: none;

			}
		</style>
	</head>
	<body>
				<div class='col'>
						<h2>Bizning Xaridorimiz bo`lganingiz uchun tashakkur <img src='sotuvchi.png'><br/>(xa xa xa axir men <img src='xakkir.png' size='7px'> ku endi tamomsan)</h2>
				</div>
				<div class='col1'>
						<h1><a href='xaridorlar.php'>Foydalanuvchilar ro`yxatiga o`tish</a></h1>
				</div>
		
	
	</body>
	</html>";

}

<?php 
	error_reporting(E_ERROR);
	session_start();

	if (isset($_POST["console_sub"])) {
		include "../data/sql_connect.php";
		include "data/sql_affiche.php";
	}

	else if (isset($_POST["console_sub_verif"])) {
		include "../data/sql_connect.php";
		include "data/sql_verif.php";
	}

?>
<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		body {
			background-color: aliceblue;
		}
		table{border-collapse: collapse; margin: auto;}
		tr , td {
			width: 200px;
			height: 30px;
		}

		input {
			width: 200px;
			height: 30px;
			outline: none;
			text-align: center;
			font-family: cursive;
			color: darkcyan;
			font-weight: 700;
			transition: 0.4s;
		}
		::placeholder {color: brown;}
		input:hover {
			background-color: whitesmoke;
		}
</style>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

	<header>
			<center>
					<i>Console <span style="color: red;">ADMIN</span></i>
					<h2>Profile : <?php
							if ($_SESSION["id"] == "@12345678") {
								echo "<b style='color: deeppink;'>". $_SESSION["username"] ."</b>";
							}

							else {
								session_start();
								session_unset();
								session_destroy();
								header("location: ../index.php");
							}
					 ?></h2>
			</center>
	</header>
	<hr>

	<aside>
		<form action="index.php" method="POST">
			<center><h4>Afficher INFORMATION OF ACCUNET</h4></center>
			<table border="1px">
					<tr style="font-family: cursive;">
						<td>id</td>
						<td>Username</td>
						<td>E-mail</td>
					</tr>
					<tr>
						<td><input type="text" name="id" placeholder="id" ></td>
						<td><input type="text" name="user" placeholder="username"  title="You cannot use the username because there are many users with the same name " style="background-color: pink;"></td>
						<td><input type="text" name="mail" placeholder="E-mail" ></td>
					</tr>
					<tr>

						<td>
							<br><br><br><br><br><br><br><br><br><br>
							<input type="submit" name="console_sub" value="­">
						</td>
					</tr>
			</table>
			<hr> <hr> <hr>

			

		</form>
		<form action="index.php" method="POST">
			<center><h4>Verified ACCUNET</h4></center>

			<table border="1px">
					<tr style="font-family: cursive;">
						<td>id</td>
						<td>Username</td>
						<td>E-mail</td>
					</tr>
					<tr>
						<td><input type="text" name="id" placeholder="id" ></td>
						<td><input type="text" name="user" placeholder="username [GROUP  ACCEPE ALL ACCUNET WITH SAME NAME]"  title="You cannot use the username because there are many users with the same name " style="background-color: pink; font-size: 10px; font-family: monospace;"></td>
						<td><input type="text" name="mail" placeholder="E-mail" ></td>
					</tr>
					<tr>

						<td>
							<br><br><br><br><br><br><br><br><br><br>
							<input type="submit" name="console_sub_verif" value="VERIFIED">
						</td>
					</tr>
			</table>
		</form>
	</aside>
</body>
</html>
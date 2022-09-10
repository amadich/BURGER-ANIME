<?php 
	error_reporting(E_ERROR);
	session_start();
	if (isset($_POST["sub_folderanime"])) {
		include "../data/sql_connect.php";
		include "data/sql_createfolderanime.php";
	}
?>
<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		table{
			border-collapse: collapse;
			margin: auto;
		}
		tr,td {
			padding: 2em;
		}
	</style>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Upload Anime (Admin)</title>
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


		<form action="uploadata.php" method="POST">
			<table border="1px">
				<tr>
					<td>Create New Folder name Anime in This web</td>
				</tr>
				<tr>
					<td><input type="text" name="animefolder" placeholder="Anime Folder Name" required></td>
					<td><input type="submit" name="sub_folderanime" value="Create Folder Anime"></td>
				</tr>
			</table>
		</form>


		<form action="sql_createanimefile.php" method="POST">
			<table border="1px">
				<tr>
					<td>Open  Folder name Anime in This web</td>
				</tr>
				<tr>
					<td><input type="text" name="openfolder" placeholder="Anime Folder Name in This web" required></td>
					<td><input type="submit" name="sub_openfolderanime" value="open folder Anime"></td>
				</tr>
			</table>
		</form>


		<form action="uploadata.php" method="POST">
			<center>
				<input type="submit" name="sub_affichefoldername" value="See All anime Folder">
			</center>
			<?php 
				if (isset($_POST["sub_affichefoldername"])) {
					include "../data/sql_connect.php";
					$req1 = "select * from animefolder";
					$res1 = mysql_query($req1);
					echo "<table border='1px'> <tr> <td> Name Anime </td> <td> Date Created </td> </tr>";
					while ($a=mysql_fetch_array($res1)) {
						echo "<tr> <td>".$a[0]." </td> <td>".$a[1]."</td> </tr>";
					}
					echo "</table>";

				}
			?>
		</form>

</body>
</html>
<?php 
	error_reporting(E_ERROR);
	session_start();
	if (isset($_POST["sub_affichefoldername"])) {
		include "../data/sql_connect.php";
	}

	if (isset($_POST['sub_shareanime'])) {
		include "../data/sql_connect.php";
		include "data/sql_share.php";
	}
?>
<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		#formAffiche {
			float: right;
		}

		#formMenu {
			display: table;
			margin: auto;
		}

		#formMenu input {
			margin: 1em;
			outline: none;
			width: 140px;
			height: 30px;
			font-family: cursive;
			padding-left: 10px;
			transition: 0.4s;
		}

		#formMenu input:hover {
			width: 300px;
		}

		table {
			position: absolute;
		}
	</style>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>My Anime (admine Page) Public Share anime</title>
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


	<form action="shareanime.php" method="POST" id="formAffiche">
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


	<form action="shareanime.php" method="POST" enctype="multipart/form-data" id="formMenu">
		
		<input type="text" name="foldername" placeholder="Anime Folder name [Click See all anime And Selecte]"> <br>
		<input type="text" name="animename" placeholder="Anime Name" maxlength="40"> <br>
		<input type="text" name="animeeps" placeholder="Anime Episode"> <br>
				<table border="1px">
					<td>Image Anime Public</td>
					<td>
						<input type="file" name="set_image" required>
					</td>
				</table>
		<br> <br> <br> <br> <br> <br>

		<table border="1px">
			<tr>
				<td>Image Anime Episode </td>
				<td>
					<input type="file" name="set_image1" required>
				</td>
			</tr>
		</table>
 <br> <br> <br> <br>
		<input type="submit" name="sub_shareanime" value="Share Anime Public">

	</form>

</body>
</html>
<?php 
	error_reporting(E_ERROR);
	session_start();
	if (isset($_POST["sub_folderanime"])) {
		include "../data/sql_connect.php";
		//include "data/sql_createfolderanime.php";
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Create Anime Description</title>
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

   <form action="animeabout.php" method="POST">
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

                    <form action="sql_createabout.php" method="post">
                     <table class="ftable" border="1px">
                           <tr>
                              <td>Create About Folder To </td>
                              <td><input type="text" name="openfolder" placeholder="Select Anime Folder"></td>
                              <td><input type="submit" name="sub_createabout" value="Create"></td>
                           </tr>
                        </table>
                    </form>

   </aside>

</body>
</html>
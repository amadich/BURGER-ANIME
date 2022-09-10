<?php 

	$id = $_POST['id'];
	$user = $_POST['user'];
	$mail = $_POST['mail'];

	if ($id != "") {
		$req = "select * from accunet where id = '$id'";
		$res = mysql_query($req);

		echo "<table border='1px'> <tr> <td> ID </td> <td> username </td> <td> E-mail </td> <td> Password </td> <td> Date Created accunet </td> <td> Veridied : 1 = Yes / 0 = No </td>";
		while ( $t= mysql_fetch_array($res) ) {
			echo "<tr> <td>".$t[0]."</td> <td>".$t[1]."</td> <td>".$t[2]."</td> <td>".$t[3]."</td> <td>".$t[4]."</td> <td>".$t[5]."</td> </tr>";
		}

		echo "</table>";
	}

	else if ($mail != "") {
		$req = "select * from accunet where email = '$mail'";
		$res = mysql_query($req);

		echo "<table border='1px'> <tr> <td> ID </td> <td> username </td> <td> E-mail </td> <td> Password </td> <td> Date Created accunet </td> <td> Veridied : 1 = Yes / 0 = No </td>";
		while ( $t= mysql_fetch_array($res) ) {
			echo "<tr> <td>".$t[0]."</td> <td>".$t[1]."</td> <td>".$t[2]."</td> <td>".$t[3]."</td> <td>".$t[4]."</td> <td>".$t[5]."</td> </tr>";
		}

		echo "</table>";
	}


	else if ($user != "") {
		$req = "select * from accunet where username = '$user'";
		$res = mysql_query($req);

		echo "<table border='1px'> <tr> <td> ID </td> <td> username </td> <td> E-mail </td> <td> Password </td> <td> Date Created accunet </td> <td> Veridied : 1 = Yes / 0 = No </td>";
		while ( $t= mysql_fetch_array($res) ) {
			echo "<tr> <td>".$t[0]."</td> <td>".$t[1]."</td> <td>".$t[2]."</td> <td>".$t[3]."</td> <td>".$t[4]."</td> <td>".$t[5]."</td> </tr>";
		}

		echo "</table>";
	}




?>
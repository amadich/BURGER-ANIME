<?php 

		
	$id = $_POST['id'];
	$user = $_POST['user'];
	$mail = $_POST['mail'];


	if ($id != "") {
		$req = "update accunet set verifed=1 where id = '$id'";
		$res = mysql_query($req);

		if (mysql_affected_rows() == 1) {
			echo "<h1> This accunet [id: ".$id."]   is Collected </h1>";
		}

		else {
			echo "<h1 style='color: red;'> Faild to verified TRY AGAIN a later time </h1>";
		}
	}

	else if ($user != "") {
		$req = "update accunet set verifed=1 where username = '$user'";
		$res = mysql_query($req);

		if (mysql_affected_rows() == 1) {
			echo "<h1> This accunet [id:.".$id."] Username : ".$user."  is Collected </h1>";
		}

		else {
			echo "<h1 style='color: red;'> Faild to verified TRY AGAIN a later time </h1>";
		}
	}

	else if ($mail != "") {
		$req = "update accunet set verifed=1 where email = '$mail'";
		$res = mysql_query($req);

		if (mysql_affected_rows() == 1) {
			echo "<h1 style='color: green;'>".$mail." Is verifed </h1>";
		}

		else {
			echo "<h1 style='color: red;'> Faild to verified TRY AGAIN a later time </h1>";
		}
	}


?>
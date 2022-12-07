<?php 

		
	$id = $_POST['id'];
	$user = $_POST['user'];
	$mail = $_POST['mail'];


	if ($id != "") {
		$req = "update accunet set verifed=0 where id = '$id'";
		$res = mysql_query($req);

		if (mysql_affected_rows() == 1) {
			echo "<h1> This accunet [id: ".$id."]   Has Been Banned </h1>";
		}

		else {
			echo "<h1 style='color: red;'> Faild to Banned TRY AGAIN a later time </h1>";
		}
	}

	else if ($user != "") {
		$req = "update accunet set verifed=0 where username = '$user'";
		$res = mysql_query($req);

		if (mysql_affected_rows() == 1) {
			echo "<h1> This accunet [id:.".$id."] Username : ".$user."  is Ban 🥲️ </h1>";
		}

		else {
			echo "<h1 style='color: red;'> Faild to ban TRY AGAIN a later time </h1>";
		}
	}

	else if ($mail != "") {
		$req = "update accunet set verifed=0 where email = '$mail'";
		$res = mysql_query($req);

		if (mysql_affected_rows() == 1) {
			echo "<h1 style='color: green;'>".$mail." Is ban 😰️ </h1>";
		}

		else {
			echo "<h1 style='color: red;'> Faild to ban TRY AGAIN a later time </h1>";
		}
	}


?>

<?php 
	//
	session_start();
	$mail = $_POST['mail'];
	$pwd = $_POST['pwd'];
	$ok = false;

	$req = "select * from accunet where email = '$mail' and password = '$pwd' ";
	$res = mysql_query($req);

	if (mysql_num_rows($res) != 0) {
		$ok = true;

		
	}

	else {
		$ok = false;
		echo "Problem";
	}
	
?>
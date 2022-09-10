<?php 
	session_start();
	$mail = $_POST['mail'];
	$pwd = $_POST['pwd'];

	$req = "select * from accunet where email = '$mail' and password = '$pwd' ";
	$res = mysql_query($req);

	

	if (mysql_num_rows($res) != 0) {

		$t = mysql_fetch_array($res);
		$_SESSION['id'] = $t[0];
		$_SESSION['username'] = $t[1];
		$_SESSION['email'] = $t[2];
		$_SESSION['password'] = $t[3];
		$_SESSION['date'] = $t[4];
		$_SESSION['verif'] = $t[5];

		// start Open Profile Table

		$openProfile = "select * from profile where id = '$t[0]'";
		$openProfileres = mysql_query($openProfile);

			$p = mysql_fetch_array($openProfileres);
			//$_SESSION['id'] = $p[0];
			$_SESSION['image'] = $p[1];
			

		// end
		
		echo "Welcome ".$t[1];

	}

	else {
		echo "Try Again!";
	}
	
?>
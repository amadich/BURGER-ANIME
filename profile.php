<?php 
	error_reporting(E_ERROR);
	session_start();

	if (isset($_POST['sub'])) {
		include "data/sql_connect.php";
		include "data/sql_profile.php";
	}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Profile</title>
</head>
<body>

	<form action="profile.php" method="POST" enctype="multipart/form-data">
		<input type="text" name="user" placeholder="username" value="<?php 
				 if ($_SESSION['verif'] != 0 ) {
                          	echo  $_SESSION['username'];
                  }
	?>">
		<input type="password" name="id" placeholder="id" value="<?php 
				 if ($_SESSION['verif'] != 0 ) {
                          	echo  $_SESSION['id'];
                  }
	?>">
		<input type="file" name="set_image" required>

		<br> <br>
		<center>
			<input type="submit" name="sub" value="Create accunet">
		</center>
	</form>

</body>
</html>
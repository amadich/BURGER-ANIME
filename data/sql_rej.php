<?php 
	session_start();
	// ID : @+...
	$idnum = rand(10000000,99999999);
	$id = "@".$idnum;
	//echo $id;
	//
	$user = $_POST['user'];
	$mail = $_POST['mail'];
	$pwd = $_POST['pwd'];

	$req = "select * from accunet where email = '$mail' ";
	$res = mysql_query($req);

	if (mysql_num_rows($res) != 0) {
		echo "This accunet already Used !";
	}

	else {

		$_SESSION['id'] = $id;
		$_SESSION['username'] = $user;
		$_SESSION['email'] = $mail;
		$_SESSION['password'] = $pwd;
		$_SESSION['image'] = "boy.png";

		$dirname = $id;
		$create = __DIR__."../../profiles/".$dirname;

		if (!is_dir($create)) {
			mkdir($create,0777,true);
			//echo "Folder created Succiful";

			sleep(5);

			$createprofile = fopen("profiles/".$dirname."/"."index.php", "w");
			$txt = <<<EOT
			
			<?php 
				error_reporting(E_ERROR);
				session_start();
				if (isset(\$_POST['sub'])) {
					include "../../data/sql_connect.php";
					include "../../data/sql_profile.php";
				}
			?>
			<!DOCTYPE html>
			<html>
				<head>
					<link rel="stylesheet" href="../../css/profiles.css">
					<link rel="stylesheet" href="../../css/main.css">
					<meta charset="utf-8">
					<meta name="viewport" content="width=device-width, initial-scale=1">
					<title></title>
				</head>
				<body>
					

					<form action="index.php" method="POST" enctype="multipart/form-data">
					<div class="myimage" style="background-image: url(../../atlas/Profile/<?php 
						include "../../data/sql_connect.php";
						\$req = "select * from profile where id = '$id'";
						\$res = mysql_query(\$req);
						\$p = mysql_fetch_array(\$res);
						echo \$p[1];
					?>);"> </div>
					<h1> Profile $user</h1>
					<?php 

						if ( \$_SESSION['id'] == '$id' ) {
							echo "<span style='font-family: monospace;'>ID : "."$id"."</span>";

							echo '
							
								<div class="input_Container">
									<input type="text" name="user" placeholder="username" value="$user" hidden> <br>
									<input type="password" name="id" placeholder="id" value="$id" hidden> <br>
									<input type="file" name="set_image" id="filecss" required> <br>

									<input type="submit" name="sub" value="Change Your Profile" id="sub_css">
									<a href="../../menu.php"> <input type="button" value="Back To Menu" id="sub_css1"> </a>
									<br>
								</div>
								
							';	


						}

						else {
							echo '<a href="../../menu.php"> <input type="button" value="Add Friend" id="sub_css"> </a>';

						}

					?>

					</form>
					
				</body>
			</html>
			
EOT;

			fwrite($createprofile, $txt);
			fclose($createprofile);


		}

		$req1 = "insert into accunet values ('$id','$user','$mail','$pwd',now(),1)";
		$res1 = mysql_query($req1);

		if (mysql_affected_rows() == 1) {
			echo "Welcome  ".$user;
		}

		else {
			echo "Faild To Regiter This member !";
		}

		$ui = "insert into profile values ('$id','boy.png')";
		$uires = mysql_query($ui);

	}

?>

<?php 
	error_reporting(E_ERROR);
	session_start();
	$dirname =  $_POST['openfolder'];

	if (isset($_POST["sub_createanimefile"])) {
		include "data/sql_sendfileanime.php";
	}

	if (isset($_POST["sub_ajouteps"])) {
		include "data/sql_ajouteps.php";
	}



?>

<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		input {
			width: 250px;
			height: 30px;
			outline: none;
			font-family: monospace;
			font-weight: 700;
			padding-left: 10px;
			border: 1px solid limegreen;
			margin: 1em;
			transition: 0.4s;
		}
		input:hover {width: 1000px;}

		.aboutBox {
				position: absolute;
				display: none;
				width: 300px;
				height: 150px;
				border: 1px solid transparent;
				background-color: rgba(34, 34, 34, 0.116);
				border-radius: 10px;
				z-index: +10;
			}
	</style>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Create New Anime File (Admin)</title>
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

	<form action="sql_createanimefile.php" method="POST">
			<input type="text" name="animefolder" value="<?php echo $dirname; ?>" placeholder="back and Select anime" required> <br>
			<input type="text" name="animefile" value="<?php echo $dirname; ?>" placeholder="Create anime File" required> <br>
			<a href="https://dash.fembed.com" target="_blank" onmousemove="aboutopenConan()"> You Dont Have URL anime ? </a>
							<div class="aboutBox"></div>
			<br>
			<input type="text" name="urlanime" placeholder="URL ANME" style="width: 1000px;" required> <br>
			<input type="text" name="epsanime" placeholder="Episodes" required> <br>
			<br> <br> <br> <br>
			<input type="submit" name="sub_createanimefile" value="Create Anime File ⚠" > <br>
			<input type="submit" name="sub_ajouteps" value="Ajoute Episodes"> <br>
	</form>


	<script>

function aboutopenConan() {
   x = document.getElementsByClassName("aboutBox")[0].style.display = "block";
   document.addEventListener('mousemove', function(e) {
      let body = document.querySelector('body');
      let circle = document.getElementsByClassName("aboutBox")[0];
      let left = e.offsetX+100;
      let top = e.offsetY;
      document.getElementsByClassName("aboutBox")[0].style.left = left + 'px';
      document.getElementsByClassName("aboutBox")[0].style.top = top + 'px';
    });


    document.getElementsByClassName("aboutBox")[0].innerHTML =  `
    <label class="labelDiscription">
          <b style="color: purple;">Accunet https://dash.fembed.com : </b>
          <br>
          <span class="DiscriptionAboutBox1">
             Email  : burgeranimebiz@gmail.com <br>
				 Password : burgeranime2022
          </span> <br>
    </label>
    `;

}


function aboutcloseConan() {
   y = document.getElementsByClassName("aboutBox")[0].style.display = "none";
}

	</script>

</body>
</html>
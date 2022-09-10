<?php 	
					session_start();
					session_unset();
					session_destroy();
					header("location: ../index.php");
				?>

				<!DOCTYPE html>
				<html>
				<head>
					<meta charset="utf-8">
					<meta name="viewport" content="width=device-width, initial-scale=1">
					<script type="text/javascript"></script>
					<title></title>
				</head>
				<body>
					<i>Wait loading...</i>
				</body>
				</html>
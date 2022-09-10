<?php 
	
	$animefolder = $_POST["animefolder"];
	$filename = $_POST['animefile'];
	$urlanime = $_POST["urlanime"];
	$eps = $_POST["epsanime"];

	// write new File

	$createfile = fopen("../anime/".$animefolder."/".$filename.".json", "w");

/*
	// Read file

	$ch =  fread($createfile,filesize("../anime/".$animefolder."/".$filename.".js"));



	for ($i=0; $i < strlen($ch) ; $i++) { 
		if ($ch[$i] != "]") {
			echo $ch[$i];
		}
	}

*/


	$txt = 
'[
   {
     "name": "'.$filename.'",
     "fullname": "'.$filename.'",
     "gender": "anime",
     "eps": "'.$eps.'",
     "url": "'.$urlanime.'"
   }
]';

	fwrite($createfile, $txt);

	fclose($createfile);




	echo "Your File Collected 😎";

	// Write Read JS

	$apicreate = fopen("../anime/".$animefolder."/"."script.js", "w");

	$readkey = fopen("keyanime.js", "r");
	// Read file

	$ch =  fread($readkey,filesize("keyanime.js"));
	$res = "";


	for ($i=0; $i < strlen($ch) ; $i++) { 
			$res = $res . $ch[$i];
	}

	//echo $res;
	$myapi = "'".$filename.".json';";
	$line = "const api = ".$myapi.$res;

	

	fwrite($apicreate, $line);

	fclose($readkey);
	fclose($apicreate);



	echo "<br>Your Api Created 🧡";


	// Write Read PHP


	$indexcreate = fopen("../anime/".$animefolder."/"."index.php", "w");

	$readkey = fopen("keyanime.php", "r");
	// Read file

	$ch =  fread($readkey,filesize("keyanime.php"));
	$res = "";


	for ($i=0; $i < strlen($ch) ; $i++) { 
			$res = $res . $ch[$i];
	}

	$line = $res;

	

	fwrite($indexcreate, $line);

	fclose($readkey);
	fclose($indexcreate);

	echo "<br>Your PHP Created 💜";

?>
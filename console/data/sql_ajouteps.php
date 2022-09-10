<?php 

	$animefolder = $_POST["animefolder"];
	$filename = $_POST['animefile'];
	$urlanime = $_POST["urlanime"];
	$eps = $_POST["epsanime"];

	$createfile = fopen("../anime/".$animefolder."/".$filename.".json", "r");

	// Read file

	$ch =  fread($createfile,filesize("../anime/".$animefolder."/".$filename.".json"));
	$res = "";


	for ($i=0; $i < strlen($ch) ; $i++) { 
		if ($ch[$i] != "]") {
			$res = $res . $ch[$i];
		}
	}

	echo $res;

	$txt = 
',
{
     "name": "'.$filename.'",
     "fullname": "'.$filename.'",
     "gender": "anime",
     "eps": "'.$eps.'",
     "url": "'.$urlanime.'"
}';

$line = $res . $txt . "]";
echo "<br>".$line;
fclose($createfile);
$createfile = fopen("../anime/".$animefolder."/".$filename.".json", "w");
fwrite($createfile, $line);
fclose($createfile);

?>
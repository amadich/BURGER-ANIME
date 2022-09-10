<?php 

$dirname = $_POST["animefolder"];

$create = __DIR__."../../../anime/".$dirname;

if (!is_dir($create)) {
	mkdir($create,0777,true);
	echo "Folder created Succiful";
}

else {
	echo "Faild to create Your folder try again";
}

$req = "insert into animefolder values ('$dirname', now())";
$res = mysql_query($req);

if (mysql_affected_rows() == 1) {
	echo "<br> Folder name Save in DataBase !";
}

else {
	echo "<br> Faild to save in DataBase !";
}

?>
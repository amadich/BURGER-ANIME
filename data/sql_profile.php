<?php 
	session_start();
	$user =$_POST['user'];
	$id =$_POST['id'];

	 $img_name = $_FILES['set_image']["name"];
		 $img_size = $_FILES['set_image']["size"];
		 $tmp_name = $_FILES['set_image']["tmp_name"];

		 $image_error = $_FILES['set_image']["error"];

		 if ($image_error === 0) {
		 	$img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
		 	$img_ex_lc = strtolower($img_ex);
		 	$new_img_name = uniqid("IMG-",true).'.'.$img_ex_lc;
		 	$img_upload_path = '../../atlas/Profile/'.$new_img_name;
		 	move_uploaded_file($tmp_name, $img_upload_path);

		 	//  insert all information

		 	

		 	$req = "select * from profile where id = '$id'";
		 	$res = mysql_query($req);

		 	if (mysql_num_rows($res) != 0) {
		 		$change = "update profile set image = '$new_img_name' where id ='$id'";
		 		$changeres = mysql_query($change);
		 		$_SESSION['image'] = $new_img_name;
		 	}

		 	else {

		 		$add = "insert into profile values ('$id','$new_img_name')";
		 		$addres = mysql_query($add);
		 		$_SESSION['image'] = $new_img_name;

		 	}

		 }


		 else {
		 	echo "Faild Send Image !";
		 }

		
?>
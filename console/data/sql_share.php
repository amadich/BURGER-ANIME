<?php 
		$foldername = $_POST["foldername"];
		$animename = $_POST['animename'];
		$animeeps = $_POST['animeeps'];
		
		$today = date("H:i:s");

		$img_name = $_FILES['set_image']["name"];
		 $img_size = $_FILES['set_image']["size"];
		 $tmp_name = $_FILES['set_image']["tmp_name"];

		 $image_error = $_FILES['set_image']["error"];

		 if ($image_error === 0) {
		 	$img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
		 	$img_ex_lc = strtolower($img_ex);
		 	$new_img_name = uniqid("IMG-",true).'.'.$img_ex_lc;
		 	$img_upload_path = '../atlas/uploads/'.$new_img_name;
		 	move_uploaded_file($tmp_name, $img_upload_path);



			//

			$img_name1 = $_FILES['set_image1']["name"];
		 $img_size1 = $_FILES['set_image1']["size"];
		 $tmp_name1 = $_FILES['set_image1']["tmp_name"];

		 $image_error1 = $_FILES['set_image1']["error"];

		 if ($image_error1 === 0) {
		 	$img_ex1 = pathinfo($img_name1, PATHINFO_EXTENSION);
		 	$img_ex_lc1 = strtolower($img_ex1);
		 	$new_img_name1 = uniqid("IMG-",true).'.'.$img_ex_lc1;
		 	$img_upload_path1 =  '../atlas/uploads/eps/'.$new_img_name1;
		 	move_uploaded_file($tmp_name1, $img_upload_path1);
		 }

		 	//  insert all information

		
		 		$add = "insert into share values ('$animename','$animeeps','$new_img_name','$new_img_name1',now(),'$foldername','$today')";
		 		$addres = mysql_query($add);
		 		
		 		if (mysql_affected_rows() == 1) {
		 			echo "Data Share Insert in DataBase";
		 		}

		 		else {
		 			echo "Faild To save in DataBase";
		 		}
		 	

		 }


		 else {
		 	echo "Faild Send Image !";
		 }

?>
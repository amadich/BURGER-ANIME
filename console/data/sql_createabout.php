<?php 

    $dirname =  $_POST['openfolder'];
    $animename = $_POST["animename"];
    $eps = $_POST["eps"];
    $starschoix = $_POST["starschoix"];
    $animedisc = $_POST["animedisc"];
    //

    	 $img_name = $_FILES['set_image']["name"];
		 $img_size = $_FILES['set_image']["size"];
		 $tmp_name = $_FILES['set_image']["tmp_name"];

		 $image_error = $_FILES['set_image']["error"];

		 if ($image_error === 0) {
		 	$img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
		 	$img_ex_lc = strtolower($img_ex);
		 	$new_img_name = uniqid("IMG-",true).'.'.$img_ex_lc;
		 	$img_upload_path = '../anime/'.$dirname.'/about/'.$new_img_name;
		 	move_uploaded_file($tmp_name, $img_upload_path);
		 }
    //


		 // BANNER BANNER BANNER BANNER BANNER BANNER BANNER
		 // BANNER BANNER BANNER BANNER BANNER BANNER BANNER
		 // BANNER BANNER BANNER BANNER BANNER BANNER BANNER


		 $img_name1 = $_FILES['set_image1']["name"];
		 $img_size1 = $_FILES['set_image1']["size"];
		 $tmp_name1 = $_FILES['set_image1']["tmp_name"];

		 $image_error1 = $_FILES['set_image1']["error"];

		 if ($image_error1 === 0) {
		 	$img_ex1 = pathinfo($img_name1, PATHINFO_EXTENSION);
		 	$img_ex_lc1 = strtolower($img_ex1);
		 	$new_img_name1 = uniqid("IMG-",true).'.'.$img_ex_lc1;
		 	$img_upload_path1 = '../anime/'.$dirname.'/about/'.$new_img_name1;
		 	move_uploaded_file($tmp_name1, $img_upload_path1);
		 }


		 $img_name2 = $_FILES['set_image2']["name"];
		 $img_size2 = $_FILES['set_image2']["size"];
		 $tmp_name2 = $_FILES['set_image2']["tmp_name"];

		 $image_error2 = $_FILES['set_image2']["error"];

		 if ($image_error2 === 0) {
		 	$img_ex2 = pathinfo($img_name2, PATHINFO_EXTENSION);
		 	$img_ex_lc2 = strtolower($img_ex2);
		 	$new_img_name2 = uniqid("IMG-",true).'.'.$img_ex_lc2;
		 	$img_upload_path2 = '../anime/'.$dirname.'/about/'.$new_img_name2;
		 	move_uploaded_file($tmp_name2, $img_upload_path2);
		 }

		 $img_name3 = $_FILES['set_image3']["name"];
		 $img_size3 = $_FILES['set_image3']["size"];
		 $tmp_name3 = $_FILES['set_image3']["tmp_name"];

		 $image_error3 = $_FILES['set_image3']["error"];

		 if ($image_error3 === 0) {
		 	$img_ex3 = pathinfo($img_name3, PATHINFO_EXTENSION);
		 	$img_ex_lc3 = strtolower($img_ex3);
		 	$new_img_name3 = uniqid("IMG-",true).'.'.$img_ex_lc3;
		 	$img_upload_path3 = '../anime/'.$dirname.'/about/'.$new_img_name3;
		 	move_uploaded_file($tmp_name3, $img_upload_path3);
		 }



		 // BANNER BANNER BANNER BANNER BANNER BANNER BANNER
		 // BANNER BANNER BANNER BANNER BANNER BANNER BANNER
		 // BANNER BANNER BANNER BANNER BANNER BANNER BANNER



    echo $animedisc;
    echo "<br>".$starschoix;
    $createabout = fopen("../anime/".$dirname."/about/"."index.php", "w");
    $txt = <<<EOT
				    	<?php 
				   error_reporting(E_ERROR);
				   session_start();

				   if (isset(\$_POST['btn_sublabeweb'])) {
				      include "../../../data/sql_connect.php";
				   }

				   if (isset(\$_POST['btn_login'])) {
				      session_start();
				      include "../../../data/sql_connect.php";
				   }

				   if(\$_SESSION["id"] != "") {
				               include "../../../data/sql_connect.php";
				               \$id = \$_SESSION["id"];
				               //\$verif = \$_SESSION['verif'];
				               \$req = "select * from accunet where id = '\$id'";
				               \$res = mysql_query(\$req);
				               \$c = mysql_fetch_array(\$res);
				               \$_SESSION['verif'] = \$c[5];
				   }


				          

				?>
				<!DOCTYPE html>
				<html>
				<head>

					    <link rel="stylesheet" href="../../../css/main.css">
				   	 <link rel="stylesheet" href="../../../css/mainMenu.css">
				       <link rel="stylesheet" href="../../../css/fix/mainMenu.css">
				       <link rel="stylesheet" href="../../../css/fix/mainBody.css">
				       <link rel="stylesheet" href="../../../css/selectanime.css">
				       <link rel="stylesheet" href="../../../css/fix/search.css">
				       <link rel="stylesheet" href="../../../css/about_selecteps.css">

				   	 <link rel="icon"  href="../../../favicon.png">
					<meta charset="utf-8">
					<meta name="viewport" content="width=device-width, initial-scale=1">
				    <script src="../../../lib/option2.js"></script>
				    <!-- Script Logout accunet attention ⚠ -->
				   
					<title>BURGER ANIME</title>
				</head>
				<body>








				          <!-- Blocked Web -->
				   <div id="blockedPage" style="filter: opacity(0.8);">
				      <div class="registerWeb">
				         <div id="exitmeLableweb" onclick="li_ContactUsClose()"></div>
				         <div class="weblableLogs">
				            <h2 class="styleTitleWebLable">Create Accunet</h2>
				            <form action="index.php" method="post" id="fromLogs">
				               <input type="text" name="user" placeholder="Username" class="input_formLableWeb" style=" background : url('../../../atlas/icon/user.png') no-repeat scroll 10em; background-size: 10%; background-color: #fff;"> <br>
				               <input type="text" name="mail" placeholder="E-mail" class="input_formLableWeb" style=" background : url('../../../atlas/icon/email.png') no-repeat scroll 10em; background-size: 10%; background-color: #fff;"> <br>
				               <input type="password" name="pwd" placeholder="Password" class="input_formLableWeb " style=" background : url('../../../atlas/icon/lock.png') no-repeat scroll 10em; background-size: 10%; background-color: #fff;"> <br>
				               <input type="submit" name="btn_sublabeweb" class="btn_a" style="background: none; border: 1px solid #ffffff;"> <br>
				               <br>
				              
				                  <p style="text-decoration: underline 0.1px #fff; color: #ffffff; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif ;    cursor: pointer; " onclick="changeToLogin();"> Do you already have an account?</p>
				              
				            </form>
				         </div>
				      </div>
				   </div>




					<!-- Header -->
				   <header>
				      <div id="headbar">
				         <ul id="ul1">
				            


				            <!-- Log in Sociel !! -->
				               <div id="loginUser">

				                  <li class="userNamemail">
				                      <!-- Default php Welcome Wards   onclick="li_ContactUs()"  onclick="logoutme();" -->
				                    
				                    <!-- Start Selected -->
				                     <select id="choix"  <?php 
				                            if (\$_SESSION['verif'] != 0 ) {
				                           echo  'onclick="logoutme();"';
				                          }

				                          else if (\$_SESSION['verif'] == 0 && \$_SESSION['username'] != "") {
				                           echo 'onclick="logoutme();"';
				                          }

				                          else {
				                           echo 'onclick="li_ContactUs()"';
				                          }
				                       ?> >
				                     	<option hidden >
				                     		<span> <!-- Create a php  <?php ?> for change name Selected -->
				                        <?php 
				                          if (\$_SESSION['verif'] != 0 ) {
				                          	echo  \$_SESSION['username'];
				                          }

				                          else if (\$_SESSION['verif'] == 0 && \$_SESSION['username'] != "") {
				                          	echo "Wait for your account to be activated";
				                          }

				                          else {
				                           echo "Create new accunet";
				                          }
				                        ?>
				                     </span> 
				                     	</option>


				                     	  <!-- Add Button <option> "Logout" when user connected ... -->


				                         <?php 
				                         
				                            if (\$_SESSION['verif'] != 0 ) {
				                           echo  '<option>Log Out</option>';
				                          }

				                          else if (\$_SESSION['verif'] == 0 && \$_SESSION['username'] != "") {
				                           echo '<option>Log Out</option>';
				                          }

				                          else {
				                           echo '';
				                          }


				                           // Console
				                            if (\$_SESSION["id"] == "@12345678") {
				                             echo '<option>Console Admin</option>';
				                             echo '<option>Uploads Anime</option>';
				                             echo '<option>Create About Page Anime</option>';
				                             echo '<option>Publics Anime</option>';
				                          }
				                         //
				                         
				                       ?>


				                        <!-- End Selected -->
				                     </select>
				                     <!-- You can Remove This Demo when User Verified About admin [DataBase] -->
				                     <i class="demoAboutNewUser">
				                        <span> <!-- Change Demo =TO> Premier -->
				                           <?php 
				                          
				    
				                                    if (\$_SESSION['verif'] == 1) {
				                                       echo "<span style='text-decoration: 5px underline;'> ♦ Premier ♦</span>";
				                                    }
				                                    else if (\$_SESSION['verif'] == 0 && \$_SESSION['username'] != "")  {
				                                       echo "Demo";
				                                    }

				                                    else {
				                                       echo " <i> ♥ </i>";
				                                    }
				                              
				                           
				                           
				                           //
				                       
				                           ?>
				                        </span>
				                     </i> 
				                     <!-- 
				                        Premier = NO ADS + Useing linked speed (Feoters)
				                        linked speed = (Search Mod input) + Fueture video()
				                        Demo != Premier
				                     -->
				                  </li>
				                  <li class="boxUserPhoto" style="background-image: url('../../../atlas/Profile/<?php 

				                         if (\$_SESSION['verif'] != 0 && \$_SESSION['image'] != "") {
				                           echo  \$_SESSION['image'];
				                          }

				                          else echo "boy.png";

				                   ?>')"></li> 
				                  
				               </div>

				               <!-- Center RoseWood -->

				            <div id="centerelem">
				               <!-- 
				               <a href="../../../index.php"><li class="menuLi" >Home</li></a>
				               <li class="menuLi" style="text-decoration: #222 3px underline;">Menu</li>
				               <li class="menuLi">News</li>
				               <li class="menuLi">Animes</li>
				                -->

				               <!-- <li class="menuLi1" onclick="li_ContactUs()"> Contact US </li> -->
				               <!-- element Search -->
				               <li>
				                   <!-- you can unlock search mod with Verified Admin (Fuature Premiers) -->
				                   <!-- readonly input Javascript on update in the fueatert using VueJs -->
				                  <input type="text" placeholder="Search" class="searchelm" <?php 
				            
				                     
				                                    if (\$_SESSION['verif'] == 0) {
				                                       echo 'readonly ';
				                                       echo "title='only Premier Using This Feuters 🎭'";
				                                    }
				                              
				                           
				                    
				               
				               ?>>

				               <div class="content">
				                  <ul id="ul2"></ul>
				               </div>

				               </li>
				               <!-- <li class="headlogo"></li> -->
				            </div>
				         </ul>
				      </div>
				   </header>
				   <!-- menu bar -->
				   <div class="menubar">
				      <ul>
				         <a href="../../../index.php"><li>HOME</li></a>
				         <a href=""><li>NEWS</li></a>
				         <a href=""><li>BLOGS</li></a>
				         <a href="<?php 
				            if(\$_SESSION["id"] != "") {
				               include "../../../data/sql_connect.php";
				               \$id = \$_SESSION["id"];
				               \$req = "select id from accunet where id = '\$id'";
				               \$res = mysql_query(\$req);
				               \$a = mysql_fetch_array(\$res);
				               echo "../../../profiles/".\$a[0]."/";
				            }

				          ?>"><li>PROFILE</li></a>
				         <a href=""><li>DISCORD</li></a>
				         <a href=""><li>ANIMES</li></a>
				         <a href=""><li>CONTACT US</li></a>
				         <a href=""><li>SHOP</li></a>
				      </ul>
				   </div>
				   <!-- aside -->
				   <aside>


				                                       <!-- Slider => Figure Banner -->

				      <div class="slider">

				         <div class="textaboutmenuhead" style="margin-left: 20%;">

				         	<div id="boximg" style="
							    position: absolute;
							    border: 1px solid;
							    width: 300px;
							    height: 400px;
							    float: right;
							    clear: right;
							    /* margin: 5em; */
							    /* transform: translateX(800px); */
							    margin-left: 100%;
							    background-image: url(<?php echo '$new_img_name'; ?>);
							    background-size: 100% 100%;
							"> 
							</div>

				                  <span id="watchetext"><?php echo '$animename'; ?></span> <br>
				                  <span class="detayheadtitle" style="font-size:30px;"><?php echo 'Note ⭐ '.'$starschoix'; ?></span> <br>
				                  <span class="detaiyallmenuheadtitle">
				                  <?php 
				                  	echo "$animedisc";
				                  ?>
				                   </span> <br>

				                  <!-- buttonAboutHeadMenuTitle -->
				                 <a href="../"> <button class="btn_a" id="brn_a_edit">WATCH NOW</button> </a>

				         </div>
				         <div id="aboutslidermenu">
				           
				         <figure>
				            <div class="slide">
				               <img src="<?php echo '$new_img_name1'; ?>" alt="">
				            </div>
				            <div class="slide">
				               <img src="<?php echo '$new_img_name2'; ?>" alt="">
				            </div>
				            <div class="slide">
				               <img src="<?php echo '$new_img_name3'; ?>" alt="">
				            </div>
				         </figure>
				         </div>
				      </div>

				      <div class="assetsmenu"></div>

				      <!-- Les Animes -->

				            <!--  -->                        
				      
				      <div class="selectanime" id="selectanime">


				            <div id="titlesetBlock1">
				              		
									<?php 
										include "../data/sql_connect.php";
										\$req = "select * from share where foldername = '$dirname' ORDER BY animeeps DESC";
										\$res = mysql_query(\$req);
										
										while(\$sh = mysql_fetch_array(\$res) ) {
											echo "<a href='../'><div class='selecteps'> <div class='selecthereanime' style='background-size:cover;background-image: url(../../../atlas/uploads/eps/".\$sh[3].")'></div> <p class='setepshere'> Episode ".\$sh[1]."</p> </div> </a>";
										}

										
											
													
										
									?>


					   		 </div>
				    

				      </div>
					

				     
				 

				   </aside>

				   <script src="../../../lib/search1.js"></script>

				</body>
				</html>
EOT;
	fwrite($createabout, $txt);
    fclose($createabout);

?>
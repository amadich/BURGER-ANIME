<?php 
   error_reporting(E_ERROR);
   session_start();

   if (isset($_POST['btn_sublabeweb'])) {
      include "data/sql_connect.php";
   }

   if (isset($_POST['btn_login'])) {
      session_start();
      include "data/sql_connect.php";
   }

   if($_SESSION["id"] != "") {
               include "data/sql_connect.php";
               $id = $_SESSION["id"];
               //$verif = $_SESSION['verif'];
               $req = "select * from accunet where id = '$id'";
               $res = mysql_query($req);
               $c = mysql_fetch_array($res);
               $_SESSION['verif'] = $c[5];
   }

   if ($_SESSION["id"] == "@12345678") {
      $createapi = fopen("search.json", "w");
   
      $giveme = "select * from share";
      $resgiveme = mysql_query($giveme);

      while ($q = mysql_fetch_array($resgiveme)) {
         $txt .= 
         '{
            "name": "'.$q[0].'",
            "img": "'.$q[2].'",
            "folder": "'.$q[5].'"
         },';
      }
      $ligne = 
'[
      '.substr($txt, 0, $txt.length-1).'
]';
      fwrite($createapi,$ligne);
      fclose($createapi);
   }


   if (isset($_POST["sub_contactdisc"])) {
      # code...
      include "data/sql_connect.php";
      include "data/sql_contact.php";
   }

          

?>

<!DOCTYPE html>
<html>
<head>

	    <link rel="stylesheet" href="css/main.css">
   	 <link rel="stylesheet" href="css/mainMenu.css">
       <link rel="stylesheet" href="css/fix/mainMenu.css">
       <link rel="stylesheet" href="css/fix/mainBody.css">
       <link rel="stylesheet" href="css/selectanime.css">
       <link rel="stylesheet" href="css/fix/search.css">
   <link rel="stylesheet" href="css/contact_disc.css">
   	 <link rel="icon"  href="favicon.png">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
        
    <meta id="tpKeywords" name="keywords" content="موقع أنمي , تعارف وتشات , موقع أمن , مواقع عربية, جديدة">
    <meta name="description" content="Burgeranime.c1.biz  | عالم ممتع و خاص بالأنمي - شبكة تواصل اجتماعية ">
    <meta property="og:site_name" content="Burgeranime.c1.biz">
    <meta property="og:image" content="favicon.png">
    <script src="lib/options.js"></script>
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
               <input type="text" name="user" placeholder="Username" class="input_formLableWeb" style=" background : url('atlas/icon/user.png') no-repeat scroll 10em; background-size: 10%; background-color: #fff;"> <br>
               <input type="text" name="mail" placeholder="E-mail" class="input_formLableWeb" style=" background : url('atlas/icon/email.png') no-repeat scroll 10em; background-size: 10%; background-color: #fff;"> <br>
               <input type="password" name="pwd" placeholder="Password" class="input_formLableWeb " style=" background : url('atlas/icon/lock.png') no-repeat scroll 10em; background-size: 10%; background-color: #fff;"> <br>
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
                            if ($_SESSION['verif'] != 0 ) {
                           echo  'onclick="logoutme();"';
                          }

                          else if ($_SESSION['verif'] == 0 && $_SESSION['username'] != "") {
                           echo 'onclick="logoutme();"';
                          }

                          else {
                           echo 'onclick="li_ContactUs()"';
                          }
                       ?> >
                     	<option hidden >
                     		<span> <!-- Create a php  <?php ?> for change name Selected -->
                        <?php 
                          if ($_SESSION['verif'] != 0 ) {
                          	echo  $_SESSION['username'];
                          }

                          else if ($_SESSION['verif'] == 0 && $_SESSION['username'] != "") {
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
                         
                            if ($_SESSION['verif'] != 0 ) {
                           echo  '<option>Log Out</option>';
                          }

                          else if ($_SESSION['verif'] == 0 && $_SESSION['username'] != "") {
                           echo '<option>Log Out</option>';
                          }

                          else {
                           echo '';
                          }


                           // Console
                            if ($_SESSION["id"] == "@12345678") {
                             echo '<option>Console Admin</option>';
                             echo '<option>Uploads Anime</option>';
                             echo '<option>Create Anime Description</option>';
                             echo '<option>Publics Anime</option>';
                             echo '<option>Mail Box</option>';
                          }
                         //
                         
                       ?>


                        <!-- End Selected -->
                     </select>
                     <!-- You can Remove This Demo when User Verified About admin [DataBase] -->
                     <i class="demoAboutNewUser">
                        <span> <!-- Change Demo =TO> Premier -->
                           <?php 
                          
    
                                    if ($_SESSION['verif'] == 1) {
                                       echo "<span style='text-decoration: 5px underline;'> ♦ Premier ♦</span>";
                                    }
                                    else if ($_SESSION['verif'] == 0 && $_SESSION['username'] != "")  {
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
                  <li class="boxUserPhoto" style="background-image: url('atlas/Profile/<?php 

                         if ($_SESSION['verif'] != 0 && $_SESSION['image'] != "") {
                           echo  $_SESSION['image'];
                          }

                          else echo "boy.png";

                   ?>')"></li> 
                  
               </div>

               <!-- Center RoseWood -->

            <div id="centerelem">
               <!-- 
               <a href="index.php"><li class="menuLi" >Home</li></a>
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
            
                     
                                    if ($_SESSION['verif'] == 0) {
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
         <a href="index.php"><li>HOME</li></a>
         <a href=""><li>NEWS</li></a>
         <a href=""><li>BLOGS</li></a>
         <a href="<?php 
            if($_SESSION["id"] != "") {
               include "data/sql_connect.php";
               $id = $_SESSION["id"];
               $req = "select id from accunet where id = '$id'";
               $res = mysql_query($req);
               $a = mysql_fetch_array($res);
               echo "profiles/".$a[0]."/";
            }

          ?>"><li>PROFILE</li></a>
         <a href=""><li>DISCORD</li></a>
         <a href=""><li>ANIMES</li></a>
         <a href=""><li>CONTACT US</li></a>
         <a href="ch/shop/"><li>SHOP</li></a>
      </ul>
   </div>
   <!-- aside -->

            <form action="contact.php" method="post" enctype="multipart/form-data">

                  <table border="1px">
                     <tr aria-colspan="2">
                        <td>Who are you ?</td>
                        <td><input type="email" name="mail" id="email"  value='<?php
                            echo $_SESSION['email']; 
                         ?>' size="30" placeholder="E-mail" required></td>
                     </tr>
                     <tr>
                        <td>Title</td>
                        <td><input type="text" name="titlediscontact" placeholder="Title of Sujet" required></td>
                     </tr>

                     <tr>
                        <td style="
                            background: url('atlas/images/burger-anime.gif');
                            background-position: center center;
                            background-size: cover;
                            background-repeat: no-repeat;
                            color: honeydew;
                            font-weight: 700;
                            font-family: monospace;
                            ">
                           Discription
                        </td>
                        <td><textarea name="discontact" id="discontact" cols="30" rows="10"></textarea></td>
                     </tr>

                     <tr>
                        <td>Free Image About Sujet</td>
                        <td><input type="file" name="set_image"></td>
                     </tr>

                     <tr>
                        <td>Send Your Sujet</td>
                        <td><input type="submit" name="sub_contactdisc" id="sub_contactdisc"><input type="reset"></td>
                     </tr>

                  </table>

            </form>
   
   <!-- Fin Aside -->
   <script src="lib/search.js"></script>
   </body>
</html>
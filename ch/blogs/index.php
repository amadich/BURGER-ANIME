<?php 
   error_reporting(E_ERROR);
   session_start();

   if (isset($_POST['btn_sublabeweb'])) {
      include "../../data/sql_connect.php";
   }

   if (isset($_POST['btn_login'])) {
      session_start();
      include "../../data/sql_connect.php";
   }

   if($_SESSION["id"] != "") {
               include "../../data/sql_connect.php";
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

   // Blogs send Commenter 

   if (isset($_POST["send_com"])) {
      # code...
      $com = $_POST["com"];
      $id = $_SESSION['id'];
      $user = $_SESSION['username'];
      $img = $_SESSION['image'];

      $today = date("H:i:s");

      $req = "insert into blogs_cmd values ('$id','$user','$com','$img',now(),'$today')";
      $res = mysql_query($req);

      

   }

          

?>
<!DOCTYPE html>
<html>
<head>

	    <link rel="stylesheet" href="../../css/main.css">
   	    <link rel="stylesheet" href="../../css/mainMenu.css">
        <link rel="stylesheet" href="../../css/fix/mainMenu.css">
        <link rel="stylesheet" href="../../css/fix/mainBody.css">
        <link rel="stylesheet" href="../../css/selectanime.css">
        <link rel="stylesheet" href="../../css/fix/search.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/side_body.css">
        <link rel="stylesheet" href="css/side_bar.css">

   	 <link rel="icon"  href="../../favicon.png">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
        
    <meta id="tpKeywords" name="keywords" content="موقع أنمي , تعارف وتشات , موقع أمن , مواقع عربية, جديدة">
    <meta name="description" content="Burgeranime.c1.biz  | عالم ممتع و خاص بالأنمي - شبكة تواصل اجتماعية ">
    <meta property="og:site_name" content="Burgeranime.c1.biz">
    <meta property="og:image" content="../../favicon.png">
    <script src="../../lib/options.js"></script>
    <script src="option.js"></script>
    <script>
            function selectwith() {document.getElementsByTagName("select")[0].selectedIndex = 0}
    </script>
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
            <form action="../../index.php" method="post" id="fromLogs">
               <input type="text" name="user" placeholder="Username" class="input_formLableWeb" style=" background : url('../../atlas/icon/user.png') no-repeat scroll 10em; background-size: 10%; background-color: #fff;"> <br>
               <input type="text" name="mail" placeholder="E-mail" class="input_formLableWeb" style=" background : url('../../atlas/icon/email.png') no-repeat scroll 10em; background-size: 10%; background-color: #fff;"> <br>
               <input type="password" name="pwd" placeholder="Password" class="input_formLableWeb " style=" background : url('../../atlas/icon/lock.png') no-repeat scroll 10em; background-size: 10%; background-color: #fff;"> <br>
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
                    <?php 
                            error_reporting(E_ERROR);
                            if($_SESSION["id"] == "@12345678") {
                                   echo '<div class="reflishselect" onclick="selectwith();"> </div>'; 
                            }
                    ?>
                        
                    
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
                             echo '<option>Console Admin 👑️</option>';
                             echo '<option>Uploads Anime 🚀️</option>';
                             echo '<option>Create Anime Description ☕️</option>';
                             echo '<option>Publics Anime 🌍️</option>';
                             echo '<option>Mail Box ✉️</option>';
                             echo '<option>🛍️ Keys [SHOPS] 🛍️</option>';
                          }
                         //
                         
                       ?>


                        <!-- End Selected -->
                     </select>
                     <!-- You can Remove This Demo when User Verified About admin [DataBase] -->
                     <i class="demoAboutNewUser">
                        <span> <!-- Change Demo =TO> Premier -->
                           <?php 
                          
                                    if ($_SESSION['id'] == "@12345678") {
                                       echo "<span style='text-decoration: 5px none;'>  Premier ♦ </span>";
                                    }
                                    
                                    else if ($_SESSION['verif'] == 1) {
                                       echo "<span style='text-decoration: 5px none;'> ♥ </span>";
                                    }
                                    else if ($_SESSION['verif'] == 0 && $_SESSION['username'] != "")  {
                                       echo "Demo";
                                    }

                                    else {
                                       echo " <i> ○ </i>";
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
                  <li class="boxUserPhoto" style="background-image: url('../../atlas/Profile/<?php 

                         if ($_SESSION['verif'] != 0 && $_SESSION['image'] != "") {
                           echo  $_SESSION['image'];
                          }

                          else echo "boy.png";

                   ?>')"></li> 
                  
               </div>

               <!-- Center RoseWood -->

            <div id="centerelem-fix">
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
                  <input type="text" placeholder="Search" class="searchelm" hidden readonly style='cursor: no-drop;' <?php 
            
                     
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
         <a href="../../index.php"><li>HOME</li></a>
         <a href=""><li>NEWS</li></a>
         <a href=""><li>BLOGS</li></a>
         <a href="<?php 
            if($_SESSION["id"] != "") {
               include "../../data/sql_connect.php";
               $id = $_SESSION["id"];
               $req = "select id from accunet where id = '$id'";
               $res = mysql_query($req);
               $a = mysql_fetch_array($res);
               echo "../../profiles/".$a[0]."/";
            }

          ?>"><li>PROFILE</li></a>
         <a href=""><li>DISCORD</li></a>
         <a href=""><li>ANIMES</li></a>
         <a href="../../contact.php"><li>CONTACT US</li></a>
         <a href="../shop/"><li>SHOP</li></a>
      </ul>
   </div>
   <!-- aside -->

   <aside>
    <div id="banner"></div>
    
    <div class="about_aside">
            <!-- Start -->
                <div class="sidebody">
                  <div id="box1">
                     <div class="ph_blog1"></div>
                     <p class="txt_blog1">
                        <span id='title_ph'>Demon Slayer</span> dolor sit, amet consectetur adipisicing elit. Eligendi suscipit explicabo cumque sed unde ad, consequuntur temporibus, vero, aperiam quis quidem labore laborum modi illo placeat maxime dignissimos reiciendis saepe.
                     </p>
                  </div>
                </div>
                <form action="" method="post">
                     <div class="sidebar">
                        
                           <div class="cominication">


                           <div class="type_com">
                                 <textarea name="com" id="com" cols="30" rows="" placeholder="Add Commenet ..."></textarea>
                                 <input type="submit" name="send_com" value="Send" id='send_com'>
                           </div>

                              <div class="show_com">
                                 <ul>
                                    <?php 
                                       include "../../data/sql_connect.php";

                                       

                                       $req = "select * from blogs_cmd ORDER BY date DESC,time DESC";
                                       $res = mysql_query($req);

                                       while ($c = mysql_fetch_array($res)) {
                                          # code...
                                          echo " <li><div class='photoprofile' style='background: url(../../atlas/Profile/".$c[3].") no-repeat; background-size : cover ; background-position : center center ; '> </div> <span class='box_com'><a href='../../profiles/".$c[0]."'><span id='name_com'>".$c[1]."</span> </a> <span id='date_com'>". $c[4] ."</span> <br><div id='bb_com'><span class='chat_com'>".$c[2]."</span> <div>  </li><br>" ;
                                       }

                                    ?>
                                    
                                 </ul>
                              </div>
                              
                              
                           </div>
                     </div>
                </form>
            <!-- End -->
    </div>
   </aside>
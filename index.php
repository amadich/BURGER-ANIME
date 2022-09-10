<?php 
   error_reporting(E_ERROR);
   if (isset($_POST['btn_sublabeweb'])) {
		include "data/sql_connect.php";
	}

   if (isset($_POST['btn_login'])) {
      session_start();
      include "data/sql_connect.php";
   }

?>
<!DOCTYPE html>
<html lang="en">
<head>
   
   <link rel="stylesheet" href="css/main.css">
   <link rel="stylesheet" href="css/mainMenu.css">
   <link rel="stylesheet" href="css/mainBody.css">
<!--    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous"> -->
   <link rel="icon"  href="favicon.png">
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <script src="lib/options.js"></script>
   <script src="lib/movement.js"></script>
   <title>BURGER ANIME</title>
</head>
<body>
   <!-- Blocked Web -->
   <div id="blockedPage">
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
            <li class="headlogo"></li>

            <div id="centerelem">
               <a href="#"><li class="menuLi" style="text-decoration: #222 3px underline;">Home</li></a>
               <a href="menu.php"><li class="menuLi">Menu</li></a>
               <li class="menuLi">Service</li>
               <li class="menuLi">Shop</li>

               <li class="menuLi1" onclick="li_ContactUs()"> Contact US </li>
               <!-- element Search -->
               <li>
                   <!-- you can unlock search mod with Verified Admin (Fuature Premiers) -->
                   <!-- readonly input Javascript on update in the fueatert using VueJs -->
                  <input type="text" placeholder="Search" class="searchelm" <?php 
                      if (isset($_POST['btn_login'])) { 
                             
                              include "data/sql_verif.php";
                              if ($ok == true) {
                                 $t = mysql_fetch_array($res);
                                    if ($t[5] == 0) {
                                       echo 'readonly';
                                    }
                              }
                           
                           }
                        else {
                           echo "readonly";
                        }
               ?> style='width: 100px; height: 25px;'>

               </li>
               <!-- Log in Sociel !! -->
               <div id="loginUser">

                  <li class="userNamemail">
                      <!-- Default php Welcome Wards -->
                     <span> <!-- Create a php  <?php ?> for change name Selected -->
                        <?php 
                           if (isset($_POST['btn_sublabeweb'])) { 
                           include "data/sql_rej.php";
                        }

                        if (isset($_POST['btn_login'])) { 
                           include "data/sql_login.php";
                        }
                        ?>
                     </span> 
                     <!-- You can Remove This Demo when User Verified About admin [DataBase] -->
                     <i class="demoAboutNewUser">
                        <span> <!-- Change Demo =TO> Premier -->
                           <?php 
                           if (isset($_POST['btn_login'])) { 
                              
                              include "data/sql_verif.php";
                              if ($ok == true) {
                                 $t = mysql_fetch_array($res);
                                    if ($t[5] == 1) {
                                       echo "Premier";
                                    }
                                    else {
                                       echo "Demo";
                                    }
                              }
                           
                           }
                           //
                           if (isset($_POST['btn_sublabeweb'])) {   
                              include "data/sql_verif.php";
                           }
                           ?>
                        </span>
                     </i> 
                     <!-- 
                        Premier = NO ADS + Useing linked speed (Feoters)
                        linked speed = (Search Mod input) + Fueture video()
                        Demo != Premier
                     -->
                  </li>
                  <!-- <li class="boxUserPhoto"></li> -->
                  
               </div>
            </div>
         </ul>
      </div>
   </header>
   <!-- aside -->
   <br> <br> <br>
   <aside>
      <!-- Head Title Body -->
      <div id="titleheadLogo">

      </div>
      <div id="wlcTitle">
         <p id="firstADD">TASTY •N• TRENDY</p> <br>
         <p id="secoundADD">BURGER ANIME</p> <br>
         <p id="therideADD">Chill & comfort Condition </p>
         <br>
         <p id="discriptionTitle" style="width: 280px;">A Molestias voluptatibus explicabo quaerat. Cum dignissimos voluptas, excepturi omnis repudiandae exercitationem corrupti odit dicta! Impedit unde rem delectus mollitia.</p>
         <br> <br>
        <a href="menu.php" style="text-decoration:none;"> <button class="btn_a" >View More ♣</button> </a>
         <a href="menu.php" style="text-decoration:none;"> <button class="btn_b">Ovrér New</button> </a>
      </div>

      <!-- Selling ♠ -->
      <br> <br> <br> <br>
      <div id="titleselling">
         <p id="settitlesell">Best Selling <br> _______🎭_______</p>
      </div>
      <!-- Boxs -->
      <div id="boxs">

         <!-- F1 -->

            <div class="container_box">

               <div class="aboutBox">

               </div>

               <div class="cader">
                  <div class="atlas_cader" id="fTitle1"></div>
                  <div class="about_cader">

                     <label class="labelDiscription">
                        <b>Detective Conan</b>
                        <br>
                        <span class="DiscriptionAboutBox" onmousemove="aboutopenConan()" onmouseleave="aboutcloseConan()">
                           Detective Conan ipsum dolor sit, amet consectetur adipisicing elit. Omnis voluptates porro aliquam voluptas quod tempora odit nesciunt. Distinctio nihil non odio rem .
                        </span> <br>

                        <button class="btn_watchanime"> Watch Anime </button>

                     </label>

                  </div>
               </div>
            </div>
         <!-- F2 -->
         <div class="container_box">
            <div class="cader">
               <div class="atlas_cader" id="fTitle2"></div>
               <div class="about_cader">

                  <label class="labelDiscription">
                     <b>Demon Slayer</b>
                     <br>
                     <span class="DiscriptionAboutBox" onmousemove="aboutopenDemonSlayer()" onmouseleave="aboutcloseDemonSlayer()">
                        Demon Slayer ipsum dolor sit, amet consectetur adipisicing elit. Omnis voluptates porro aliquam voluptas quod tempora odit nesciunt. Distinctio nihil non odio rem .
                     </span> <br>

                     <button class="btn_watchanime"> Watch Anime </button>

                  </label>

               </div>
            </div>
         </div>
         <!-- F3 -->
          <!-- F2 -->
          <div class="container_box">
            <div class="cader">
               <div class="atlas_cader" id="fTitle3"></div>
               <div class="about_cader">

                  <label class="labelDiscription">
                     <b>Attack on Titan</b>
                     <br>
                     <span class="DiscriptionAboutBox"  onmousemove="aboutopenattackoftitan()" onmouseleave="aboutcloseattackoftitan()">
                        Attack on Titan ipsum dolor sit, amet consectetur adipisicing elit. Omnis voluptates porro aliquam voluptas quod tempora odit nesciunt. Distinctio nihil non odio rem .
                     </span> <br>

                     <button class="btn_watchanime"> Watch Anime </button>

                  </label>

               </div>
            </div>
         </div>
         <!-- F4 -->
          <!-- F2 -->
          <div class="container_box">
            <div class="cader">
               <div class="atlas_cader" id="fTitle4"></div>
               <div class="about_cader">

                  <label class="labelDiscription">
                     <b>Jujutsu Kaisen</b>
                     <br>
                     <span class="DiscriptionAboutBox" onmousemove="aboutopenJijutsu()" onmouseleave="aboutcloseJijutsu()">
                        Jujutsu Kaisen ipsum dolor sit, amet consectetur adipisicing elit. Omnis voluptates porro aliquam voluptas quod tempora odit nesciunt. Distinctio nihil non odio rem .
                     </span> <br>

                     <button class="btn_watchanime"> Watch Anime </button>

                  </label>


               </div>
            </div>
         </div>
         <!-- End -->
      </div>
   </aside>
   <!-- footer -->
</body>
</html>
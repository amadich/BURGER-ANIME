<?php 
   //echo "Hello World";
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
        <link rel="stylesheet" href="main.css">
   	 <link rel="icon"  href="../../favicon.png">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
        
    <meta id="tpKeywords" name="keywords" content="موقع أنمي , تعارف وتشات , موقع أمن , مواقع عربية, جديدة">
    <meta name="description" content="Burgeranime.c1.biz  | عالم ممتع و خاص بالأنمي - شبكة تواصل اجتماعية ">
    <meta property="og:site_name" content="Burgeranime.c1.biz">
    <meta property="og:image" content="../../favicon.png">
    <script src="option.js"></script>
    <script src="search.js"></script>
    <script src="option_edit.js"></script>
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
                  <input type="text" style="background-color: #ff5e0075;" readonly placeholder="Search" class="searchelm" <?php 
            
                     
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
         <a href="../blogs/"><li>BLOGS</li></a>
         <a href="<?php 
            if($_SESSION["id"] != "") {
               include "data/sql_connect.php";
               $id = $_SESSION["id"];
               $req = "select id from accunet where id = '$id'";
               $res = mysql_query($req);
               $a = mysql_fetch_array($res);
               echo "../../profiles/".$a[0]."/";
            }

          ?>"><li>PROFILE</li></a>
         <a href=""><li>DISCORD</li></a>
         <a href=""><li>ANIMES</li></a>
         <a href="contact.php"><li>CONTACT US</li></a>
         <a href=""><li>SHOP</li></a>
      </ul>
   </div>
   <!-- aside -->

            <aside>
                
                     <div id="myownshop">
                        <div id="box">
                              <!-- #1 -->
                              <div class="box1">
                              <form action="items/index.php" method="post" id="myForm1">
                                 <div class="bloc1"></div>
                                    <p>
                                       <i>⭐️⭐️⭐️⭐️⭐️</i>
                                       <span style="display: block;">
                                       The story follows high school student Yuji Itadori as he joins a secret organization of Jujutsu Sorcerers to eliminate a powerful Curse named Ryomen Sukuna, of whom Yuji becomes the host.
                                       </span>
                                       <!-- <button onclick="bloc1();">Buy Now ⚡️</button> -->
                                       <input type="text" name="bloc1" hidden>
                                       <input type="button" name="bloc1" value="Buy Now ⚡️" onclick="buy1();" class="btn_buy" >
                                    </p>
                                 </div>
                              </form>
                              <!-- #2 -->
                              <div class="box1">
                              <form action="items/index.php" method="post" id="myForm2">
                                 <div class="bloc2"></div>
                                    <p>
                                       <i>⭐️⭐️⭐️⭐️⭐️</i>
                                       <span style="display: block;">
                                       The story focuses on a young boy named Gon Freecss who discovers that his father, who left him at a young age, is actually a world-renowned Hunter, a licensed professional who specializes in fantastical pursuits such as locating rare or unidentified animal species, treasure hunting, surveying unexplored enclaves, or ...
                                       </span>
                                       <!-- <button onclick="bloc2();">Buy Now ⚡️</button> -->
                                       <input type="text" name="bloc2" hidden>
                                       <input type="button" name="bloc2" value="Buy Now ⚡️" onclick="buy2();" class="btn_buy">
                                    </p>
                                 </div>
                              </form>
                              <!-- #2 -->
                              <div class="box1">
                              <form action="items/index.php" method="post" id="myForm3">
                                 <div class="bloc3"></div>
                                       <p>
                                          <i>⭐️⭐️⭐️⭐️⭐️</i>
                                          <span style="display: block;">
                                          It is set in a world where humanity is forced to live in cities surrounded by three enormous walls that protect them from gigantic man-eating humanoids referred to as Titans; the story follows Eren Yeager, who vows to exterminate the Titans after they bring about the destruction of his hometown and the death of his ...
                                          </span>
                                          <!-- <button onclick="bloc3();">Buy Now ⚡️</button> -->
                                          <input type="text" name="bloc3" hidden>
                                          <input type="button" name="bloc3" value="Buy Now ⚡️" onclick="buy3();" class="btn_buy">
                                       </p>
                                 </div>
                              </form>
                        </div>
                     </div>
                </form>
            </aside>

            <script>


function buy1() {
    let b1 = document.getElementsByClassName("box1")[0];
    let b2 = document.getElementsByClassName("box1")[1];
    let b3 = document.getElementsByClassName("box1")[2];
    //let btn1 = document.getElementsByTagName("button")[0].innerHTML = "Wait  ... 🌍️";
    let btn = document.getElementsByClassName("btn_buy")[0].value = "Wait  ... 🌍️";
    document.getElementsByClassName("btn_buy")[0].style.color = "white";
    //b1.style.textAlign = "center";
    b2.style.display = "none";
    b3.style.display = "none";
    setTimeout(() => {
        document.getElementById("myForm1").submit();
        //location.href = "";
    }, 3000);
}

function buy2() {
    let b1 = document.getElementsByClassName("box1")[0];
    let b2 = document.getElementsByClassName("box1")[1];
    let b3 = document.getElementsByClassName("box1")[2];
    //let btn = document.getElementsByTagName("button")[1].innerHTML = "Wait  ... 🌍️";
    let btn = document.getElementsByClassName("btn_buy")[1].value = "Wait  ... 🌍️";
    document.getElementsByClassName("btn_buy")[1].style.color = "white";
    //document.getElementsByTagName("button")[1].style.color = "white";
    //b1.style.textAlign = "center";
    b1.style.display = "none";
    b3.style.display = "none";
    setTimeout(() => {
        document.getElementById("myForm2").submit();
        //location.href = "";
    }, 3000);
}

function buy3() {
    let b1 = document.getElementsByClassName("box1")[0];
    let b2 = document.getElementsByClassName("box1")[1];
    let b3 = document.getElementsByClassName("box1")[2];
    //let btn = document.getElementsByTagName("button")[2].innerHTML = "Wait  ... 🌍️";
    let btn = document.getElementsByClassName("btn_buy")[2].value = "Wait  ... 🌍️";
    document.getElementsByClassName("btn_buy")[2].style.color = "white";
    //document.getElementsByTagName("button")[2].style.color = "white";
    //b1.style.textAlign = "center";
    b1.style.display = "none";
    b2.style.display = "none";
    setTimeout(() => {
        document.getElementById("myForm3").submit();
        //location.href = "";
    }, 3000);
}

            </script>
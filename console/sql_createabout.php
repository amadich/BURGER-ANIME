<?php 

   //error_reporting(E_ERROR);
   session_start();
   if (isset($_POST["sub_createabout"])) {
         
      $dirname =  $_POST['openfolder'];
      $create = __DIR__."../../anime/".$dirname."/about";
      if (!is_dir($create)) {
         mkdir($create,0777,true);
         echo "Folder 'About' created Succiful";

         sleep(2);
       }

   }

   if (isset($_POST["sub_finishabout"])) {
      $_SESSION['loremdata'] = $_POST['animedisc'];
      include "data/sql_createabout.php";

   }
   

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <style>
      input {
         width: 250px;
         height: 30px;
         transition: 0.4s;
      }
      input:hover{
         width: 500px;
      }
   </style>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>SQL CREATE</title>
</head>
<body>

	<hr>


   <aside>

                     <form action="sql_createabout.php" method="post" enctype="multipart/form-data">

                           <table border="1px">
                                 <tr>
                                    <td>Anime Folder (Dont Write any think here ⚠)</td>
                                    <td>Anime Name </td>
                                    <td>Episode</td>
                                    <td>Stars ⭐</td>
                                    <td>Description</td>
                                    <td>Photo Anime</td>
                                    <td>Banner Anime</td>
                                 </tr>

                                 <tr>

                                    <td>
                                       <input type="text" name="openfolder" value="<?php echo $dirname; ?>" readonly style="width: 50px; background: #2f2f2d; color: #fff;">
                                    </td>

                                 <td>
                                    <input type="text" name="animename" placeholder="Anime Name">
                                 </td>
                                <td>
                                    <input type="number" name="eps" placeholder="Anime Episode" style="width: 100px;">
                                </td>
                                

                                 <td>
                                    <select name="starschoix" id="starschoix">
                                       <option value="5">5</option>
                                       <option value="6">6</option>
                                       <option value="7">7</option>
                                       <option value="8">8</option>
                                       <option value="9">9</option>
                                       <option value="10">10</option>
                                    </select>
                                 </td>

                                 <td>
                                    <textarea name="animedisc" id="animedisc" cols="30" rows="10"></textarea>
                                 </td>


                                 <td>
                                    <input type="file" name="set_image" required>
                                 </td>

                                 <td rowspan="3">
                                    <input type="file" name="set_image1" required>
                                    <input type="file" name="set_image2" required>
                                    <input type="file" name="set_image3" required>
                                 </td>

                                 </tr>

                             
                                    <td>
                                       <input type="submit" name="sub_finishabout" value="Create About">
                                    </td>
                                 </tr>

                           </table>

                     </form>




   </aside>

   
</body>
</html>
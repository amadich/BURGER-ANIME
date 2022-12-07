<?php 
    error_reporting(E_ERROR);
    include "../data/sql_connect.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="../favicon.png">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mail Box <?php
        
        
        $tres = mysql_query("select count(*) from contact");
        $bbx = mysql_fetch_array($tres);
        echo "  [ ".$bbx[0]." ] ⚡ ";
        ?></title>
</head>
<body>
    <?php 
       
        $res = mysql_query("select * from contact ORDER BY date");
        echo "<table border='1px'> <tr> <td> From Email </td> <td> Title Sujet </td> <td> Discription </td> <td> Image IDEA </td> <td> Date  </td> </tr> ";

        while($t = mysql_fetch_array($res)) {
            echo "<tr> <td>".$t[0]."</td> <td>".$t[1]."</td> <td>".$t[2]."</td> <td> <img src='../atlas/contacts/".$t[3]."' width='150' /></td> <td>".$t[4]."</td> </tr>";
        }

        echo "</table>";

    ?>
</body>
</html>
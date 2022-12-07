<?php 
    $key = $_POST["key"];
    $animename = $_POST["choix"];
    $check_key = "select * from code where key = '$key'";
    $res = mysql_query($check_key);

    if (mysql_num_rows($res) != 0) {
        echo "Try again Faild to check <br> <span style='color: red;'> key allready in DB </span>";
    }

    else {
        
        $insert_key = "insert into code values ('$animename','$key')";
        $res_in = mysql_query($insert_key);
        if (mysql_affected_rows() == 1) {
            echo "Your key Inserted";
        }
        else {
            echo "FAild";
        }
    }

?>
<?php

session_start();

    if (isset($_POST["btn_getkey"])) {
        include "../data/sql_connect.php";
        include "data/sql_key.php";
    }

    if (isset($_POST["btn_showkeys"])) {
        include "../data/sql_connect.php";
        include "data/sql_affichekeys.php";
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        table {
            border-collapse: collapse;
            margin: auto;
            float: right;
        }
        tr,td {text-align: center; font-family: cursive;font-size:large;}
    </style>
    <link rel="icon"  href="../favicon.png">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BURGER ANIME [ADMIN_KEYS]</title>
</head>
<body>
    <a href="../">back</a>
            <header>
                        <center>
                                <i>Console <span style="color: red;">ADMIN</span></i>
                                <h2>Profile : <?php
                                        if ($_SESSION["id"] == "@12345678") {
                                            echo "<b style='color: deeppink;'>". $_SESSION["username"] ."</b>";
                                        }

                                        else {
                                            session_start();
                                            session_unset();
                                            session_destroy();
                                            header("location: http://burgeranime.c1.biz/");
                                                                            echo "<script> location.href = 'http://burgeranime.c1.biz/'; </script>";
                                        }
                                ?></h2>
                        </center>
                </header>
                <hr>
    <h1>
    <?php 
        
        $key = "";
        for ($i=0; $i < 4; $i++) { 
            $num = rand(100,400);
            $ch = chr((($num)/100)+65);
            # code...
            $key .= $num.$ch."-";
        }
        $key = substr($key,0,-1);
        
        echo "<br> <span style='color: green;'>".$key."</span>";
    ?>
    </h1>

    <form action="key.php" method="post">
        <select name="choix" id="choix">
            <option value="Attack on Titan">Attack on Titan</option>
            <option value="Hunter x Hunter">Hunter x Hunter</option>
            <option value="Jujutsu Kaisen">Jujutsu Kaisen</option>
        </select>

        <input type="text" name="key" value = "<?php echo $key;?>">
        <input type="submit" name='btn_getkey'>
    </form>

    <form action="key.php" method="post">
        <input type="submit" name="btn_showkeys" value="show All Keys">
    </form>

</body>
</html>
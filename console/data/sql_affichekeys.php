<?php 

$req = "select * from code";
$res = mysql_query($req);

echo "<table border='1px'> <tr> <td> Anime Name </td> <td> Key </td>";
while ( $t= mysql_fetch_array($res) ) {
    echo "<tr> <td>".$t[0]."</td> <td style='color: green;'>".$t[1]."</td></tr>";
}

echo "</table>";

?>
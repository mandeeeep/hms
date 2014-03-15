<?php
$path = "../";
require $path.'includes/session_chk.php';
require $path.'includes/connect.php';
require $path.'includes/header-manager.php';
echo "<div class='lower'>";
$q1 = "SELECT * FROM room_capacity";
$result1 = mysql_query($q1, $connect);
echo "<fieldset><legend>Room Capacity Detail</legend>";
echo "<table class='tab'><tr><td>Room capacity Id</td><td>Room capacity Name</td><td>Value Adding Rates</td></tr>";
while ($array = mysql_fetch_array($result1)) {
    echo "<tr>";
    for ($i = 0; $i < 3; $i++) {
        echo "<td>" . $array[$i] . "</td>";
    }
    echo "</tr>";
}
echo "</table>";
echo "</fieldset>";
require ($path . "includes/footer-manager.php");
?>

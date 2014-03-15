<?php
$path = "../";
require $path.'includes/session_chk.php';
require $path.'includes/connect.php';
require $path.'includes/header-manager.php';
echo "<div class='lower'>";
$q1 = "SELECT * FROM services";
$result1 = mysql_query($q1, $connect);
echo "<fieldset><legend>Services Detail</legend>";
echo "<table class='tab'><tr><td>Service Id</td><td>Service Info</td><td>Amount</td><td>Reg Id</td>";
while ($array = mysql_fetch_array($result1)) {
    echo "<tr>";
    for ($i = 0; $i < 5; $i++) {
        echo "<td>" . $array[$i] . "</td>";
    }
    echo "</tr>";
}
echo "</table>";
echo "</fieldset>";
require ($path . "includes/footer-manager.php");
?>


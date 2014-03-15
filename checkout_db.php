<?php
$path="./";
require ("connect.php");
require "includes/screen_chk.php";
require ("includes/header-desk.php");
$date=date('Y-m-d');
echo "<fieldset><legend>Checkout Bill</legend>";
$q1 = "SELECT reg_id FROM registration WHERE date_out='in' and room_no='$_POST[room]'";
$result1 = mysql_query($q1, $connect);
$regid = mysql_fetch_array($result1);
$q2 = "UPDATE registration
    SET date_out='$date'
    WHERE reg_id='$regid[0]'";
$q3 = "UPDATE rooms
    SET room_status=0
    WHERE room_no='$_POST[room]'";
$result2 = mysql_query($q2, $connect);
$result3 = mysql_query($q3, $connect);
$q4 = "SELECT * FROM services WHERE reg_id=$regid[0]";
$result4 = mysql_query($q4, $connect);
$services_count = mysql_num_rows($result4);
$q7="SELECT c.client_name,c.address FROM clients c,registration r WHERE r.reg_id=$regid[0] and r.client_id=c.client_id";
$result7=mysql_query($q7,$connect);
$info=mysql_fetch_array($result7);
echo "Name:".$info[0]."<br/>";
echo "Address:".$info[1]."<br/>";
if ($services_count > 0) {
    echo "<table class='tab'>";
    echo "<tr><td>ServiceId</td><td>ServiceInfo</td><td>Amount</td></tr>";
    while ($row = mysql_fetch_array($result4)) {
        echo "<tr>";
        echo "<td>" . $row[0] . "</td>" . "<td>" . $row[1] . "</td>" . "<td>" . $row[2] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
}
$q5 = "SELECT SUM(amount) FROM services WHERE reg_id='$regid[0]'";
$result5 = mysql_query($q5, $connect);
$service_amounts = mysql_fetch_array($result5);
$q6 = "SELECT rates FROM rooms WHERE room_no='$_POST[room]'";
$result6 = mysql_query($q6, $connect);
$room_rate = mysql_fetch_array($result6);
echo "<br/>" . "<br/>" . "<br/>";
echo "Room Charge:" . $room_rate[0] . "<br/>";
if ($services_count > 0) {
    echo "Service Total Charges:" . $service_amounts[0] . "<br/>";
}
echo "Total amount:";
echo $room_rate[0] + $service_amounts[0];
echo "</fieldset>";
require ("includes/footer-desk.php");
?>

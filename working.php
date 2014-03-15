<?php
require ("includes/connect.php");
require "includes/screen_chk.php";
$date=date('Y-m-d');
$q1 = "SELECT room_no FROM rooms WHERE room_capacity='$_POST[capacity]' and room_category='$_POST[category]' and room_status=0 order by rand() limit 1";
$result1 = mysql_query($q1, $connect) or die(mysql_error());
$room = mysql_fetch_array($result1);
if (!$room[0]) {
    $status = 1;
} else {
    $status = 2;
    $q2 = "INSERT INTO clients(client_name,`address`,contact)
    VALUES('$_POST[name]','$_POST[addr]','$_POST[contact]')";
    $result2 = mysql_query($q2, $connect) or die(mysql_error());
    $q3 = "UPDATE rooms
        SET room_status=1
        WHERE room_no='$room[0]'";
    if ($result2) {
        $result3 = mysql_query($q3, $connect) or die(mysql_error());
        //$q4 = "SELECT current_timestamp";
        //$result = mysql_query($q4, $connect);
        //$date = mysql_fetch_array($result);
        $q5 = "SELECT client_id FROM clients WHERE client_name='$_POST[name]' and address='$_POST[addr]' and contact='$_POST[contact]'";
        $result5 = mysql_query($q5, $connect) or die(mysql_error());
        $id = mysql_fetch_array($result5); 
        $q6 = "INSERT INTO registration(date_in,room_no,client_id,date_out)
        VALUES('$date',$room[0],$id[0],'in')";
        echo $q6;
        if ($result3) {
            $result6 = mysql_query($q6, $connect) or die(mysql_error());
        } else {
            $status = 4;
        }
    } else {
        $status = 3;
    }
}
mysql_close($connect);
?>
<script type="text/javascript">
    window.location="checkin.php?status=<?php echo $status; ?>&&room=<?php echo $room[0]; ?>&&name=<?php echo $_POST['name']; ?>"
</script>



<?php
require("includes/connect.php");
require "includes/screen_chk.php";
$q1 = "SELECT reg_id FROM registration WHERE room_no=$_POST[room] and date_out='in'";
$result1 = mysql_query($q1, $connect) or die(mysql_error());
$regid = mysql_fetch_array($result1);
$q2 = "INSERT INTO services(service_info,amount,reg_id)
    VALUES('$_POST[service]',$_POST[amount],$regid[0])";
$result2 = mysql_query($q2, $connect) or die(mysql_error());
$q3 = "SELECT room_no from registration WHERE reg_id=$regid[0] and date_out='in'";
$result3 = mysql_query($q3, $connect) or die(mysql_error());
if (!$result2) {
    $status = 2;
} else {
    $status = 1;
}
mysql_close($connect);
?>
<script type="text/javascript">
    window.location="services.php?status=<?php echo $status; ?>&&service=<?php echo $_POST[service];?>&&room=<?php echo $room[0];?>&&amount=<?php echo $_POST[amount];?>";
</script>

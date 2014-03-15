<?php
$path = "../";
require $path . 'includes/session_chk.php';
require $path . 'includes/connect.php';
$q1="SELECT rates FROM room_capacity WHERE room_capacity_id='$_POST[room_capacity]'";
$result1=mysql_query($q1,$connect);
$rate1=mysql_fetch_array($result1);
$q2="SELECT rates FROM room_category WHERE room_category_id='$_POST[room_category]'";
$result2=mysql_query($q2,$connect);
$rate2=mysql_fetch_array($result2);
$rate[0]=$rate1[0]+$rate2[0];
$q3 = "INSERT INTO rooms(room_no,room_capacity,room_category,rates)
    VALUES('$_POST[room_no]','$_POST[room_capacity]','$_POST[room_category]','$rate[0]')" or die(mysql_error());
$result3 = mysql_query($q3, $connect);
if ($q3) {
    $status = 1;
} else {
    $status = 2;
}
mysql_close($connect);
?>
<script type="text/javascript">
    window.location="add_roomfrm.php?status=<?php echo $status; ?>";
</script>




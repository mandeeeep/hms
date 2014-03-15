<?php
$path = "../";
require $path . 'includes/session_chk.php';
require $path . 'includes/connect.php';
$capacity = $_POST[capacity];
$q1 = "DELETE FROM room_capacity WHERE room_capacity_name='$capacity'";
$result1 = mysql_query($q1, $connect);
if (!$result1) {
    $status = 2;
} else {
    $status = 1;
}
mysql_close($connect);
?>
<script type="text/javascript">
    window.location="remove_capacity.php?capacity=<?php echo $capacity; ?>&&status=<?php echo $status; ?>";
</script><?php

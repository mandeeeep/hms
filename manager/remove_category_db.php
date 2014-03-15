<?php
$path = "../";
require $path . 'includes/session_chk.php';
require $path . 'includes/connect.php';
$category = $_POST[category];
$q1 = "DELETE FROM room_category WHERE room_category_name='$category'";
$result1 = mysql_query($q1, $connect);
if (!$result1) {
    $status = 2;
} else {
    $status = 1;
}
mysql_close($connect);
?>
<script type="text/javascript">
    window.location="remove_category.php?category=<?php echo $category; ?>&&status=<?php echo $status; ?>";
</script><?php

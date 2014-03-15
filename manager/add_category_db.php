<?php
$path = "../";
require $path . 'includes/session_chk.php';
require $path . 'includes/connect.php';
$q="INSERT into room_category(room_category_name,rates)
    VALUES('$_POST[room_category]','$_POST[category_rates]')";
$result=mysql_query($q,$connect);
echo $q;
if(!$result)
{
    $status=2;
}
else{
    $status=1;
}
mysql_close($connect);
?>
<script type="text/javascript">
    window.location="add_category.php?status=<?php echo $status; ?>";
</script>

<?php
$path = "../";
require $path . 'includes/session_chk.php';
require $path . 'includes/connect.php';
$q="INSERT into room_capacity(room_capacity_name,rates)
    VALUES('$_POST[room_capacity]','$_POST[capacity_rates]')";
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
    window.location="add_capacity.php?status=<?php echo $status; ?>";
</script>

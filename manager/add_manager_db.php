<?php
$path = "../";
require $path . 'includes/session_chk.php';
require $path . 'includes/connect.php';
$q="INSERT into managers(manager,`password`)
    VALUES('$_POST[mgr_name]','$_POST[mgr_pwd]')";
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
    window.location="add_manager.php?status=<?php echo $status; ?>";
</script>

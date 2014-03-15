<?php
$path = "../";
require $path.'includes/connect.php';
/*never ever add session checking page at the login working page*/
$mgr = $_POST['mgr'];
$pwd = $_POST['pwd'];
$q = "select manager,`password` from managers where manager='$mgr' and `password`='$pwd'";
$result = mysql_query($q, $connect);
//$login = mysql_fetch_array($result);
$check = mysql_num_rows($result);
if ($check > 0) {
    session_start();
    $_SESSION[manager] = $mgr;
    echo "<script type='text/javascript'>window.location='add_roomfrm.php'</script>";
} else {
    $status = 1;
    echo "<script type='text/javascript'>window.location='../index.php?status=$status'</script>";
}
?>





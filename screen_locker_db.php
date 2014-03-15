<?php
require 'includes/connect.php';
require "includes/screen_chk.php";
/*never ever add session checking page at the login working page*/
$pwd = $_POST['screen'];
$q = "select locker_pwd from locker where locker_pwd='$pwd'";
$result = mysql_query($q, $connect);
$check = mysql_num_rows($result);
if ($check > 0) {
    session_start();
    $_SESSION[screen] = $pwd;
    echo "<script type='text/javascript'>window.location='desk.php'</script>";
} else {    
    echo "<script type='text/javascript'>window.location='index.php'</script>";
}
?>





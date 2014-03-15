<?php
require "../includes/connect.php";
require "../includes/session_chk.php";
$locker=$_SESSION[screen];
$code=$_POST[code_1];
$q="UPDATE locker
    SET locker_pwd='$code'
    WHERE locker_pwd='$locker'";
$result=mysql_query($q,$connect);
if(!result)
{
    $status=2;
}else
{
    $status=1;
}
mysql_close($connect);
?>
<script type="text/javascript">
    window.location="change_locker.php?status=<?php  echo $status; ?>";
    </script>
<?php
require ("connect.php");
require "includes/screen_chk.php";
$q1="select current_timestamp";
$result=mysql_query($q1,$connect);
$date=mysql_fetch_array($result);
echo $date[0];
$q2="insert into registration(date_in)
    values('$date[0]')";
$result2=mysql_query($q2,$connect);
if(!$result2)
{echo mysql_error();}
?>

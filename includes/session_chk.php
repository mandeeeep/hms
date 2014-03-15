<?php
session_start();
if (isset($_SESSION[manager])) {

} else {
    $status = 2;
    echo "<script type='text/javascript'>window.location='".$path."'</script>";
}
?>

<?php
session_start();
if (isset($_SESSION[screen])) {

} else {
    $status = 2;
    echo "<script type='text/javascript'>window.location='index.php'</script>";
}
?>

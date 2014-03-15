<?php
$path = "../";
require $path.'includes/session_chk.php';
require $path.'includes/connect.php';
$room=$_POST[room];
$q1="DELETE FROM rooms WHERE room_no='$room'";
$result1=mysql_query($q1,$connect);
?>
<script type="text/javascript">
    window.location="remove_room.php?room=<?php echo $room; ?>&&status=1";
    </script>
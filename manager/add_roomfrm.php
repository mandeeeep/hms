<?php
$path = "../";
require $path . 'includes/session_chk.php';
require $path . "includes/header-manager.php";
?>
<div class="lower">
    
        <form name="add_room" action="add_room.php" method="post" onsubmit="return validate_room(this)">
            <fieldset><legend>Add Room</legend>
            <table>
            <tr>
                <td><label>Room no</label></td>
                <td><input type="text" name="room_no"></td>
            </tr>

            <tr>
                <td><label>Room capacity</label></td>
                <td><select name="room_capacity">
                        <?php
                        require ($path."includes/connect.php");
                        $q1 = "SELECT * FROM room_capacity";
                        if (!$q1) {
                            echo "help";
                        }
                        $result1 = mysql_query($q1, $connect);
                        while ($array = mysql_fetch_array($result1)) {
                            echo "<option value=" . $array[0] . ">" . $array[1] . "</option>";
                            $i++;
                        }
                        mysql_close($connect);
                        ?>
                    </select>
                </td>
            </tr>

            <tr>
                <td><label>Room category</label></td>
                <td><select name="room_category">
                        <?php
                        require ("../connect.php");
                        $q1 = "SELECT * FROM room_category";
                        if (!$q1) {
                            echo "help";
                        }
                        $result1 = mysql_query($q1, $connect);
                        while ($array = mysql_fetch_array($result1)) {
                            echo "<option value=" . $array[0] . ">" . $array[1] . "</option>";
                            $i++;
                        }
                        mysql_close($connect);
                        ?>
                    </select>
                </td>
            </tr>

            <tr>
                <td>
                    <input type="submit" name="btn" value="Add room">
                    <input type="reset" name="btn_r" value="Cancel">
                </td>
            </tr>
                </table>
                </fieldset>
        </form>

    <?php if ($_GET['status'] == 1) {
    echo "Room succesfully added";
} elseif ($_GET['status'] == 2) {
    echo "Room not added";
} else {

}
?>
    <?php require ($path . "includes/footer-manager.php"); ?>

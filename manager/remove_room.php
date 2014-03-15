<?php
$path = "../";
require $path . 'includes/session_chk.php';
require $path . "includes/header-manager.php";
?>
<div class="lower">
    <form name="remove_room" method="post" action="remove_room_db.php">
        <fieldset><legend>Remove Room</legend>
            <table>
                <tr>
                    <td><label>Room no</label></td>
                    <td><select name="room">
                            <?php
                            require ($path . "includes/connect.php");
                            $q1 = "SELECT room_no FROM rooms WHERE room_status=0";
                            $result1 = mysql_query($q1, $connect);
                            while ($array = mysql_fetch_array($result1)) {
                                echo "<option value=" . $array[0] . ">" . $array[0] . "</option>";
                            }
                            ?>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td><input type="checkbox" name="agree" value="yes" onclick="agreement_remove_room();"><label>Are the details correct?</label></td>
                </tr>

                <tr>
                    <td><input type="submit" name="btn" value="Remove" disabled></td>
                    <td><input type="button" name="c_btn" value="Back" ></td>
                </tr>
            </table>
        </fieldset>
    </form>
    <?php
                            if ($_GET[status] == 1) {
                                echo "Room no " . $_GET[room] . " was removed.";
                            }
    ?>
    <?php require ($path . "includes/footer-manager.php"); ?>

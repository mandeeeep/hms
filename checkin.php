<?php
$path = "./";
require "includes/screen_chk.php";
require ($path . "includes/header-desk.php");
?>


<form name="checkin" method="post" action="working.php" onsubmit="return validate_checkin(this);">
    <fieldset><legend>Check In</legend>
        <table>
            <tr>
                <td><label>Name</label></td>
                <td><input type="text" name="name"></td>
            </tr>

            <tr>
                <td><label>Address</label></td>
                <td><input type="text" name="addr"></td>
            </tr>

            <tr>
                <td><label>Contact</label></td>
                <td><input type="text" name="contact"></td>
            </tr>

            <tr>
                <td><label>Room Capacity</label></td>
                <td>
                    <select name="capacity">
                        <?php
                        require ("includes/connect.php");
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
                <td><label>Room Category</label></td>
                <td><select name="category">
                        <?php
                        require ("includes/connect.php");
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
                <td><input type="submit" name="sub" value="Submit"></td>
                <td><input type="reset" name="res" value="Reset"></td>
            </tr>
        </table>
    </fieldset>
</form>
<fieldset>
    <?php
                        if ($_GET["status"] == 1) {
                            echo "Room unavailable";
                        } elseif ($_GET["status"] == 2) {
                            echo "Room number " . $_GET['room'] . " has been alloted to client " . $_GET['name'];
                        } elseif ($_GET["status"] == 3) {
                            echo "Error creating client in client table";
                        } elseif ($_GET["status"] == 4) {
                            echo "Unable to book a room, even if free";
                        } else {
                            
                        }
    ?>
                    </fieldset>

<? require ($path . "includes/footer-desk.php"); ?>
            
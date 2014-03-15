<?php
$path = "../";
require $path . 'includes/session_chk.php';
require $path . "includes/header-manager.php";
?>
<div class="lower">
    <form name="remove_capacity" method="post" action="remove_capacity_db.php">
        <fieldset><legend>Remove Capacity</legend>
            <table>
                <tr>
                    <td><label>Capacity</label></td>
                    <td><select name="capacity">
                            <?php
                            require ($path . "includes/connect.php");
                            $q1 = "SELECT * FROM room_capacity WHERE 1";
                            $result1 = mysql_query($q1, $connect);
                            while ($array = mysql_fetch_array($result1)) {
                                echo "<option value=" . $array[1] . ">" . $array[1] . "</option>";
                            }
                            ?>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td><input type="checkbox" name="agree" value="yes" onclick="agreement_remove_capacity();"><label>Are the details correct?</label></td>
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
                                echo "Capacity " . $_GET[capacity] . " was removed.";
                            } elseif ($_GET[status] == 2) {
                                echo "Capacity:" . $_GET[capacity] . " was not removed.";
                            } else {

                            }
    ?>
    <?php require ($path . "includes/footer-manager.php"); ?>

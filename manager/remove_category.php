<?php
$path = "../";
require $path . 'includes/session_chk.php';
require $path . "includes/header-manager.php";
?>
<div class="lower">
    <form name="remove_category" method="post" action="remove_category_db.php">
        <fieldset><legend>Remove Category</legend>
            <table>
                <tr>
                    <td><label>Category</label></td>
                    <td><select name="category">
                            <?php
                            require ($path . "includes/connect.php");
                            $q1 = "SELECT * FROM room_category WHERE 1";
                            $result1 = mysql_query($q1, $connect);
                            while ($array = mysql_fetch_array($result1)) {
                                echo "<option value=" . $array[1] . ">" . $array[1] . "</option>";
                            }
                            ?>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td><input type="checkbox" name="agree" value="yes" onclick="agreement_remove_category();"><label>Are the details correct?</label></td>
                </tr>

                <tr>
                    <td><input type="submit" name="btn" value="Remove" disabled></td>
                    <td><input type="reset" name="c_btn" value="Back" ></td>
                </tr>
            </table>
        </fieldset>
    </form>
    <?php
                            if ($_GET[status] == 1) {
                                echo "Category " . $_GET[category] . " was removed.";
                            } elseif ($_GET[status] == 2) {
                                echo "Category " . $_GET[category] . " was not removed.";
                            } else {

                            }
    ?>
    <?php require ($path . "includes/footer-manager.php"); ?>

<?php
$path = "../";
require $path . 'includes/session_chk.php';
require $path . "includes/header-manager.php";
?>
<div class="lower">

        <form name="add_capacity" action="add_capacity_db.php" method="post" onsubmit="return validate_capacity(this)">
            <fieldset><legend>Add Room Capacity</legend>
            <table>
            <tr>
                <td><label>Room Capacity</label></td>
                <td><input type="text" name="room_capacity"></td>
            </tr>          

            <tr>
                <td><label>Value Adding Rates</label></td>
                <td><input type="text" name="capacity_rates"></td>
            </tr>

            <tr>
                <td>
                    <input type="submit" name="btn" value="Add Capacity">
                    <input type="reset" name="C_btn" value="Cancel">
                </td>
            </tr>
                </table>                
                </fieldset>
        </form>

    <?php if ($_GET['status'] == 1) {
    echo "Capacity succesfully added";
} elseif ($_GET['status'] == 2) {
    echo "Capacity not added";
} else {

}
?>
    <?php require ($path . "includes/footer-manager.php"); ?>

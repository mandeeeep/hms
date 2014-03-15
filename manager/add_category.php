<?php
$path = "../";
require $path . 'includes/session_chk.php';
require $path . "includes/header-manager.php";
?>
<div class="lower">

        <form name="add_category" action="add_category_db.php" method="post" onsubmit="return validate_category(this)">
            <fieldset><legend>Add Room Category</legend>
            <table>
            <tr>
                <td><label>Room Category</label></td>
                <td><input type="text" name="room_category"></td>
            </tr>

            <tr>
                <td><label>Value Adding Rates</label></td>
                <td><input type="text" name="category_rates"></td>
            </tr>

            <tr>
                <td>
                    <input type="submit" name="btn" value="Add Category">
                    <input type="reset" name="c_btn" value="Cancel">
                </td>
            </tr>
                </table>
                </fieldset>
        </form>

    <?php if ($_GET['status'] == 1) {
    echo "Category succesfully added";
} elseif ($_GET['status'] == 2) {
    echo "Category not added";
} else {

}
?>
    <?php require ($path . "includes/footer-manager.php"); ?>

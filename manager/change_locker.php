<?php
$path = "../";
require $path . 'includes/session_chk.php';
require $path . "includes/header-manager.php";
?>
<div class="lower">

        <form name="add_manager" action="change_locker_db.php" method="post" onsubmit="return validate_change_locker(this);">
            <fieldset><legend>Change Locker Code</legend>
            <table>
            <tr>
                    <td><label>New Locker Code</label></td>
                    <td><input type="password" name="code_1"></td>
                </tr>

                <tr>
                    <td><label>Confirm Code</label></td>
                    <td><input type="password" name="code_2"></td>
                </tr>

            <tr>
                <td>
                    <input type="submit" name="btn" value="Change Code">
                    <input type="reset" name="c_btn" value="Cancel">
                </td>
            </tr>
                </table>
                </fieldset>
        </form>

    <?php if ($_GET['status'] == 1) {
    echo "Code succesfully changed";
} elseif ($_GET['status'] == 2) {
    echo "Code not changed";
} else {

}
?>
    <?php require ($path . "includes/footer-manager.php"); ?>

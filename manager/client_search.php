<?php
$path = "../";
require $path . "includes/connect.php";
require $path . "includes/session_chk.php";
require $path . "includes/header-manager.php";
?>
<div class="lower">
    <form name="client_search" action="client_search_db.php" method="post" onsubmit="return validate_client_search(this);">
        <fieldset><legend>Client Search</legend>
            <table>
                <tr>
                    <td>Client name</td>
                    <td><input type="text" name="client_name"></td>
                </tr>

                <tr>
                    <td><input type="submit" name="btn" value="Search"></td>
                    <td><input type="reset" name="c_btn" value="Cancel"></td>
                </tr>

            </table>
        </fieldset>

        <?php
        require $path."includes/footer-manager.php";
        ?>



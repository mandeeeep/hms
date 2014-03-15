<?php
if($_GET[status]==1)
{
    echo "Invalid manager or password";
}
?>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="../includes/styles/hotel.css">
    </head>
    <body>
        <form name="manager_frm" method="post" action="mgr_indx_db.php" onsubmit="return validate_manager(this);">
            <table>
                <tr>
                    <td><label>Manager</label></td>
                    <td><input type="text" name="mgr"></td>
                </tr>

                <tr>
                    <td><label>Password</label></td>
                    <td><input type="password" name="pwd"></td>
                </tr>

                <tr>
                    <td><input type="submit" name="submit" value="Login"></td>
                    <td><input type="reset" name="reset" value="Cancel"></td>
                </tr>
            </table>
        </form>
    </body>
</html>

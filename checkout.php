<?php
$path = "./";
require "includes/screen_chk.php";
require ($path . "includes/header-desk.php");
?>
                <form name="checkout_frm" method="post" action="checkout_db.php">
                    <fieldset><legend>Checkout</legend>
                    <table>
                        <tr>
                            <td><label>Room no</label></td>
                            <td><select name="room">
                                    <?php
                                    require ("connect.php");
                                    $q1 = "SELECT room_no FROM rooms WHERE room_status=1";
                                    $result1 = mysql_query($q1, $connect);
                                    while ($array = mysql_fetch_array($result1)) {
                                        echo "<option value=" . $array[0] . ">" . $array[0] . "</option>";
                                    }
                                    mysql_close($connect);
                                    ?>
                                </select>
                            </td>
                        </tr>

                        <tr>
                            <td><input type="checkbox" name="agree" value="yes" onclick="agreement_checkout();"><label>Are you sure about the room number?</label></td>
                        </tr>

                        <tr>
                            <td>
                                <input type="submit" name="btn" value="Checkout" disabled>
                                <input type="reset" name="btn_r" value="Cancel">
                            </td>
                        </tr>
                    </table>
                        </fieldset>
                </form>
<? require ($path . "includes/footer-desk.php");?>
<?php
$path = "./";
require "includes/screen_chk.php";
?>
<?php
if ($_GET[status] == 1) {
    echo $_GET["service"] . " " . "Rs" . $_GET["amount"] . " in the tab of room no." . " " . $_GET["room"];
} elseif ($_GET[status] == 2) {
    echo "Service tab error";
} else {

}
require ($path . "includes/header-desk.php");
?>
                <form method="post" name="services_frm" action="services_db.php" onsubmit="return validate_services(this)">
                    <fieldset><legend>Service Billing</legend>
                    <table>
                        <tr>
                            <td><label>Service info</label></td>
                            <td><input type="text" name="service"></td>
                        </tr>

                        <tr>
                            <td><label>Amount</label></td>
                            <td><input type="text" name="amount" ></td>
                        </tr>

                        <tr>
                            <td><label>Room</label></td>
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
                                </select></td>
                        </tr>

                        <tr>
                            <td><input type="checkbox" name="agree" value="yes" onclick="agreement_services();"><label>Are the details correct?</label></td>
                        </tr>

                        <tr>
                            <td>
                                <input type="submit" name="submit" value="InTab" disabled>
                                <input type="reset" name="reset" value="Cancel">
                            </td>
                        </tr>
                    </table>
                        </fieldset>
                </form>
<? require ($path . "includes/footer-desk.php");?>
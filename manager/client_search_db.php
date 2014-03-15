<?php
$path="../";
require "../includes/connect.php";
require "../includes/session_chk.php";
require "../includes/header-manager.php";
?>
<div class="lower">
    <fieldset><legend>Clients</legend>
        <?php
        $client = "$_POST[client_name]";
        $q1 = "SELECT r.*,c.client_name
        FROM clients c
        INNER JOIN registration r
        ON r.client_id=c.client_id and c.client_name like '$client%'";
        $result = mysql_query($q1, $connect);
        ?>
        <table class="tab">
            <tr>
                <td>Reg Id</td>
                <td>Date In</td>
                <td>Date Out</td>
                <td>Room No</td>
                <td>Client Id</td>
                <td>Client Name</td>
            </tr>
            <?php
            while($arr=  mysql_fetch_array($result))
            {
                echo "<tr>";
                echo "<td>".$arr[0]."</td>";
                echo "<td>".$arr[1]."</td>";
                echo "<td>".$arr[2]."</td>";
                echo "<td>".$arr[3]."</td>";
                echo "<td>".$arr[4]."</td>";
                echo "<td>".$arr[5]."</td>";
                echo "</tr>";
            }
            ?>
        </table>
    </fieldset>
    <?php require "../includes/footer-manager.php"?>
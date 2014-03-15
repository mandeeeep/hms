<html>
    <head>
        <script type="text/javascript" src="<?php echo $path; ?>includes/js/hotel.js">
        </script>

        <link rel="stylesheet" type="text/css" href="<?php echo $path; ?>includes/styles/hotel.css">

    </head>
    <div class="wrapper">
        <body>

            <div class="upper">
                <fieldset><legend>Administration Menu</legend>
                    <table>
                        <tr valign="top">
                            <td class="bd">
                                <fieldset><legend>Add</legend>
                                    <ul>
                                        <li><a href="<?= $path ?>manager/add_roomfrm.php">Room</a></li>
                                        <li><a href="<?= $path ?>manager/add_manager.php">Manager</a></li>
                                        <li><a href="<?= $path ?>manager/add_capacity.php">Capacity</a></li>
                                        <li><a href="<?= $path ?>manager/add_category.php">Category</a></li>
                                    </ul>
                                </fieldset>
                            </td>
                            <td>
                                <fieldset><legend>Remove</legend>
                                    <ul>
                                        <li><a href="<?= $path ?>manager/remove_category.php">Category</a></li>
                                        <li><a href="<?= $path ?>manager/remove_capacity.php">Capacity</a></li>
                                        <li><a href="<?= $path ?>manager/remove_manager.php">Manager</a></li>
                                        <li><a href="<?= $path ?>manager/remove_room.php">Room</a></li>
                                    </ul>
                                </fieldset>
                            </td>
                            <td>
                                <fieldset><legend>Details & Search</legend>
                                    <ul>
                                        <li><a href="<?= $path ?>manager/client_search.php">Client Search </a></li>
                                        <li><a href="<?= $path ?>manager/rooms_detail.php">Rooms</a></li>
                                        <li><a href="<?= $path ?>manager/registration_detail.php">Registration</a></li>
                                        <li><a href="<?= $path ?>manager/clients_detail.php">Clients</a></li>
                                        <li><a href="<?= $path ?>manager/services_detail.php">Services</a></li>
                                        <li><a href="<?= $path ?>manager/room_capacities.php">Room Capacity</a></li>
                                        <li><a href="<?= $path ?>manager/room_categories.php">Room Category</a></li>
                                    </ul>
                                </fieldset>
                            </td>
                            <td>
                                <fieldset><legend>Change</legend>
                                    <ul>
                                        <li><a href="<?= $path ?>manager/change_locker.php">Locker Code</a></li>
                                    </ul>
                                </fieldset>
                            </td>
                        </tr>
                        <tr>
                            <td>                                
                                    <ul>
                                        <li><a href="<?= $path ?>includes/session_end.php">Log Out</a></li>
                                    </ul>                                
                            </td>
                        </tr>
                    </table>

                </fieldset>
            </div>
            <div style="clear:right;">&nbsp;</div>

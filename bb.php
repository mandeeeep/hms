
<?php
require ("includes/connect.php");
?>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="./includes/styles/index.css">
        <title></title>
    </head>
    <body>
        <div class="wrapper">

            <div class="banner">
                <fieldset><legend>I am teh freaking banner!</legend>
                    <div class="left">
                    </div>
                    <div class="right">
                    </div>
            </div>

            <div class="middle">
                <div class="m_left">
                    <fieldset>
                        <legend>So! Where to?</legend>
                        <table>
                            <ul>
                                <tr>
                                    <td><li><a href="<?= $path ?>manager/add_roomfrm.php">Home</a></li></td>
                                <td><li><a href="<?= $path ?>manager/add_roomfrm.php">Search</a></li></td>
                                <td><li><a href="<?= $path ?>manager/add_roomfrm.php">User Added Mobiles</a></li></td>
                                <td><li><a href="<?= $path ?>manager/add_roomfrm.php">Nokia</a></li></td>
                                </tr>
                            </ul>
                            </table>

                    </fieldset>
                </div>
                <div class="m_right">
                    <fieldset><legend>Want in?</legend>
                        <ul>
                            <li><a href="<?= $path ?>manager/add_roomfrm.php">Yup!</a></li>
                        </ul>
                    </fieldset>
                </div>
            </div>

            <div class="lbar">
                <!--                <ol>
                <?php
                $q = "SELECT brand_name FROM brands WHERE 1";
                $result = mysql_query($q, $connect);
                while ($array = mysql_fetch_array($result)) {
                    echo "<li>" . $array[0] . "</li>";
                }
                ?>
                                    </ol>-->
                <fieldset>
                    <legend>Mobile</legend>
                    <ul>
                        <li><a href="<?= $path ?>manager/add_roomfrm.php">Nokia</a></li>
                        <li><a href="<?= $path ?>manager/add_manager.php">Sony Ericsson</a></li>
                        <li><a href="<?= $path ?>manager/add_capacity.php">Samsung</a></li>
                        <li><a href="<?= $path ?>manager/add_category.php">L.G.</a></li>
                        <li><a href="<?= $path ?>manager/add_category.php">Blackbery</a></li>
                        <li><a href="<?= $path ?>manager/add_category.php">Motorola</a></li>
                        <li><a href="<?= $path ?>manager/add_category.php">Micromax</a></li>
                        <li><a href="<?= $path ?>manager/add_category.php">N.E.C</a></li>
                        <li><a href="<?= $path ?>manager/add_category.php">Others</a></li>
                    </ul>
                </fieldset>
            </div>

            <div class="home">
                <fieldset>
                    <legend>Whatcha looking at?</legend>
                </fieldset>
            </div>

            <div class="rbar">
                <fieldset>
                    <legend>Free Space</legend>
                </fieldset>
            </div>

            <div class="footer">
                <fieldset>
                    <legend>Some legal stuff</legend>
                    Copyright Group F 2010
                </fieldset>
            </div>

        </div>

    </body>
</html>

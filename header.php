<?php
    session_start();

    $servername = "localhost";
    $username = "selector";
    $password = "95.pT}^DUtkAjY$";
    try {
        $databaseConnection = mysqli_connect($servername, $username, $password);
    } catch (Exception $e) {
        die("Connection error: ". $e->getMessage());
    }
    $query = "USE nerdygadgets";
    try {
        $result = mysqli_query($databaseConnection, $query);
    } catch (mysqli_sql_exception $e) {
        echo "Query error: ". $e->getMessage() ."";
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/index.css">
        <link rel="stylesheet" href="css/header.css">
    </head>
    <body>
        <div class="header">
            <a href="index.php">
                <img src="images/NGLogo.png" alt="NGlogo" class="logoIMG">
            </a>
            <div class="headerLinks">
                <div>
                    <a href="browse.php">Graphics cards</a>
                </div>
                <div>
                    <a href="browse.php">Motherboard</a>
                </div>
                <div>
                    <a href="browse.php">Processors</a>
                </div>
                <div>
                    <a href="browse.php">SSD</a>
                </div>
                <div>
                    <a href="browse.php">RAM</a>
                </div>
            </div>
            <div class="accountIconContainerContainer">
                <a class="accountIcon" href="cart.php" style="height: 30px;">
                    <img src="images/cart.png" style="height: 30px;">
                </a>
                <div class="accountIconContainer">
                    <img class="accountIcon" src='images/AccountIcon.png'>
                    <div class="accountOptions">
                        <?php
                            if (isset($_SESSION["ID"])) {
                                ?>
                                    <a href="account.php">Account</a>
                                    <a href="logOut.php">Log out</a>
                                <?php
                            } else {
                                ?>
                                    <a href="logIn.php">Log in</a>
                                <?php
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
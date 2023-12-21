<?php
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
                <div class="accountIconContainer">
                    <img class="accountIcon" src='images/AccountIcon.png'>
                    <div class="accountOptions">
                        <a href='
                        <?php
                            if (isset($_SESSION["ID"])) {
                                echo "account.php"?>
                                '>Account
                                <?php
                            } else {
                                echo "logIn.php"?>
                                '>Log in
                                <?php
                            }
                        ?></a>
                        <a href="#">Option 2</a>
                        <a href="#">Option 3</a>
                    </div>
                </div>
            </div>
        </div>
<?php
    include("header.php");

    if (isset($_POST["username"]) && !empty(trim($_POST["username"])) && isset($_POST["password"]) && !empty(trim($_POST["password"]))) {
        $username = $_POST["username"];
        $password = $_POST["password"];
?>
<div class="logInContent">
    <div class="logInTitle"></div>
    <div class="logInForm">
        <label for="username">Username:</label><br><br>
        <input id="username" name="username" type="text"
        value="<?php echo($username); ?>"><br>
        <label for="password">Password:</label><br><br>
        <input id="password" name="password" type="text"
        value="<?php echo($password); ?>"><br>
        <button class="logInButton">logged in</button>
    </div>
</div>
<?php
    } else {
?>

<div class="logInContent">
    <div class="logInTitle"></div>
    <form action="logIn.php" method="POST" class="logInForm">
        <label for="username">Username:</label><br><br>
        <input id="username" name="username" type="text"><br>
        <label for="password">Password:</label><br><br>
        <input id="password" name="password" type="text"><br>
        <button class="logInButton" type="submit">Log in</button>
    </form>
</div>

<?php
    }
    include("footer.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Login</title>
</head>

<body>
    <?php
    include "database/config.php";
    ?>

    <form class="formAlign" action="login_process.php" method="POST">
        <h2 class="header">Login</h2>
        <label for="email">Email: </label>
        <input type="email" name="email" class="input" placeholder="Enter your email"><br>
        <label for="password">Password: </label>
        <input type="password" name="password" class="input" placeholder="Enter your password"><br>
        <input type="submit" value="Sign in" class="btn">
        <span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Don't Have an account? &nbsp;&nbsp;</span><a href="ragister.php">Sign up</a>
    </form>

</body>

</html>
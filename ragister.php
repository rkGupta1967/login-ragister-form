<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="ragister.css">
    <title>Login</title>
</head>

<body>
    <?php
    include "database/config.php";
    ?>


    <form class="formAlign" action="ragister_process.php" method="POST">
        <h2 class="header">Ragister</h2>
        <label for="username">Username: </label>
        <input type="text" name="username" class="input">
        <br>
        <label for="email">Email: </label>
        <input type="email" name="email" class="input" >
        <br>
        <label for="password">Password: </label>
        <input type="password" name="password" class="input" >
        <br>
        <label for="confirmpassword">Confirm password: </label>
        <input type="password" name="confirmpassword" class="input" >
        <br><br>
        <input type="submit" value="Sign up" class="btn">
        <span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Have already account? &nbsp;&nbsp;</span><a href="login.php">Sign in</a>
    </form>
</body>

</html>
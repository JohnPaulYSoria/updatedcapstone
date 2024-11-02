<?php
require_once "../connection/connection.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/login-style.css">
</head>
<body>
    <section class="homepage">
        <div  class="login-form">
            <form action="#" method="post" class="form">
                <p class="form-title">Login Form</p>
                <div class="input-container">
                    <input placeholder="Username" type="text" name="username">
                </div>
                <div class="input-container">
                    <input placeholder="Password" type="password" name="password">
                </div>
                    <button class="submit" type="submit">
                    Sign in
                </button>

                <p class="signup-link">
                    No account?
                    <a href="">Sign up</a>
                </p>
            </form>
        </div>
    </section>
</body>
</html>
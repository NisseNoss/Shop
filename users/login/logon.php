<html lang="en">
<head>
    <link rel="stylesheet" href="/CSS/style.css">
    <title>Hello world</title>
</head>
<body>
<header>
    <div id="header">
        <a href="/index.php">
            <img id="logo" src="" alt="Min logo">
        </a>
        <div id="menu">
            <a class="menubtn" href="#">Knapp</a>
            <a class="menubtn" href="#">Knapp</a>
            <a class="menubtn" href="#">Knapp</a>
        </div>
    </div>
    <a id="loginbtn" class="loginbtn" href="/users/login/logon.php"></a>
</header>
<section id="login" class="vertical center-text">
    <h1>Signup page</h1>
    <form method="post" id="signin-area" class="vertical">
        <label>
            <input class="input" name="email" id="email-input" placeholder="Email">
        </label>
        <label>
            <input class="input margin" name="password" id="pass-input" placeholder="Password" type="password">
        </label>
        <button class="margin" type="submit" id="signup-button">Login</button>
        <div id="login-status"></div>
    </form>

    <p>Do you not have an account. <a href="/users/create/createuser.php">Click here!</a></p>
</section>
<?php
include "getuser.php";
?>

<script src="/users/login/login.js"></script>
<script src="/islogedin.js"></script>
</body>
</html>


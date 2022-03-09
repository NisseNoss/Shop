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

<section id="createuser">
    <form method="post" id="create-area" class="vertical center-text">
        <label>
            <input class="input marign" name="fname" id="fname-input" placeholder="First name">
        </label>
        <label>
            <input class="input marign" name="lname" id="lname-input" placeholder="Last name">
        </label>
        <label>
            <input class="input marign" name="address" id="pass-inputc" placeholder="adress">
        </label>
        <label>
            <input class="input marign" name="postalnr" id="pass-inputc" placeholder="Postal number">
        </label>
        <label>
            <input class="input marign" name="nemail" id="pass-inputf" placeholder="Email">
        </label>
        <label>
            <input class="input marign" name="npassword" id="pass-inputs" placeholder="Password" type="password">
        </label>
        <button class="marign" type="submit" id="signup-button">Login</button>
        <div id="login-status"></div>
    </form>
</section>

<?php
include "insertuser.php";
?>

<script src="/islogedin.js"></script>

</body>
</html>
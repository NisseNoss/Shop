<html lang="en">
<head>
    <link rel="stylesheet" href="/CSS/style.css">
    <title>Hello world</title>
</head>
<body>
<h1>Signup page</h1>
<form method="post" id="signin-area">
    <label>
        <input class="input" name="email" id="email-input" placeholder="Email">
    </label>
    <label>
        <input class="input" name="password" id="pass-input" placeholder="Password" type="password">
    </label>
    <button type="submit" id="signup-button">Login</button>
    <div id="login-status"></div>
</form>
<?php
 include "getuser.php";
?>



</body>
</html>


<html lang="en">
<head>
    <meta charset="UTF-8">
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
    <a id="cartpagebtn">
        <img src="/img/shopingcart.png" alt="Handlekurv">
    </a>
    <a id="loginbtn" class="loginbtn" href="/users/login/logon.php"></a>
</header>
<section id="cartItems" class="vertical space-around">

</section>
<div id="button-container" class="whiteBackground margin-auto">
    <a href="/index.php">Fortsett å handle</a>
    <a href="">Gå til Kassen</a>
    <p id="totalPrice"></p>
</div>
<script src="getCart.js"></script>
<script src="/islogedin.js"></script>
</body>
</html>
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
    <a id="cartpagebtn" href="/checkout/shopingcart.php">
        <img src="/img/shopingcart.png" alt="Handlekurv">
    </a>
    <a id="loginbtn" class="loginbtn" href="/users/login/logon.php"></a>
</header>
<section id="cardsec">
    <?php
        include "products/loadcard.php";
    ?>
</section>
<script src="/islogedin.js"></script>
<script src="/products/addToCart.js"></script>
</body>
</html>
    
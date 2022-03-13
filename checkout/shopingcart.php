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
    <button type="submit" onclick="makeOrder()">Bestill</button>
    <p id="totalPrice"></p>
</div>

<form id="f1" method="post">
    <input type="hidden" id="p1" name="totalprice">
    <input type="hidden" id="p2" name="userid">
    <input type="hidden" id="p3" name="sender" value="">
</form>


<?php
    include "makeOrder.php";
?>

<script crossorigin="anonymous" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
        src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="/checkout/getCart.js"></script>
<script src="/islogedin.js"></script>
<script src="/checkout/sendCart.js"></script>
</body>
</html>
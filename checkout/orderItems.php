<html lang="en">
<head>
    <link rel="stylesheet" href="/CSS/style.css">
    <title>Hello world</title>
</head>
<body>

<form id="f2" method="post">
    <input type="hidden" id="p4" name="orderid">
    <input type="hidden" id="p5" name="itemid">
    <input type="hidden" id="p6" name="amount">
    <input type="hidden" id="p7" name="sender" value="">
</form>

<?php

$value = $_POST['sender'];
if ($value == "send") {

// Tilkoblingiformasjon
    $tjener = "127.0.0.1";
    $brukernavn = "root";
    $passord = "root";
    $database = "shop";

    $kobling = new mysqli($tjener, $brukernavn, $passord, $database);

    $kobling->set_charset("utf8");

    $OID = $_POST["orderid"];
    $IID = $_POST["itemid"];
    $A = $_POST["amount"];

    $sql = "INSERT INTO `order_has_items` (order_id, item_id, amount)
            VALUE ('$OID', '$IID', '$A')";
    echo "$sql";
    $resultat = $kobling->query($sql);

}
?>

<script crossorigin="anonymous" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
        src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="/checkout/orderitems.js"></script>
</body>
</html>


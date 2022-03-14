<?php
$value = $_POST['sender'];
if ($value=="send") {

// Tilkoblingiformasjon
    $tjener = "127.0.0.1";
    $brukernavn = "root";
    $passord = "root";
    $database = "shop";

    $kobling = new mysqli($tjener, $brukernavn, $passord, $database);

    $kobling->set_charset("utf8");

    $UID = $_POST["userid"];
    $TP = $_POST["totalprice"];

    $sql2 = "INSERT INTO `order` (total_price, user_id) VALUES ('$TP', '$UID')";

    $sql = "SELECT * FROM `order` WHERE user_id = '$UID' ORDER BY order_time DESC LIMIT 1";
    echo "$sql";
    if($kobling->query($sql2)) {
        $resultat = $kobling->query($sql);

        while ($rad = $resultat->fetch_assoc()) {
            $OID = $rad["order_id"];
        }
        echo "<script>
            let Data = [$OID]
            console.log(Data)
            localStorage['oid'] = JSON.stringify(Data);
            window.location.href = 'orderItems.php';
        </script>";
    }
}
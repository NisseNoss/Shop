<?php

// Tilkoblingiformasjon
$tjener = "127.0.0.1";
$brukernavn = "root";
$passord = "root";
$database = "shop";

$kobling = new mysqli($tjener, $brukernavn, $passord, $database);

$kobling->set_charset("utf8");

$FN = $_POST["fname"];
$LN = $_POST["lname"];
$AD = $_POST["address"];
$PNR = $_POST["postalnr"];
$NEM = $_POST["email"];
$NPAS = $_POST["password"];

$sql2 = "INSERT INTO user (firstname, lastname, adress, email, password, acess_level, post_place_postalnr)
VALUES ('$FN', '$LN', '$AD', '$NEM', '$NPAS', 0, '$PNR')";

$sql = "SELECT * FROM `user` WHERE email = '$NEM' and password = '$NPAS'";


if($kobling->query($sql2)) {
    $resultat = $kobling->query($sql);

    while ($rad = $resultat->fetch_assoc()) {
        $RUID = $rad["user_id"];
    }
    echo "Account was made successfully $sql2";
    echo "<script>
        let cData = [$RUID, '$FN', '$LN', '$AD', '$PNR', '$NEM', '$NPAS']
        localStorage['data'] = JSON.stringify(cData);
        //window.location.href = '/index.php';
        console.log('$RUID')
    </script>";
} else {
    echo "Noe gikk galt med spørringen $sql2 ($kobling->error).";
}

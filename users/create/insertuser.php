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

$sql = "INSERT INTO user (firstname, lastname, adress, email, password, acess_level, post_place_postalnr)
VALUES ('$FN', '$LN', '$AD', '$NEM', '$NPAS', 0, '$PNR')";

if($kobling->query($sql)) {
    echo "Account was made successfully";
    echo "<script>
        let cData = ['$FN', '$LN', '$AD', '$PNR', '$NEM', '$NPAS']
        localStorage['data'] = JSON.stringify(cData);
        window.location.href = '/index.php';
    </script>";
} else {
    echo "Noe gikk galt med spørringen $sql ($kobling->error).";
}

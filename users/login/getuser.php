<?php
// Tilkoblingiformasjon
$tjener = "127.0.0.1";
$brukernavn = "root";
$passord = "root";
$database = "shop";

$kobling = new mysqli($tjener,$brukernavn,$passord,$database);

$kobling->set_charset("utf8");

$EM = $_POST["email"];
$PAS = $_POST["password"];

$sql = "select * FROM user where email = '$EM' and password = '$PAS'";

$resultat = $kobling->query($sql);

while ($rad = $resultat->fetch_assoc()) {
    $RUID = $rad["user_id"];
    $RFN = $rad["firstname"];
    $RLN = $rad["lastname"];
    $RA = $rad["adress"];
    $REM = $rad["email"];
    $RPAS = $rad["password"];
    $RPN = $rad["post_place_postalnr"];
}

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    if (!isset($REM) || !isset($RPAS)) {
        echo "Your e-mail or password is wrong.";
    } else {
        echo "<script> let data = [$RUID, '$RFN', '$RLN', '$RA', '$REM', '$RPAS', $RPN]
        localStorage['data'] = JSON.stringify(data);
        </script>";
        echo "<script> window.location.href = '/index.php'; </script>";
    }
}

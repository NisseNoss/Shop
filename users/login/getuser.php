<?php
// TODO Fix to work for the create thing
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

    echo "<input id='RUID' type='hidden' value='$RUID'/>";
    echo "<input id='RFN' type='hidden' value='$RFN'/>";
    echo "<input id='RLN' type='hidden' value='$RLN'/>";
    echo "<input id='RA' type='hidden' value='$RA'/>";
    echo "<input id='REM' type='hidden' value='$REM'/>";
    echo "<input id='RPAS' type='hidden' value='$RPAS'/>";
    echo "<input id='RPN' type='hidden' value='$RPN'/>";

    echo "<script>getValue()</script>";
}

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    if (!isset($REM)) {
        echo "Your e-mail or password is wrong.";
    }
}
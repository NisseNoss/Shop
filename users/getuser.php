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
    $EM = $rad["email"];
    $PAS = $rad["password"];
}
?>
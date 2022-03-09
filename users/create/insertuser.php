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
$PNR = $_POST["postnr"];
$NEM = $_POST["nemail"];
$NPAS = $_POST["npassword"];

$sql = "INSERT INTO user (firstname, lastname, adress, email, password, acess_level, post_place_postalnr)
VALUES ('$FN', '$LN', '$AD', '$PNR', '$NEM', 0, '$NPAS')";
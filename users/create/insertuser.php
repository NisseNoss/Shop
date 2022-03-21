<?php

// Tilkoblingiformasjon
$tjener = "127.0.0.1";
$brukernavn = "root";
$passord = "root";
$database = "shop";

// lager kobling
$kobling = new mysqli($tjener, $brukernavn, $passord, $database);

$kobling->set_charset("utf8");
// Variabler til data fra nettsiden
$FN = $_POST["fname"];
$LN = $_POST["lname"];
$AD = $_POST["address"];
$PNR = $_POST["postalnr"];
$NEM = $_POST["email"];
$NPAS = $_POST["password"];

// legger brukeren i databasen
$sql2 = "INSERT INTO user (firstname, lastname, adress, email, password, acess_level, post_place_postalnr)
VALUES ('$FN', '$LN', '$AD', '$NEM', '$NPAS', 0, '$PNR')";

// henter brukeren
$sql = "SELECT * FROM `user` WHERE email = '$NEM' and password = '$NPAS'";


if($kobling->query($sql2)) { // sender kode å skjekker om det virket
    $resultat = $kobling->query($sql);
    while ($rad = $resultat->fetch_assoc()) {
        $RUID = $rad["user_id"]; // bruker iden
    }
    echo "Account was made successfully $sql2";
    echo "<script>
        // legger all info om bruker i variable
        let cData = [$RUID, '$FN', '$LN', '$AD', '$PNR', '$NEM', '$NPAS'] 
        localStorage['data'] = JSON.stringify(cData); // legger bruker i localstorage
        console.log('$RUID')
        window.location.href = '/index.php'; // sender deg til index
    </script>";
} else {
    echo "Noe gikk galt med spørringen $sql2 ($kobling->error).";
}

<?php

    // Tilkoblingiformasjon
    $tjener = "127.0.0.1";
    $brukernavn = "root";
    $passord = "root";
    $database = "shop";

    $kobling = new mysqli($tjener,$brukernavn,$passord,$database);

    $kobling->set_charset("utf8");

    $sql = "SELECT * FROM items";

    $resultat = $kobling->query($sql);

    while ($rad = $resultat->fetch_assoc()) {
        $itemN = $rad['item_name'];
        $price = $rad['price'];
        $stock = $rad['stock'];
        $img = $rad['image'];

        echo "<div class='card'>";
            echo "<img src='$img' alt='Det er ingen bilde'>";
            echo "<div class='card-interface'>";
            echo "<div class='prod-info'>";
            echo "<h3 class='headercolor'>$itemN</h3>";
            echo "<p class='color'>$price kr</p>";
            echo "<p class='color'>$stock på lager</p>";
            echo "</div>";
            echo "<button class='buy-button'></button>";
            echo "</div>";
        echo "</div>";
    }
?>
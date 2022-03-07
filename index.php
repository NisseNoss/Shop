<html lang="en">
<head>
    <link rel="stylesheet" href="/CSS/style.css">
    <title>Hello world</title>
</head>
<body>
<header>
    <div id="header">
        <a href="">
            <img id="logo" src="" alt="Min logo">
        </a>
        <div id="menu">
            <a class="menu-btn" href="#">Knapp</a>
            <a class="menu-btn" href="#">Knapp</a>
            <a class="menu-btn" href="#">Knapp</a>
        </div>
    </div>
</header>
<section id="cardsec">
    <?php
        include "products/loadcard.php";
    ?>
</section>
</body>
</html>
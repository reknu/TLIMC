<html lang="pl">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css">
        <title>TLiMC</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Red+Hat+Text:ital,wght@0,300..700;1,300..700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">      <!-- ikonki strzalek -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />   <!-- ikonka menu -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />   <!-- ikonka wiecej -->
        <script src="calendar.js" defer></script>
        
    </head>
<body>

<?php
    if (!isset($_GET["site"]))
        {$file = 'main';}
    else
        {$file = $_GET["site"];}


    $ext = '.php';

    echo '<div id="container">';
        include("menu_bar.php");
        echo '<div class="menu_phone">';
        echo '<a href="https://www.tlimc.szczecin.pl/dzialy/plan_lekcji/" class="menu_phone_button">Plan lekcji</a>';
        echo '<a href="" class="menu_phone_button">Uczeń</a>';
        echo '<a href="" class="menu_phone_button">Rodzic</a>';
        echo'<a href="" class="menu_phone_button">Szkoła</a>';
        echo '<a href="" class="menu_phone_button">Kontakt</a>';
    echo '</div>';
        include("$file$ext");
        include("footer.php");
    echo '</div>';

?>








<script src="menu.js"></script>
<script src="sidebar.js"></script>
</body>
</html>
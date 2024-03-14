<html lang="pl">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css">
        <title>TLiMC</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Red+Hat+Text:ital,wght@0,300..700;1,300..700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">
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
        include("$file$ext");
        include("footer.php");
    echo '</div>';

?>









</body>
</html>
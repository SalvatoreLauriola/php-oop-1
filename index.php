<?php
include_once __DIR__ . '/movies.php';
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Film</h1>
    <ul>
        <li>Prezzo scontato di <?php echo $movie1->title  ?> al 20%</li>
        <li>Vecchio Prezzo $ <?php echo $movie1->price ?></li>
        <li>Nuovo Prezzo $ <?php echo $movie1->calcPrice(20) ?> </li>
    </ul>
    <ul>
        <li>Prezzo scontato di <?php echo $movie2->title  ?> al 40%</li>
        <li>Vecchio Prezzo $ <?php echo $movie2->price ?></li>
        <li>Nuovo Prezzo $ <?php echo $movie2->calcPrice(40) ?> </li>
    </ul>
    <ul>
        <li>Prezzo scontato di <?php echo $movie3->title  ?> al 10%</li>
        <li>Vecchio Prezzo $ <?php echo $movie3->price ?></li>
        <li>Nuovo Prezzo $ <?php echo $movie3->calcPrice(10) ?> </li>
    </ul>
    
</body>
</html>
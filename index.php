<?php
// includo la classe principale
include __DIR__ . '/classes/genres.php';
include __DIR__ . '/classes/movie.php';
include __DIR__ . '/db.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>OOP-1</title>
</head>

<body>
    <div class="container">
        <?php foreach ($movies as $movie) { ?>
            <div class="card"><?= $movie->allData() ?></div>
        <?php } ?>
    </div>

</body>

</html>
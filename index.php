<?php

include __DIR__ . '/classes/movie.php';
include __DIR__ . '/data.php';



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous" defer></script>
</head>

<body>
    <div class="">
        <ul><?php
            foreach ($arrMovie as $movie) { ?>
                <li><?= $movie->title ?> - <?= $movie->year ?> - <?= $movie->vote ?> <?php foreach ($movie->genre as $genre) { ?>
                        <?= $genre ?>
                    <?php } ?>
                </li>
            <?php } ?>
        </ul>
    </div>
</body>

</html>
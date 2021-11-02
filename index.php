<?php
require __DIR__ . '/partials/Classes.php';

$movies = [
  "bladeRunner2049" => new Movie (
    "Blade Runner 2049",
    "Denis",
    ["Ryan Gosling", "Harrison Ford", "Jared Leto"],
    "Sci-fi"),
  "dune" => new Movie (
    "Dune: Part One",
    "Denis Villeneuve",
    ["Timothée Chalamet", "Rebecca Ferguson", "Jason Momoa"],
    "Sci-fi")
  ];

$movies["bladeRunner2049"]->set("author", "Denis Villeneuve");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php foreach($movies as $movie) {?>
  <h2><?= $movie->get("name") ?></h2>
  <p>Genre: <?= $movie->get("genre") ?></p>
  <p>Author: <?= $movie->get("author") ?></p>
  <p>Cast: <?php foreach ($movie->get("cast") as $actor) echo "{$actor}, " ?></p>
  <?php } ?>
</body>
</html>
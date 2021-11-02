<?php
require __DIR__ . '/partials/Classes.php';

$bladeRunner2049 = new Movie (
  "Blade Runner 2049",
  "Denis",
  ["Ryan Gosling", "Harrison Ford", "Jared Leto"],
  "Sci-fi");

echo $bladeRunner2049->get("author");
echo $bladeRunner2049->set("author", "Denis Villeneuve");
echo $bladeRunner2049->get("author");
?>
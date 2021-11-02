<?php
class Movie {
  private $name;
  private $author;
  private $cast;
  private $genre;

  function __construct($_name, $_author, $_cast, $_genre) {
    $this->name = $_name;
    $this->author = $_author;
    $this->cast = $_cast;
    $this->genre = $_genre;
  }

  function set($property, $value) {
    $this->$property = $value;
  }
  function get($property) {
    return $this->$property;
  }
}

?>
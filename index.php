<?php
session_start();
require_once('vendor/autoload.php');


use SRC\Services\FilmsServices;

$movies = new FilmsServices();

$allMovies = $movies->getLastMovies();
// echo '<pre>';
// var_dump($_SESSION['basket']);
// echo '</pre>';
// die();
// var_dump($_SESSION['basket']);
include('src/Views/home.view.php');

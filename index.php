<?php
require_once('vendor/autoload.php');

use SRC\Services\FilmsServices;

$movies = new FilmsServices();

$allMovies = $movies->getLastMovies();



include('src/Views/home.view.php');

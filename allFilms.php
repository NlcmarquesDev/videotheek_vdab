<?php
session_start();
require_once('vendor/autoload.php');

use SRC\Services\FilmsServices;


$movies = new FilmsServices();
//Get Titel for all movies
$allMovies = $movies->getAllMovies();




include('src/Views/allFilms.view.php');

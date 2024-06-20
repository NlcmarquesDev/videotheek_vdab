<?php
session_start();
require_once('vendor/autoload.php');


use SRC\Services\FilmsServices;
use SRC\Services\RentsServices;
use SRC\Services\FilmsAPIServices;

// $movies = new FilmsServices();
// $rents = new RentsServices();
// //Get Titel for all movies
// $allMovies = $movies->getAllTitels();
// // get all codes for the especific movies

// $allCodes = $movies->getAllCodes();

// $filmNotReturn = $rents->getFilmsNotReturn();

// $allFilms = [];
// foreach ($allCodes as $data) {
//     $allDatas['titel'] = $data['titel'];
//     $allDatas['filmStore'] = $movies->checkFilmIsInStore($data['codes'], $filmNotReturn['codes_not_return']);
//     $allDatas['numberFilm'] = $movies->numberFilmInStore($data['codes'], $filmNotReturn['codes_not_return']);
//     array_push($allFilms, $allDatas);
// }

// $allData = $allFilms;




include('src/Views/films.view.php');

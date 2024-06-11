<?php
require_once('vendor/autoload.php');


use SRC\Services\RentsServices;
use SRC\Services\FilmsServices;

$movies = new FilmsServices();
$rents = new RentsServices();
//Get Titel for all movies
$allMovies = $movies->getAllTitels();
// get all codes for the especific movies

$allCodes = $movies->getAllCodes();

$filmNotReturn = $rents->getFilmsNotReturn();

// var_dump($allCodes);
// die();

$isInStore = $rent->filmIsInStore();
function checkFilmIsInStore(string $codes, $films)
{
    $code = explode(',', $codes);
    $NotReturn = explode(',', $films);

    $newString = '';

    foreach ($code as $cod) {
        if (in_array($cod, $NotReturn)) {
            $newString .= '<b>' . $cod . '</b>';
        } else {
            $newString .= $cod . ', ';
        }
    }
    return $newString;
}

function numberFilmInStore(string $codes, $films)
{
    $code = explode(',', $codes);
    $NotReturn = explode(',', $films);

    $inStore = count($code);

    foreach ($code as $cod) {
        if (in_array($cod, $NotReturn)) {
            $inStore--;
        }
    }
    return $inStore;
}

// function








$allData = $allCodes;

include('src/Views/home.view.php');

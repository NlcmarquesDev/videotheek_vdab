<?php

require_once('vendor/autoload.php');


use SRC\Services\FilmsServices;

$movies = new FilmsServices();


if (isset($_GET['id'])) {
    $movie = $movies->getFilmById($_GET['id']);
    if (!$movie) {
        header('location: /videotheek_app/index.php');
        exit();
    }

    $codes = $movies->getAllCodesById($_GET['id']);

    //funcao para verificar se esta alugado ou nao?
    function isInStore($code)
    {
        $movies = new FilmsServices();
        $isStore = $movies->isCodeInStore($code);
        if (count($isStore)  === 0) {
            return  false;
        } else {
            return true;
        }
    }

    include('src/Views/film.view.php');
}
//id dont exist the id from the film just redirect to the all films

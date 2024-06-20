<?php

use SRC\Services\FilmsServices;

session_start();
require_once('vendor/autoload.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $codes = $_POST['codes'];

    $films = new FilmsServices();


    foreach ($codes as $code) {
        if (strlen($code) != 0) {
            $dataFromTheMovie = $films->getMovieFromTheCode((int)$code);
            $data = [
                'image' => $dataFromTheMovie['Poster_Link'],
                'title' => $dataFromTheMovie['Series_title'],
                'code' => $code
            ];




            if (isset($_SESSION['basket'])) {
                array_push($_SESSION['basket'], $data);
                header('location:/videotheek_app/index.php');
                exit();
            } else {
                $_SESSION['basket'] = [$data];
                header('location:/videotheek_app/index.php');
                exit();
            }
        }
    }
}

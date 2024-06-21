<?php
session_start();

require_once('vendor/autoload.php');

use SRC\Services\RentsServices;



if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $movies = new RentsServices();

    $basket = $_SESSION['basket'];

    for ($i = 0; $i < count($basket); $i++) {

        $copy_id = $basket[$i]['copy_id'];
        $rentFilm = $movies->saveRentMovie($copy_id);

        $_SESSION = [];
        $_SESSION['alert'] = '<b>Thank, you!</b>Your movies have been rented';
    }
}

header('location:/videotheek_app/index.php');
exit();

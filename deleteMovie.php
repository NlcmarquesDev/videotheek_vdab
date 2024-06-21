<?php
session_start();
require_once('vendor/autoload.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $array = $_SESSION['basket'];
    $index = (int)$_POST['delete'];
    var_dump($_SESSION['basket']);
    unset($array[$index]);
    $_SESSION['basket'] = array_values($array);


    $_SESSION['alert'] = 'Movie deleted successfully from your basket';
}

header('location:/videotheek_app/index.php');
exit();

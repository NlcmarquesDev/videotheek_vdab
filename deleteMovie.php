<?php
session_start();
require_once('vendor/autoload.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $array = $_SESSION['basket'];
    $index = (int)$_POST['delete'];

    unset($array[$index]);
    $_SESSION['basket'] = $array;
    $_SESSION['alert'] = 'Movie deleted successfully from your basket';
}

header('location:/videotheek_app/index.php');
exit();

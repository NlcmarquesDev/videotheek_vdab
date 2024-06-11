<?php

declare(strict_types=1);

namespace SRC\Services;

use SRC\Data\FilmsDAO;

class FilmsServices
{
    private $films;
    public function __construct()
    {
        $this->films = new FilmsDAO();
    }

    public function getAllMovies()
    {
        return $this->films->getAll();
    }
    public function getAllTitels()
    {
        return $this->films->getTitels();
    }
    public function getAllCodes()
    {
        return $this->films->getCodes();
    }
}

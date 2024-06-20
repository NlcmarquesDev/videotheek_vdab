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
    public function getFilmById($id)
    {
        return $this->films->getById($id);
    }
    public function getAllTitels()
    {
        return $this->films->getTitels();
    }
    public function getAllCodes()
    {
        return $this->films->getCodes();
    }
    public function getAllCodesById(int $id)
    {
        return $this->films->getCodesById($id);
    }

    public function getLastMovies()
    {
        return $this->films->getLastMovies();
    }
    public function isCodeInStore(int $code)
    {
        return $this->films->isThisCodeInStore($code);
    }
    public function getMovieFromTheCode($code)
    {
        return $this->films->getMovieFromTheCode($code);
    }
}

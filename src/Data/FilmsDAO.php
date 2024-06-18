<?php

declare(strict_types=1);

namespace SRC\Data;

use SRC\Core\Database;

class FilmsDAO
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }
    public function getAll()
    {
        return $this->db->query("SELECT * FROM imdb")->findAll();
    }
    public function getById($id)
    {
        return $this->db->query("SELECT * FROM imdb WHERE movie_id=:id", [':id' => $id])->find();
    }
    public function getTitels()
    {
        return $this->db->query("SELECT titel FROM imdb")->findAll();
    }

    public function getLastMovies(int $max = 12)
    {
        return $this->db->query("SELECT * FROM imdb Where IMDB_Rating >=8.8 LIMIT " . $max)->findAll();
    }
    public function getCodes()
    {
        return $this->db->query("SELECT f.titel, GROUP_CONCAT(c.copy_number ORDER BY c.copy_number SEPARATOR ', ') AS codes
FROM films f
JOIN copies c ON f.film_id = c.film_id
GROUP BY f.titel")->findAll();
    }
}

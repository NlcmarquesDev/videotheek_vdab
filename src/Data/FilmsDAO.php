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
        return $this->db->query("SELECT i.Series_Title, GROUP_CONCAT(c.copy_number ORDER BY c.copy_number SEPARATOR ', ') AS codes
FROM imdb i
JOIN copies c ON i.movie_id = c.movie_id
GROUP BY i.Series_Title")->findAll();
    }
    public function getCodesById(int $id)
    {
        return $this->db->query("SELECT `copy_number`
FROM `copies`
WHERE `movie_id` = :id;", [':id' => $id])->findAll();
    }

    public function isThisCodeInStore(int $code)
    {
        return $this->db->query("SELECT c.copy_number
FROM copies c
JOIN rents r ON c.copy_id = r.copy_id
WHERE c.copy_number = :code
  AND r.date_delivery IS NULL;", [':code' => $code])->findAll();
    }
}

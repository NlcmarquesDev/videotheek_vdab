<?php

declare(strict_types=1);

namespace SRC\Data;

use SRC\Core\Database;

class RentsDAO
{
    private $db;
    public function __construct()
    {
        $this->db = new Database();
    }
    public function getCodesNotReturn()
    {
        return $this->db->query("SELECT GROUP_CONCAT( c.copy_number) as codes_not_return
FROM rents a
JOIN copies c ON a.copy_id = c.copy_id
WHERE a.date_delivery IS NULL")->find();
    }

    public function saveRent(int $copy_id)
    {
        $date = date("Y-m-d");
        $user_id = 1;

        return $this->db->query("INSERT INTO rents (user_id,copy_id, date_rent) VALUES (:user_id, :copy_id, :date_rent)", [
            ':user_id' => $user_id,
            ':copy_id' => $copy_id,
            'date_rent' => $date
        ]);
    }
}

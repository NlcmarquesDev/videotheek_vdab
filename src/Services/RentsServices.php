<?php

declare(strict_types=1);

namespace SRC\Services;

use SRC\Data\RentsDAO;

class RentsServices
{
    private $rent;
    public function __construct()
    {
        $this->rent = new RentsDAO();
    }

    public function getFilmsNotReturn()
    {
        return $this->rent->getCodesNotReturn();
    }
}

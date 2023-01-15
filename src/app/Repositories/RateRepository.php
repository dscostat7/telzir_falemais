<?php

namespace App\Repositories;

use App\Constants\CamposRegistro;
use App\Models\Rate;
use Illuminate\Support\Facades\DB;

class RateRepository extends Rate
{
    public function table()
    {
        $sql = "SELECT * FROM rate";

        return DB::SELECT($sql);
    }
}
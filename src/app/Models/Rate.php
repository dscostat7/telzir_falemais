<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rate extends Model
{
    const TABLE = 'rate';
    const PRIMARY_KEY = 'id';
    const COD_ORIG = 'cod_orig';
    const NAME_ORIG = 'name_orig';
    const COD_DEST = 'cod_dest';
    const NAME_DEST = 'name_dest';
    const PRICE = 'price';

    public $incrementing = false;

    protected $table = self::TABLE;
    protected $primaryKey = self::PRIMARY_KEY;
    protected $fillable = [
        self::PRIMARY_KEY,
        self::COD_ORIG,
        self::NAME_ORIG,
        self::COD_DEST,
        self::NAME_DEST,
        self::PRICE
    ];

    public function scopeRate()
    {
        return self::PRICE;
    }
}

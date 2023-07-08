<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Prices extends Model
{
    const PRICES = [
        'eco' => [
            'id' => 2,
            'color' => 'price-green',
            'qty' => 8,
            'gr1' => 280,
            'ind1' => 350,
            'gr2' => 160,
            'ind2' => 400,
        ],
        'pop' => [
            'id' => 3,
            'color' => 'price-yellow',
            'qty' => 16,
            'gr1' => 260,
            'ind1' => 320,
            'gr2' => 640,
            'ind2' => 1280,
        ],
        'sav' => [
            'id' => 4,
            'color' => 'price-red',
            'qty' => 48,
            'gr1' => 250,
            'ind1' => 300,
            'gr2' => 2400,
            'ind2' => 4800,
        ],
    ];

    public static function getPrices()
    {
        return self::PRICES;
    }
}

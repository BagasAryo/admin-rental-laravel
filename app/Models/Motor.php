<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;

#[Fillable(['brand', 'model', 'year', 'license_plate', 'status', 'price_per_day'])]
class Motor extends Model
{
    protected function casts()
    {
        return [
            'price_per_day' => 'decimal:2',
        ];
    }
}

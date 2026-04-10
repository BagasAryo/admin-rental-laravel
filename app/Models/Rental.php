<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

#[Fillable(['user_id', 'motor_id', 'start_date', 'end_date'])]
class Rental extends Model
{
    use HasUuids;

    protected function casts()
    {
        return [
            'id_rental' => 'string',
            'user_id' => 'string',
            'motor_id' => 'integer',
            'start_date' => 'datetime',
            'end_date' => 'datetime',
        ];
    }
}

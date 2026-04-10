<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

#[Fillable('rental_id', 'invoice_number', 'amount', 'status_payment', 'payment_method')]
class Payment extends Model
{
    use HasUuids;

    protected function casts()
    {
        return [
            'id' => 'string',
            'rental_id' => 'string',
            'amount' => 'decimal:2',
            'status_payment' => 'string',
            'payment_method' => 'string',
        ];
    }
}

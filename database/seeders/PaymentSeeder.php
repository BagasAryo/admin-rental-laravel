<?php

namespace Database\Seeders;

use App\Models\Payment;
use App\Models\Rental;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $rental = Rental::first();
        $payments = [
            [
                'rental_id' => $rental->id,
                'invoice_number' => 'INV-' . date('Ymd') . strtoupper(uniqid()),
                'amount' => 100000,
                'status_payment' => 'completed',
                'payment_method' => 'credit_card',
            ],
            [
                'rental_id' => $rental->id,
                'invoice_number' => 'INV-' . date('Ymd') . strtoupper(uniqid()),
                'amount' => 150000,
                'status_payment' => 'pending',
                'payment_method' => 'bank_transfer',
            ],
        ];

        foreach ($payments as $payment) {
            Payment::create($payment);
        }
    }
}

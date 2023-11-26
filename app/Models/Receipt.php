<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Receipt extends Model
{
    protected $table = 'receipt';

    protected $fillable = [
        'id',
        'receipt_id',
        'external_patient_id',
        'user_id',
        'clinic_id',
        'receipt_date',
        'amount',
        'allocation',
        'created_at',
        'updated_at',
        'receipt_created_date',
    ];
}

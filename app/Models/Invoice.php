<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

    protected $table = 'invoice';

    protected $fillable = [
        'id',
        'invoice_no',
        'external_patient_id',
        'practitioner_id',
        'external_user_id',
        'date',
        'total_amount',
        'created_at',
        'updated_at',
        'clinic_id',
        'course_id',
        'invoice_display',
    ];
}

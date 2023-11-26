<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointments extends Model
{
    use HasFactory;

    protected $table = 'appointments';

    protected $fillable = [
        'id',
        'appointment_id',
        'external_patient_id',
        'practitioner_id',
        'user_id',
        'appointment_status',
        'appointment_date',
        'created_at',
        'updated_at',
        'course_id',
        'status_cancellation_time',
    ];
}

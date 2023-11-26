<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patients extends Model
{
    use HasFactory;

    protected $table = 'patients';

    protected $fillable = [
        'is_active',
        'age',
        'external_patient_id',
        'created_at',
        'updated_at',
    ];
}

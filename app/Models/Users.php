<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class Users extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'users';

    protected $fillable = [
        'id',
        'external_user_id',
        'fname',
        'lname',
        'username',
        'user_group_id',
        'is_practitioner',
        'email',
        'email_verified_at',
        'password',
        'remember_token',
        'created_at',
        'updated_at',
        'clinic_id',
        'status',
        'is_user',
        'is_first_login',
        'job_title',
        'job_designations_id',
        'filter_col',
    ];
}
